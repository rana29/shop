<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Factory;
use App\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $faker = Faker\Factory::create();
            foreach(range(1,3) as $index){
        	
        	Slider::create([
        	'title'=>$faker->sentence,
        	'subtitle'=>$faker->paragraph,
        	'url'=>$faker->imageUrl(),
        	'image'=>$faker->imageUrl(),
        	'start'=>$faker->date(),
        	'end'=>$faker->date(),
        	'status'=>1
        	
        	]);
        }


        /*  DB::table('sliders')->insert([
            'title' => Str::random(5),
            'subtitle' => Str::random(5),
            'url' =>Str::random(5),
            'image' =>Str::random(5),
            'start' =>Str::random(5),
            'end' =>Str::random(5),
            'start' =>date(5-10-20),
            'end' =>date(5-10-30),
            
            'status' =>1
            
        ]);*/
    }
}
