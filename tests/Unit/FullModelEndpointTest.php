<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Str;

class FullModelEndpointTest extends TestCase
{
  protected $modelResources;

  public function __construct() {
    $this->modelResourceUriArray = [
      \App\Company::class => 'companies',
      \App\User::class => 'users',
      \App\Role::class => 'roles',
      \App\Metric::class => 'metrics'
    ]; 
  }
  /*
   * Test to make sure that you can't access this endpoint without a jwt 
   */
  public function testReturnUnauthorized(){
    foreach($this->modelResourceUriArray as $model => $endpoint){
      $response = $this->call('GET', '/full/'.$endpoint. '/1');
      $response->assertStatus(400);
    }
  }

  /*
   * Test to make sure that if a token is present on each endpoint request,
   *  the request returns with an instance of the requested model
   *  that has all the properties of fullWith if specified
   */
  public function testGetValidInstanceOfResource(){
    foreach($this->modelResourceUriArray as $model => $endpoint){
      $response = $this->callAuthenticated('GET', '/full/'.$endpoint. '/1');
      $this->assertTrue($response->isOk());
        
      $response = json_decode($response->content(), true);
      $instance = $model::firstOrFail();
      $this->assertEquals($instance["id"], $response["data"][Str::singular($endpoint)]["id"]);

      if(property_exists($model, 'fullWith')) {
        foreach($model::$fullWith as $relation) {
          $this->assertArrayHasKey($relation, $response["data"][Str::singular($endpoint)]);
        } 
      }
    }
  }

    /*
     * Test to make sure if a request is made to a resource that doesnt exist a 400 error
     * is returned
     */
    public function testClientIsDumb(){
      $response = $this->call('GET','/full/bars/1'); 
      $response->assertStatus(400);
    }

    /*
     * Test to make sure if a request is made to access a resource that maps 
     * to a class in the same namespace that isn't an instance of a model a 400 error is returned
     */
    public function testSmarterClientIsDumb(){
      $response = $this->call('GET','/full/metric_role_pivots/1'); 
      $response->assertStatus(400);
    }

    /*
     * Test to makes sure if a request to a valid endpoint is made but an invalid id
     * is given a 404 error is returned
     */
    public function testClientUsesWrongId(){
      foreach($this->modelResourceUriArray as $model => $endpoint){
          $response = $this->callAuthenticated('GET', '/full/'.$endpoint. '/-1');
          $response->assertStatus(404);
        }
    }
}
