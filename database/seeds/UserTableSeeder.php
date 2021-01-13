<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          

            Db::table('users')->insert([

        	
        	'name'=>'masud',
        	
        	'email'=>'ra@gmail.com',
        	'password'=>bcrypt('123'),

        ]);

        }
    
}
