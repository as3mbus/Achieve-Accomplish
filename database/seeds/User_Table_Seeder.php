<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class User_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();
      User::create(array(
          'name'     => 'Chris Sevilleja',
          'email'    => 'chris@scotch.io',
          'password' => Hash::make('awesome'),
      ));
    }
}
