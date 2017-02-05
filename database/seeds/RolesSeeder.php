<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(EloquentPopulator\Populator $populator, Faker\Generator $faker)
    {
      
      $populator->add(App\Role::class, 20, [
        'name' => function() use($faker) {
          return $faker->unique()->jobTitle;
        } 
      ]);

      $populator->execute();
      


      // Lets attach some users to some roles
      $users = App\User::all();
      $roles = App\Role::all();
      $users->each( function($user) use ($roles) {
        $user->roles()->sync($roles->random(rand(1,5))->pluck('id')->toArray());
     });

    }

}
