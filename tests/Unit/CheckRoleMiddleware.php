<?php

namespace Tests\Unit;
require_once 'vendor/fzaninotto/faker/src/autoload.php';

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Middleware\CheckRole;
use App\User;
use Illuminate\Http\JsonResponse;

use Illuminate\Http\Request;

class CheckRoleMiddleware extends TestCase
{
  protected $request, $middleware, $user, $faker, $permissions;
  
  public function __construct(){
    $this->faker = \Faker\Factory::create();
    $this->permissions = User::$permissions;
  }

  protected function setUp(){
    $this->request = new \Illuminate\Http\Request();
    $this->middleware = new \App\Http\Middleware\CheckRole();
    $u = new User;
    $u->name = $this->faker->name;
    $u->email  = time().$this->faker->email;

    $this->request->setUserResolver(function() use (&$u){
      return $u; 
    }); 

    $this->user = $u;
  }

  public function testNominalUsage() {
    //for each permission to attach to a user
    foreach ($this->permissions as $userPermission => $level) {
      $this->user->permission = $userPermission;

      // for each permission to test
      foreach ($this->permissions as $routePermission => $level) {
        $result = $this->middleware->handle($this->request, function($request) {
          return new JsonResponse([], 200);
        }, $routePermission); 

        $userPermissionIndex = array_search($userPermission , array_keys($this->permissions));
        $routePermissionIndex = array_search($routePermission, array_keys($this->permissions));

        
        if($routePermissionIndex <= $userPermissionIndex) {
          $this->assertEquals($result->status(), 200);
        } else {
          $this->assertEquals($result->status(), 403);
        }
        
      }
    } 
  }

 
  public function testRoleRequiredWithoutAuth() {
    $this->user = null;
    $result = $this->middleware->handle($this->request, function($request) {
      return new JsonResponse([], 200);
    }, 'guest'); 

    $this->assertEquals($result->status(), 403);
  }

  public function testIfUserOfThisMiddlewareDoesntUnderstandHowItWorks() {
    $this->user->permission = 'guest';
    $result = $this->middleware->handle($this->request, function($request) {
      return new JsonResponse([], 200);
    }, 'fooBarBaz'); 

    $this->assertEquals($result->status(), 403);
  }

}
