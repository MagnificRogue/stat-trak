<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MetricRoleInstanceTest extends TestCase{
// /user/{user_id}/role/{role_id}/metric/{metric_id}/instances/create
  public function testReturnUnauthrized(){
    $response = $this->call('GET', '/users/1/roles/1/metrics/1/instances');
    $response->assertStatus(400);
  }

  public function testGetAllMetricRoleInstances(){
    //get all the metric role instances
    $response = $this->callAuthenticated('GET','/users/1/roles/1/metrics/1/instances');
    $this->assertTrue($response->isOk());
    $metric_role_instances = json_decode($response->content(),true)["data"]["metric_role_instances"];
    //make sure all the metric role instances are there
    $this->assertCount(sizeOf($metric_role_instances),\App\MetricRoleInstance::all());
  }

  public function testGetSpecificMetricRoleInstance(){
    //get metric role instance  1
    $response = $this->callAuthenticated("GET","/users/1/roles/1/metrics/1/instances/1");
    $this->assertTrue($response->isOk());
    $metric_role_instance = json_decode($response->content(),true)["data"]["metric_role_instance"];
    //make sure the metric role instance is who it should be 
    $first_metric_role_instance = \App\MetricRoleInstance::first();
    $this->assertEquals($metric_role_instance["id"],$first_metric_role_instance->id);
    $this->assertEquals($metric_role_instance["metric_role_id"],$first_metric_role_instance->metric_role_id);
    $this->assertEquals($metric_role_instance["count"],$first_metric_role_instance->count);
  }

  public function testCreateMetricRoleInstance(){
    //get all the metric role instances 
    $response = $this->callAuthenticated('GET', '/users/1/roles/3/metrics/6/instances');
    $this->assertTrue($response->isOk());
    $metric_role_instances = json_decode($response->content(),true)["data"]["metric_role_instances"];

    //create a new metric 
    $response = $this->callAuthenticated("GET","/users/1/roles/1/metrics/5/instances/create",["count"=>"5"]);
    $this->assertTrue($response->isOk());
    $metric_role_instance = json_decode($response->content(),true)["data"]["metric_role_instance"];
    
    //make sure the metric is new metric 
    $this->assertEquals($metric_role_instance["count"],"5");
    $this->assertCount(sizeOf($metric_role_instances)+1,\App\MetricRoleInstance::all());
  }

  public function testUpdateMetricRoleInstance(){
    
    //get the last metric (should be the metric created in the test above)
    $metric_role_instance_to_update = \App\MetricRoleInstance::all()->last();     
    $this->assertEquals($metric_role_instance_to_update->count,"5");
    
    //create a new metric 
    $response = $this->callAuthenticated("PUT","/users/1/roles/3/metrics/6/instances/$metric_role_instance_to_update->id",["count"=>"69"]);
    $this->assertTrue($response->isOk());
    $metric_role_instance = json_decode($response->content(),true)["data"]["metric_role_instance"];
    $this->assertNotEquals($metric_role_instance["count"],"5");
    $this->assertEquals($metric_role_instance["count"],"69");
  }

  public function testDeleteMetricRoleInstance(){
    //get all the metrics 
    $response = $this->callAuthenticated("GET","/users/1/roles/3/metrics/6/instances");
    $this->assertTrue($response->isOk());
    $metric_role_instances = json_decode($response->content(),true)["data"]["metric_role_instances"];
    
    //get the last metric (should be the metric created in the test above)
    $metric_to_delete = \App\MetricRoleInstance::all()->last();     
    $this->assertEquals($metric_to_delete->count,"69");
    
    //delete the metric created last metric 
    $response = $this->callAuthenticated("DELETE","/users/1/roles/3/metrics/6/instances/$metric_to_delete->id");
    $this->assertTrue($response->isOk());
    
    $this->assertCount(sizeOf($metric_role_instances)-1,\App\MetricRoleInstance::all());
  }
}
