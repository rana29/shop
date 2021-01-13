<!-- controller  -->

 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Session;
use Image;
use File;

class slidercontroller extends Controller
{


    public function create(){

      return view('slider.index_slider');
}

    public function store(request $request){

      /*return $request;
      exit;*/
    /*$request->validate([
    'title'=>'required|unique:catagories,catagory|min:3',
    'subtitle'=>'required|unique:catagories,catagory|min:3',
    ]);*/
      $slider= new Slider();
      $slider->title=$request->title;
      $slider->subtitle=$request->subtitle;
      $slider->start=$request->start;
      $slider->end=$request->end;
      $slider->url=$request->url;

   /************************************single image add***************************************/

      /* if ($request->hasfile('image')){

      $image=$request->file('image');

      //dd($image);

      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;
      $location=public_path('slider/'.$name);
      Image::make($image)
      ->resize(50,50)
      ->save($location);

      $slider->image=$name;*/

      $file=[];
      
      if ($request->hasfile('image')){
      
      foreach($request->file('image') as $image){


/* echo $image;
 exit;
*/
      $rand=rand(100,1000);
      $ex=$image->getClientOriginalExtension();
      $name=$rand.'.'.$ex;
      $location=public_path('slider/'.$name);
      Image::make($image)
      ->resize(50,50)
      ->save($location);

      //$slider->image=$name;
      
     // $slider->image=$file;
      $file[]=$name;
      $slider->image=json_encode($file);

}
}
     /* print_r($file);
      exit;*/
      $slider->save();
    //Brand::create($request->all());
      Session::flash('success', 'slider has added successfully');
        return back();
   

}


   
   public function manage(){

   $slider=Slider::orderBy('id','desc')->get();
    return view('slider.manage_slider',compact('slider'));
   }




   public function edit(){

   }



   public function update(){

   }




   public function delete($id){
   $delete=Slider::find($id);
   $image=json_decode($delete->image);
   foreach($image as $file){
   unlink(public_path('slider/'.$file));
   }
   
   //unlink(public_path('slider/'.$delete->image));//single image delete
   $delete->delete();
   Session::flash('success', 'slider has delete successfully');
   return back();

   }
}


<!-- end controller  -->


<!-- route -->

Route::prefix('slider')->name('slider')->group(function(){

	Route::get('/manage','slidercontroller@index')->name('manage');
	Route::get('/create','slidercontroller@create')->name('create');
	Route::post('/store','slidercontroller@store')->name('store');
	Route::post('/store','slidercontroller@active')->name('active');
	Route::post('/store','slidercontroller@inactive')->name('inactive');
	Route::get('/edit/{id}','slidercontroller@edit')->name('edit');
	Route::post('/update/{id}','slidercontroller@update')->name('update');
	Route::post('/delete/{id}','slidercontroller@delete')->name('delete');
}); 




