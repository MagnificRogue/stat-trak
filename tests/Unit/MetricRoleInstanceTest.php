<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MetricRoleInstanceTest extends TestCase{

  public $testUser, $testRole, $testMetric, $testMetricRoleId, $validUri;

  protected function setup(){
    parent::setUp();
    $u = \App\User::with('roles')->first(); 
    $this->testUser = $u;
    $this->testRole = $u->roles->first();
    $this->testMetric = $this->testRole->metrics->first();

    $this->testMetricRoleId = $this->testRole->metrics()->first()->pivot->id;
    
    //Save a few just in case  they don't exist
    factory(\App\MetricRoleInstance::class, 25)->create([
      'user_id' => $u->id,
      'metric_role_id' => $this->testMetricRoleId,
      'count' => rand(1,50) 
    ]);

    $response =  $this->authenticate($u->email);
    $this->assertTrue($response->isOk());
    $this->validUri = '/users/'.$u->id.'/roles/'.$this->testRole->id.'/metrics/'.$this->testMetric->id.'/instances';
  }


  public function testReturnUnauthrized(){
    $response = $this->call('GET', '/instances');
    $response->assertStatus(400);
  }

  public function testGetAllMetricRoleInstances(){
    //get all the metric role instances
    $response = $this->callAuthenticated('GET','/instances');
    $this->assertTrue($response->isOk());
    $metric_role_instances = json_decode($response->content(),true)["data"]["metric_role_instances"];
    //make sure all the metric role instances are there

    $this->assertCount(sizeOf($metric_role_instances),\App\MetricRoleInstance::all());  
  }

  public function testGetSpecificMetricRoleInstance(){
    //get metric role instance  1
    $response = $this->callAuthenticated("GET","/instances/1");
    $this->assertTrue($response->isOk());
    $metric_role_instance = json_decode($response->content(),true)["data"]["metric_role_instance"];
    //make sure the metric role instance is who it should be 
    $first_metric_role_instance = \App\MetricRoleInstance::first();
    $this->assertEquals($metric_role_instance["id"],$first_metric_role_instance->id);
    $this->assertEquals($metric_role_instance["metric_role_id"],$first_metric_role_instance->metric_role_id);
    $this->assertEquals($metric_role_instance["count"],$first_metric_role_instance->count);
  }

  public function testCreateMetricRoleInstance(){

    $instances = \App\MetricRoleInstance::all();
    //create a new instance
    $response = $this->callAuthenticated("GET",'/instances/create',["count"=>"5",'user' => '13', 'role' => '1', 'metric' => '1']);
    $this->assertTrue($response->isOk());


    $metric_role_instance = json_decode($response->content(),true)["data"]["metric_role_instance"];
     
    //make sure the metric is new instance 
    $this->assertEquals($metric_role_instance["count"],"5");

    $this->assertEquals($instances->count()+1,\App\MetricRoleInstance::all()->count());
  }

  public function testShouldNotCreateMetricRoleInstance(){
    //get all the metric role instances 
    $instances = \App\MetricRoleInstance::all();


    //create a new instance
    $ids = array();
    $response = $this->callAuthenticated("GET",'/instances/create',["count"=>"5",'user' => '1', 'role' => '1', 'metric' => 100000]);
    $this->assertEquals($response->getStatusCode(),404);
    
    //make sure the metric did not get added 
    $this->assertEquals($instances->count(),\App\MetricRoleInstance::all()->count());
  }

  public function testUpdateMetricRoleInstance(){
    
    //get the last metric (should be the metric created in the test above)
    $metric_role_instance_to_update = \App\MetricRoleInstance::all()->last();     

    $response = $this->callAuthenticated("PUT","/instances/".$metric_role_instance_to_update->id,["count"=>"69"]);
    $this->assertTrue($response->isOk());

    $metric_role_instance = json_decode($response->content(),true)["data"]["metric_role_instance"];
    $this->assertNotEquals($metric_role_instance["count"],$metric_role_instance_to_update->count);
    $this->assertEquals($metric_role_instance["count"],"69");
  }

  public function testDeleteMetricRoleInstance(){
    //get all the metrics 
    $response = $this->callAuthenticated("GET","/instances");
    $this->assertTrue($response->isOk());
    $metric_role_instances = json_decode($response->content(),true)["data"]["metric_role_instances"];
    
    //get the last metric (should be the metric created in the test above)
    $instances = \App\MetricRoleInstance::all();
    $metric_to_delete = $instances->last();     
    
    //delete the metric created last metric 
    $response = $this->callAuthenticated("DELETE","/instances/".$metric_to_delete->id);
    $this->assertTrue($response->isOk());
    
    $this->assertEquals($instances->count()-1,\App\MetricRoleInstance::all()->count());
  }
}
