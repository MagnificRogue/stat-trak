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


      $populator->add(App\Role::class, 100 , [
        'name' => function() use($faker) {
          return $faker->unique()->jobTitle;
        },
        'company_id' => function() {
          return App\Company::inRandomOrder()->first()->id;
        }
      ]);

      $populator->execute();
      

      $companies = App\Company::all();

      $companies->each(function($c){
        $u = App\User::where('company_id', $c->id)->get();
        $r = App\Role::where('company_id', $c->id)->get(); 
        $u->each( function($user) use ($r) {
          $user->roles()->sync($r->random(1)->pluck('id')->toArray());
        });
      });

    }

}
