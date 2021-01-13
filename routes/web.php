<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','SiteController@index')->name('home');
Route::get('/product','SiteController@product')->name('product');

Auth::routes();

Route::get('/dashbord', 'HomeController@index')->name('dashbord');




/*******************BrandController*************************/


Route::get('/brand/add-brand', 'BrandController@index')->name('add-brand');
Route::post('/brand/create-brand', 'BrandController@create')->name('create-brand');
Route::get('/brand/manage-brand', 'BrandController@show')->name('manage-brand');
Route::get('/brand/inactive/{id}','BrandController@inactive')->name('inactive');
Route::get('/brand/active/{id}','BrandController@active')->name('active');
Route::post('/brand/delete/{id}','BrandController@delete')->name('delete');
Route::get('/brand/edit/{id}','BrandController@edit')->name('edit');
Route::post('/brand/update/{id}','BrandController@update')->name('update');


/*******************CatagoryController*************************/


Route::get('/catagory/index-catagory', 'CatagoryController@catagoryindex')->name('index-catagory');
Route::post('/catagory/create-catagory', 'CatagoryController@catagorycreate')->name('create-catagory');
Route::get('/catagory/manage-catagory', 'CatagoryController@catagoryshow')->name('manage-catagory');
Route::get('/catagory/active/{id}', 'CatagoryController@catagoryactive')->name('cat-active');
Route::get('/catagory/inactive/{id}', 'CatagoryController@catagoryinactive')->name('cat-inactive');
Route::get('/catagory/edit/{id}', 'CatagoryController@catagoryedit')->name('edit-catagory');
Route::post('/catagory/update/{id}', 'CatagoryController@catagoryupdate')->name('catagory-update');
Route::post('/catagory/delete/{id}', 'CatagoryController@catagorydelete')->name('catagory-delete');


                  /*******************SubCatagoryController*************************/

Route::get('/catagory/index-subcatagory', 'Subcatagorycontroller@subcatagoryindex')->name('subcatagory-index');
Route::post('/catagory/create-subcatagory', 'Subcatagorycontroller@subcatagorycreate')->name('subcatagory-create');
Route::get('/catagory/manage-subcatagory', 'Subcatagorycontroller@subcatagoryshow')->name('manage-subcatagory');
Route::get('/catagory/active-subcatagory/{id}', 'Subcatagorycontroller@subcatagoryactive')->name('active');
Route::get('/catagory/inactive-subcatagory/{id}', 'Subcatagorycontroller@subcatagoryinactive')->name('inactive');
Route::get('/catagory/edit-subcatagory/{id}', 'Subcatagorycontroller@subcatagoryedit')->name('subcatagory-edit');
Route::post('/catagory/update-subcatagory/{id}', 'Subcatagorycontroller@subcatagoryupdate')->name('subcatagory-update');
Route::post('/catagory/delete-subcatagory/{id}', 'Subcatagorycontroller@subcatagorydelete')->name('subcatagory-delete');


/*******************Sub sub-CatagoryController*************************/

Route::get('/catagory/manage-sub-subcatagory', 'Subcatagorycontroller@subcatagoryshow')->name('manage-sub-subcatagory');


          /*******************Slider Route*************************/


Route::prefix('slider')->name('slider.')->group(function(){

	Route::get('/manage','slidercontroller@manage')->name('manage');
	Route::get('/create','slidercontroller@create')->name('create');
	Route::post('/store','slidercontroller@store')->name('store');
	Route::get('/active/{id}/{status}','slidercontroller@active')->name('active');
	Route::post('/inactive','slidercontroller@inactive')->name('inactive');
	Route::get('/edit/{id}','slidercontroller@edit')->name('edit');
	Route::post('/update/{id}','slidercontroller@update')->name('update');
	Route::post('/delete/{id}','slidercontroller@delete')->name('delete');
}); 


/*******************Product Route*************************/

Route::prefix('product')->name('product.')->group(function(){

    Route::get('/manage','productcontroller@manage')->name('manage');
	Route::get('/create','productcontroller@create')->name('create');
	Route::post('/store','productcontroller@store')->name('store');
	Route::post('/active','productcontroller@active')->name('active');
	Route::post('/inactive','productcontroller@inactive')->name('inactive');
	Route::get('/edit/{id}','productcontroller@edit')->name('edit');
	Route::post('/update/{id}','productcontroller@update')->name('update');
	Route::post('/delete/{id}','productcontroller@delete')->name('delete');
}); 


/*Route::group(['prefix'=>'slider'],function(){

	Route::get('/manage','slidercontroller@index')->name('manage');
}); 


Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'admin','middleware'=>['auth','admin']],
function(){

Route::get('dashbord','dashbordcontroller@index')->name('dashbord');

}
);  */      
