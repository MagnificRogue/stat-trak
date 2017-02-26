<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CompanyTest extends TestCase
{
  public function testReturnUnauthrized(){
    $response = $this->call('GET', '/companies');
    $response->assertStatus(400);
  }

  public function testGetAllCompanies(){
    //get all the companies 
    $response = $this->callAuthenticated('GET', '/companies');
    $this->assertTrue($response->isOk());
    $companies = json_decode($response->content(),true)["data"]["companies"];
    //make sure all the companies are there
    $this->assertCount(sizeOf($companies),\App\Company::all());
  }

  public function testGetSpecificCompany(){
    //get company 1 
    $response = $this->callAuthenticated('GET','/companies/1');
    $this->assertTrue($response->isOk());
    $company = json_decode($response->content(),true)["data"]["company"];
    
    //make sure the company is who it should be 
    $first_company = \App\Company::first();
    $this->assertEquals($company["id"],$first_company->id);
    $this->assertEquals($company["name"],$first_company->name);
  }


  public function testCreateCompany(){
    //get all the companies
    $response = $this->callAuthenticated('GET', '/companies');
    $this->assertTrue($response->isOk());
    $companies = json_decode($response->content(),true)["data"]["companies"];

    //create a new company 
    $response = $this->callAuthenticated('GET', '/companies/create',["name"=>"Fake Company"]);
    $this->assertTrue($response->isOk());
    $company = json_decode($response->content(),true)["data"]["company"];
    
    //make sure the company is new company 
    $this->assertEquals($company["name"],"Fake Company");
    $this->assertCount(sizeOf($companies)+1,\App\Company::all());
  }

  public function testUpdateCompany(){
    //commenting out this test until we figure out what to do with 
    //deleting a company
    /** 
    //get the last company (should be the company created in the test above
    $company_to_update = \App\Company::all()->last();     
    $this->assertEquals($company_to_update->name,"Fake Company");
    
    //update the new company 
    $response = $this->callAuthenticated('PUT', "/companies/$company_to_update->id",["name"=>"Real Company"]);
    $this->assertTrue($response->isOk());
    $company = json_decode($response->content(),true)["data"]["company"];
    $this->assertNotEquals($company["name"],"Fake Company");
    $this->assertEquals($company["name"],"Real Company");
  }

  public function testDeleteCompany(){
    //get all the companies 
    $response = $this->callAuthenticated('GET', '/companies');
    $this->assertTrue($response->isOk());
    $companies = json_decode($response->content(),true)["data"]["companies"];
    
    //get the last company (should be the company created in the test above)
    $company_to_delete = \App\Company::all()->last();     
    $this->assertEquals($company_to_delete->name,"Real Company");
    
    //delete the company created last company 
    $response = $this->callAuthenticated('DELETE', "/companies/$company_to_delete->id");
    $this->assertTrue($response->isOk());
    $company = json_decode($response->content(),true)["data"]["company"];
    $this->assertCount(sizeOf($companies)-1,\App\Company::all());
    **/
  }
}
