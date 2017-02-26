<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MetricTest extends TestCase{

  //RUN THIS BEFORE RUNNING TESTS!!!
  //factory(\App\Metric::class, 50)->create();

  public function testReturnUnauthrized(){
    $response = $this->call('GET', '/metrics');
    $response->assertStatus(400);
  }

  public function testGetAllMetrics(){
    //get all the metrics 
    $response = $this->callAuthenticated('GET', '/metrics');
    $this->assertTrue($response->isOk());
    $metrics = json_decode($response->content(),true)["data"]["metrics"];
    //make sure all the metrics are there
    $this->assertCount(sizeOf($metrics),\App\Metric::all());
  }

  public function testGetSpecificMetric(){
    //get metric 1
    $response = $this->callAuthenticated('GET','/metrics/1');
    $this->assertTrue($response->isOk());
    $metric = json_decode($response->content(),true)["data"]["metric"];
    //make sure the metric is who it should be 
    $first_metric = \App\Metric::first();
    $this->assertEquals($metric["id"],$first_metric->id);
    $this->assertEquals($metric["description"],$first_metric->description);
  }

  public function testCreateMetric(){
    //
    //get all the metric 
    $response = $this->callAuthenticated('GET', '/metrics');
    $this->assertTrue($response->isOk());
    $metrics = json_decode($response->content(),true)["data"]["metrics"];

    //create a new metric 
    $response = $this->callAuthenticated('GET','/metrics/create',["description"=>"Fake Metric","company_id"=>1]);
    $this->assertTrue($response->isOk());
    $metric = json_decode($response->content(),true)["data"]["metric"];
    
    //make sure the metric is new metric 
    $this->assertEquals($metric["description"],"Fake Metric");
    $this->assertCount(sizeOf($metrics)+1,\App\Metric::all());
  }

  public function testUpdateMetric(){
    
    //get the last metric (should be the metric created in the test above)
    $metric_to_update = \App\Metric::all()->last();     
    $this->assertEquals($metric_to_update->description,"Fake Metric");
    
    //create a new metric 
    $response = $this->callAuthenticated('PUT',"/metrics/$metric_to_update->id",["description"=>"Real Metric"]);
    $this->assertTrue($response->isOk());
    $metric = json_decode($response->content(),true)["data"]["metric"];
    $this->assertNotEquals($metric["description"],"Fake Metric");
    $this->assertEquals($metric["description"],"Real Metric");
  }

  public function testDeleteMetric(){
    //get all the metrics 
    $response = $this->callAuthenticated('GET', '/metrics');
    $this->assertTrue($response->isOk());
    $metrics = json_decode($response->content(),true)["data"]["metrics"];
    
    //get the last metric (should be the metric created in the test above)
    $metric_to_delete = \App\Metric::all()->last();     
    $this->assertEquals($metric_to_delete->description,"Real Metric");
    
    //delete the metric created last metric 
    $response = $this->callAuthenticated('DELETE', "/metrics/$metric_to_delete->id");
    $this->assertTrue($response->isOk());
    
    $this->assertCount(sizeOf($metrics)-1,\App\Metric::all());
  }
}
