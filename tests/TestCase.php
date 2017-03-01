<?php

namespace Tests;

use Illuminate\Database\Seeder;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase{
    use CreatesApplication;

    protected function setup(){
      parent::setUp();
      //make the authenticated user
      $response = $this->createAuthenticatedUser();
      $this->assertTrue($response->isOk());
    }

    protected function createAuthenticatedUser(){
      $this->user = \App\User::first();
      $response = $this->call('POST', "/users/sign_in",["email"=> $this->user->email,"password"=> "password"]);
      $this->token = $response->headers->get("JWT");
      return $response;
    }

    protected function callAuthenticated($method, $uri, array $data = [], array $headers = []){

      if ($this->token && !isset($headers['Authorization'])) {
        $headers['Authorization'] = "Bearer: $this->token";
      }
      $server = $this->transformHeadersToServerVars($headers);
      $response = $this->call(strtoupper($method), $uri, $data, [], [], $server);
      return $response;
    }
}
