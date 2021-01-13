<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Slider;

class SiteController extends Controller
{

    public function index(){

    	$catagory=Catagory::with('subcats')->get();
    	$slider=Slider::get();


    	//return $slider;
    	//return $catagory;
    	return view('frontend.home',compact('catagory','slider'));
    }

     public function product(){
    	return view('frontend.product');
    }
}

