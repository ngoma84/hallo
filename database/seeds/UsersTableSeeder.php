<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset users table
        DB::table('users')->truncate();

        // generate 3 new users
        DB::table('users')->insert([
        	[
        		'name' => "John Doe",
        		'email' => "johndoe@testmail.com",
        		'password' => bcrypt('secret')
        	],
        	[
        		'name' => "Jane Doe",
        		'email' => "janedoe@testmail.com",
        		'password' => bcrypt('secret')
        	],
        ]);
    }
}
