<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::truncate();

        \App\User::create( [
            'email' => 'admin@example.com' ,
            'password' => Hash::make( 'admin' ) ,
            'name' => 'Admin' ,
        ] );
    }
}
