<?php

use Illuminate\Database\Seeder;

class MetricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(EloquentPopulator\Populator $populator, Faker\Generator $faker)
    {
      
      $populator->add(App\Metric::class, 50, [
        'description' => function() use($faker) {
          return $faker->unique()->word;
        },
        'company_id' => function() {
          return App\Company::all()->random(1)->first()->id; 
        } 
      ]);

      $populator->execute();

      
      // lets associate some metrics with some roles
      App\Role::all()->each(function($r){
        $m = App\Metric::where('company_id', $r->company_id)->first();
        if(! $m)
          return;
        $r->metrics()->save($m);
      });
      //save a few hundred instances 
        $users = App\User::all();
        $users->each( function($user){
          $user->roles->each(function($role) use ($user){
            for($i =0; $i< 100; $i++) {
               $role->metrics->first()->pivot->instances()->create(['user_id'=>$user->id,'count' => rand(0,50)]); 
            };  
          }); 
        });
    }
}
