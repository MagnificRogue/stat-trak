<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoleTest extends TestCase
{
  public function testReturnUnauthrized(){
    $response = $this->call('GET', '/roles');
    $response->assertStatus(400);
  }

  public function testGetAllRoles(){
    //get all the roles 
    $response = $this->callAuthenticated('GET', '/roles');
    $this->assertTrue($response->isOk());
    $roles = json_decode($response->content(),true)["data"]["roles"];
    //make sure all the roles are there
    $this->assertCount(sizeOf($roles),\App\Role::all());
  }

  public function testGetSpecificRole(){
    //get role 1
    $response = $this->callAuthenticated('GET', '/roles/1');
    $this->assertTrue($response->isOk());
    $role = json_decode($response->content(),true)["data"]["role"];
    //make sure the role is who it should be 
    $first_role = \App\Role::first();
    $this->assertEquals($role["id"],$first_role->id);
    $this->assertEquals($role["name"],$first_role->name);
  }


  public function testCreateRole(){
    //get all the role 
    $response = $this->callAuthenticated('GET', '/roles');
    $this->assertTrue($response->isOk());
    $roles = json_decode($response->content(),true)["data"]["roles"];

    //create a new role 
    $response = $this->callAuthenticated('GET', '/roles/create',["name"=>"Fake Role","company_id"=>1]);
    $this->assertTrue($response->isOk());
    $role=  json_decode($response->content(),true)["data"]["role"];
    
    //make sure the role is new role
    $this->assertEquals($role["name"],"Fake Role");
    $this->assertCount(sizeOf($roles)+1,\App\Role::all());
  }

  public function testUpdateRole(){
    
    //get the last role (should be the role created in the test above)
    $role_to_update = \App\Role::all()->last();     
    $this->assertEquals($role_to_update->name,"Fake Role");
    
    //create a new role 
    $response = $this->callAuthenticated('PUT', "/roles/$role_to_update->id",["name"=>"Real Role"]);
    $this->assertTrue($response->isOk());
    $role = json_decode($response->content(),true)["data"]["role"];
    $this->assertNotEquals($role["name"],"Fake Role");
    $this->assertEquals($role["name"],"Real Role");
  }

  public function testDeleteRole(){
    //get all the roles 
    $response = $this->callAuthenticated('GET', '/roles');
    $this->assertTrue($response->isOk());
    $roles = json_decode($response->content(),true)["data"]["roles"];
    
    //get the last role (should be the role created in the test above)
    $role_to_delete = \App\Role::all()->last();     
    $this->assertEquals($role_to_delete->name,"Real Role");
    
    //delete the role created last role 
    $response = $this->callAuthenticated('DELETE', "/roles/$role_to_delete->id");
    $this->assertTrue($response->isOk());
    
    $this->assertCount(sizeOf($roles)-1,\App\Role::all());
  }
}
