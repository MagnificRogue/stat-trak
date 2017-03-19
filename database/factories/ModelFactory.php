<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('password'),
        //'company_id' => factory(App\Company::class)->create()->id,
        'created_at' => function() {
          return date('Y-m-d H:i:s');
        },
        'updated_at' => function() {
          return date('Y-m-d H:i:s');
        },
        'permission' => 'standard'
    ];
});

$factory->define(App\Metric::class, function (Faker\Generator $faker) {

    return [
        'description' => $faker->name,
    ];
});

//Define how to create a factory for a Role
$factory->define(App\Role::class, function (Faker\Generator $faker){
  return [
    'name' => $faker->jobTitle,
    //'company_id' => factory(App\Company::class)->create()->id
  ];
});


//Define how to create a factory for a MetricRoleInstance
// this factory kind of needs metrics to be attached roles in some way shape or form,
// so keep that in mind
$factory->define(App\MetricRoleInstance::class, function(Faker\Generator $faker) use ($factory){
  static $metricRoles;

  
  if (!$metricRoles){
    $metricRoles = \DB::table('metric_role')->select('id as metric_role_id','role_id')->get();
  }
  
  $tuple = $metricRoles->random(1)->first(); 

  return [
    'user_id' => App\Role::where('id', $tuple->role_id)->first()->users->random(1)->first()->id,
    'metric_role_id' => $tuple->metric_role_id,
    'count' => rand(1,50)
  ];
});
