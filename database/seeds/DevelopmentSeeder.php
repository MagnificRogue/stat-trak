<?php

use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
    //create 10 company each with 50 standard users 
    $companies = factory(App\Company::class, 10)->create()->each(function($c){

      $users = factory(App\User::class, 50)->create([
        'company_id' => $c->id, 
      ]);

      $c->users()->saveMany($users);

      //and 10 roles
      $roles = factory(App\Role::class, 10)->create([
        'company_id' => $c->id 
      ]);
      
      //and 20 metrics
      $metrics = factory(App\Metric::class, 20)->create([
        'company_id' => $c->id 
      ]);

      //associate random metrics to random roles
      $roles->each(function($r) use ($metrics){
        $r->metrics()->saveMany($metrics->random(rand(2,5)));
      });

      // assign to each user a random amount of roles
      $users->each(function($user) use ($roles){
        $user->roles()->saveMany($roles->random(rand(1,4))); 
      });

      //create some standard users for each company
      $c->users()->save(factory(App\User::class)->create([
          'company_id' => $c->id,
          'email' => 'Admin'.$c->id.'@ex.com',
          'permission' => 'admin'
        ])); 

        $c->users()->save(factory(App\User::class)->create([
          'company_id' => $c->id,
          'email' => 'Standard'.$c->id.'@ex.com',
          'permission' => 'standard'
        ])); 

        $c->users()->save(factory(App\User::class)->create([
          'company_id' => $c->id,
          'email' => 'Guest'.$c->id.'@ex.com',
          'permission' => 'guest'
        ])); 
    });


      //create 1000 instances of a metric_role
      factory(App\MetricRoleInstance::class, 1000)->create(); 


    
      //create our super user, em@il.com as a homage to dr. playbook
      factory(App\User::class)->create([
        'email' => 'em@il.com',
        'permission' => 'super_admin',
        'company_id' => null 
      ]);
    }
}
