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
      $r1 = new App\Role(['name' => 'super_admin']);
      $r2 = new App\Role(['name' => 'admin']);
      $r1->save();
      $r2->save();

      $companies = App\Company::all();

      $companies->each(function($company) use($r2){
        $u = new App\User(['name' => 'User'.$company->id, 'email' => 'admin'.$company->id.'@ex.com', 'password' => bcrypt('password')]); 
        $u->save();
        $u->roles()->save($r2);
        $company->users()->save($u);
      });

      $u = new App\User(['name' => 'Super Admin Name', 'email' => 'em@il.com', 'password' => bcrypt('password')]);
      $u->save(); 
      $u->roles()->save($r1);
    }
}
