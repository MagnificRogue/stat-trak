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
      $response =  $this->authenticate(\App\User::where('permission','super_admin')->first()->email);
      $this->assertTrue($response->isOk());
    }

    protected function callAuthenticated($method, $uri, array $data = [], array $headers = []){

      if ($this->token && !isset($headers['Authorization'])) {
        $headers['Authorization'] = $this->token;
      }
      $server = $this->transformHeadersToServerVars($headers);
      $response = $this->call(strtoupper($method), $uri, $data, [], [], $server);
      return $response;
    }

    protected function authenticate($email) {
      $this->user = \App\User::where('email',$email)->first();
      $response = $this->call('POST', '/users/sign_in', ['email' => $this->user->email, 'password' => 'password']); 
      $this->assertTrue($response->isOk());
      $this->token = $response->headers->get('Authorization');
      return $response;
    }

}
