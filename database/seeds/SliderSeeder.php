<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('sliders')->insert([


        	'title'=>'Md.Admin',
        	'subtitle'=>'Md.Admin',
        	'subtitle'=>'Md.Admin',
        	'url'=>'Md.Admin',
        	'image'=>'Md.Admin',
        	'start'=>'20.1.19',
        	'end'=>'21.1.19',
        	'status'=>'1',
        	

       ]); 
    }
}
