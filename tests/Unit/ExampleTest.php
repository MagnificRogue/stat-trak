<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase{
    /**
     * A basic test example.
     *
     * @return void
     */

  public function testReturnUnauthrized(){
    $response = $this->call('GET', '/users');
    $response->assertStatus(400);
  }

  public function testGetAllUsers(){
    //get all the users
    $response = $this->callAuthenticated('GET', '/users');
    $this->assertTrue($response->isOk());
    $users = json_decode($response->content());

    //make sure all the users are there
    $this->assertCount(sizeOf($users),\App\User::all());
  }

  public function testGetSpecificUser(){
    //get user 1, also current logged in user
    $response = $this->callAuthenticated('GET', '/users/1');
    $this->assertTrue($response->isOk());
    $user =  json_decode($response->content(),true);
    
    //make sure the user is who it should be 
    $this->assertEquals($user["id"],$this->user["id"]);
    $this->assertEquals($user["email"],$this->user["email"]);
  }

}
