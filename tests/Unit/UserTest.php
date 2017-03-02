<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase{

  public function testReturnUnauthrized(){
    $response = $this->call('GET', '/users');
    $response->assertStatus(400);
  }

  public function shouldReturn404ErrorForAUserThatDoesNotExist(){
    $response = $this->callAuthenticated('GET', '/users/90909090999');
    $this->assertNotEquals($response->getStatusCode(),500);
    $this->assertTrue($response->getStatusCode(),404);
  }
  public function testGetAllUsers(){
    //get all the users
    $response = $this->callAuthenticated('GET', '/users');
    $this->assertTrue($response->isOk());
    $users = json_decode($response->content(),true)["data"]["users"];
    //make sure all the users are there
    $this->assertCount(sizeOf($users),\App\User::all());
  }

  public function testGetSpecificUser(){
    //get user 1, also current logged in user
    $response = $this->callAuthenticated('GET', '/users/1');
    $this->assertTrue($response->isOk());
    $user =  json_decode($response->content(),true)["data"]["user"];
    //make sure the user is who it should be 
    $this->assertEquals($user["id"],$this->user["id"]);
    $this->assertEquals($user["email"],$this->user["email"]);
  }


  public function testCreateUser(){
    //get all the users
    $response = $this->callAuthenticated('GET', '/users');
    $this->assertTrue($response->isOk());
    $users = json_decode($response->content(),true)["data"]["users"];

    //create a new user 
    $response = $this->callAuthenticated('GET', '/users/create',["name"=>"Brian Ludwig, JR","password"=>"Harper86","email"=>"faker@poop.com"]);
    $this->assertTrue($response->isOk());
    $user =  json_decode($response->content(),true)["data"]["user"];
    
    //make sure the user is new user 
    $this->assertEquals($user["email"],"faker@poop.com");
    $this->assertCount(sizeOf($users)+1,\App\User::all());
  }

  public function testUpdateUser(){
    
    //get the last user (should be the user created in the test above
    $user_to_update = \App\User::all()->last();     
    $this->assertEquals($user_to_update->email,"faker@poop.com");
    
    //create a new user 
    $response = $this->callAuthenticated('PUT', "/users/$user_to_update->id",["email"=>"real@poop.com"]);
    $this->assertTrue($response->isOk());
    $user =  json_decode($response->content(),true)["data"]["user"];
    $this->assertNotEquals($user["email"],"faker@poop.com");
    $this->assertEquals($user["email"],"real@poop.com");
  }

  public function testDeleteUser(){
    //get all the users
    $response = $this->callAuthenticated('GET', '/users');
    $this->assertTrue($response->isOk());
    $users = json_decode($response->content(),true)["data"]["users"];
    
    //get the last user (should be the user created in the test above
    $user_to_delete = \App\User::all()->last();     
    $this->assertEquals($user_to_delete->email,"real@poop.com");
    
    //delete the user created last user 
    $response = $this->callAuthenticated('DELETE', "/users/$user_to_delete->id");
    $this->assertTrue($response->isOk());
    
    $this->assertCount(sizeOf($users)-1,\App\User::all());
  }
}
