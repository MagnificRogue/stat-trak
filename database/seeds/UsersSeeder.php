<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(EloquentPopulator\Populator $populator, Faker\Generator $faker)
    {

      $populator->add(App\User::class, 100, [
        'name' => function() use($faker) {
          return $faker->name; 
        },
        'email' => function() use($faker) {
          return $faker->unique()->safeEmail; 
        },
        'password' => function() use($faker) {
          return bcrypt('password'); 
        },
        'company_id' => function() {
          return App\Company::inRandomOrder()->first()->id;
        }
      ]);

      $populator->seed();
    }
}
