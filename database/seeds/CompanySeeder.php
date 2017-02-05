<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(EloquentPopulator\Populator $populator, Faker\Generator $faker)
    {
      $populator->add(App\Company::class, 20, [
        'name' => function() use($faker) {
          return $faker->unique()->company; 
        } 
      ]);

      $populator->execute();
    }
}
