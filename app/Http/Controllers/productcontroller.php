<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Catagory;
use App\Subcatagory;
use App\Brand;
use Session;
use Image;
use File;
use Str;

class productcontroller extends Controller
{




    public function create(){
      $cat=Catagory::orderBy('id','desc')->get();
    	$subcat=Subcatagory::orderBy('id','desc')->get();
    	$brand=Brand::orderBy('id','desc')->get();
      return view('product.index_product',compact('cat','subcat','brand'));
}





    public function store(request $request){
      //return $request;

    
    if ($request->hasfile('gallary')){

      $image=$request->file('gallary');

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;
      $location=public_path('productimage/'.$name);
      $upload=$image->move($location,$name);
   /*   Image::make($image)
      ->resize(50,50)
      ->save($location);*/
     

    } 
     
   
      
    /*$request->validate([
    'title'=>'required|unique:catagories,catagory|min:3',
    'subtitle'=>'required|unique:catagories,catagory|min:3',
    ]);*/


   	$product= new Product();
   	$product->name=$request->name;
   	$product->slug=str::slug($request->name);   
   	$product->catagory_id=$request->catagory_id;
    $product->subcat_id=$request->subcat_id;
    $product->brand_id=$request->brand_id;
   	$product->buying_price=$request->buying_price;
    $product->selling_price=$request->selling_price;
    $product->special_price=$request->special_price;
    $product->special_start=$request->special_start;
    $product->special_end=$request->special_end;
    $product->model=$request->model;
    $product->quantity=$request->quantity;
    $product->video_url=$request->video_url;
    $product->warranty=$request->warranty;
    $product->condaition=$request->condation;
    $product->duration=$request->duration;
    $product->description=$request->description;
    $product->gallery=$name;
     $product->save();


    Session::flash('success', 'product has added successfully');
    return back();

   }



     

   /************************************single image add***************************************/

   	   


     	/******************************multiple image add******************************************/

    /* 	$file=[];
     	
     	if ($request->hasfile('image')){
      
     	foreach($request->file('image') as $image){


//echo $image;
 //exit;

     	$rand=rand(100,1000);
     	$ex=$image->getClientOriginalExtension();
     	$name=$rand.'.'.$ex;
     	$location=public_path('product/'.$name);
     	Image::make($image)
     	->resize(50,50)
     	->save($location);

     	//$product->image=$name;
     	
     // $product->image=$file;
     	$file[]=$name;
      $product->image=json_encode($file);

}
}*/
     /* print_r($file);
      exit;*/
      //$product->save();
    //Brand::create($request->all());
      //Session::flash('success', 'product has added successfully');
   	  //return back();
   

//}


   
   public function manage(){

   $product=product::orderBy('id','desc')->get();
    return view('product.manage_product',compact('product'));
   }




   public function edit(){

   }



   public function update(){

   }




   public function delete($id){
   $delete=product::find($id);
   $image=json_decode($delete->image);
   foreach($image as $file){
   unlink(public_path('product/'.$file));
   }
   
   //unlink(public_path('product/'.$delete->image));//single image delete
   $delete->delete();
   Session::flash('success', 'product has delete successfully');
   return back();

   }
}


