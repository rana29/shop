@extends('layouts.app')

@section('content')

                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashbord')}}">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">Product</a></li>
                            <li><a href="javascript:avoid(0)">Add-product</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

                <div class="row animated fadeInUp">
                    
                    <div class="row"> 

                        <div class="col-md-12 ">
                             @include('includes.error_message')
                            <div class="panel b-primary bt-md">
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-xs-6"><h4 class="text-success">Product Add Form</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('slider.manage')}}">Manage Product</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">
                                                    
                                                    <div class="col-md-6">
                                                        <label for="email2" class="control-label">Catagory</label>
                                                       <select name="catagory_id" class="form-control" id="select">
                                                        <option value="" >Select catagory</option>
                                                        @foreach($cat as $row)
                                                           <option value="{{$row->id}}">{{$row->catagory}}</option>
                                                           @endforeach
                                                       </select>
                                                    </div>

                                                     <div class="col-md-6">
                                                        <label for="email2" class="control-label">Subcatagory</label>
                                                       <select name="subcat_id" class="form-control" id="select">
                                                        <option value="" >Select subcatagory</option>
                                                        @foreach($subcat as $row)
                                                           <option value="{{$row->id}}">{{$row->sub_catagory}}</option>
                                                           @endforeach
                                                       </select>
                                                    </div>

                                                     <div class="col-md-6">
                                                        <label for="email2" class="control-label">Brand</label>
                                                       <select name="brand_id" class="form-control" id="select">
                                                        <option value="" >Select brand</option>
                                                          @foreach($brand as $row)
                                                           <option value="{{$row->id}}">{{$row->brand_name}}</option>
                                                           @endforeach
                                                       </select>
                                                    </div>

                                                     <div class="col-md-6">
                                                        <label for="email2" class="control-label">product name</label>
                                                        <input type="text" name="name" placeholder="product name" class="form-control" value="{{old('name')}}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="email2" class="control-label">Buying price</label>
                                                        <input type="text" name="buying_price" placeholder="buying price" class="form-control" value="{{old('buying_price')}}">
                                                    </div>
                                                     <div class="col-md-6">
                                                        <label for="email2" class="control-label">Selling price</label>
                                                        <input type="text" name="selling_price" placeholder="selling price" class="form-control " value="{{old('selling_price')}}">
                                                    </div>
                                                     <div class="col-md-6">
                                                        <label for="email2" class="control-label">Special price</label>
                                                        <input type="text" name="special_price" placeholder="special price" class="form-control " value="{{old('selling_price')}}">
                                                    </div>
                                                     <div class="col-md-6">
                                                        <label for="email2" class="control-label">Special date start</label>
                                                        <input type="text" name="special_start" placeholder="dd-mm-yyy" class="form-control datepicker" value="{{old('special_price')}}">
                                                    </div>
                                                   
                                                    <div class="col-md-6">
                                                        <label for="email2" class="control-label">Special date end</label>

                                                        <input type="text" name="special_end" placeholder="DD-MM-YYY" class="form-control datepicker " value=""> 
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="email2" class="control-label">Model</label>
                                                        <input type="text" name="model" placeholder="model" class="form-control" value="{{old('model')}}">
                                                    </div>

                                                    

                                                    <div class="col-md-6">
                                                        <label for="email2" class="control-label">Quantity</label>
                                                        <input type="text" name="quantity" placeholder="quantity" class="form-control" value="{{old('quantity')}}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="email2" class="control-label">Video_url</label>
                                                        <input type="url" name="video_url" placeholder="video_url" class="form-control" value="{{old('model')}}">
                                                    </div>

                                                    
                                                  <div class="col-md-6">
                                                     <label for="email2" class="control-label">Warranty</label><br>
                                                        
                                                        <div class="radio radio-custom radio-inline radio-primary">
                                                           <input type="radio" id="warrinty" name="warranty" value="1">
                                                           <label for="warrinty">yes</label> 
                                                        </div>
                                                        <div class="radio radio-custom radio-inline radio-danger">
                                                           <input type="radio"  id="warrinty2" name="warranty" value="0">
                                                           <label for="warrinty2">No</label> 
                                                        </div>
                                                
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="email2" class="control-label">Warranty duration</label>
                                                        <input type="text" name="duration" placeholder="warrinty duration" class="form-control" value="{{old('duration')}}">
                                                    </div>

                                                     

                                            
                                                    <div class="col-md-6">
                                                        <label for="email2" class="control-label">Image Gallary</label>
                                                        <input type="file" name="gallary"  class="form-control" >
                                                    </div>


                                                    <div class="col-md-12">
                                                        <label for="email2" class="control-label">Warranty condation</label>
                                                       
                                                        <textarea id="editor" class="form-control" name="condaition"></textarea>
                                                    </div>

                                                   

                                                  
                                                     <div class="col-md-12">
                                                        <label for="email2" class="control-label">Description</label>
                                                       
                                                        <textarea id="summernote" class="form-control" name="description"></textarea>
                                                    </div>


                                                   
                                                </div>


                                                   <div class="col-md-12 text-center">
                                                     <label for="email" class="control-label">Published?</label><br>
                                                        
                                                        <div class="radio radio-custom radio-inline radio-primary">
                                                           <input type="radio" id="status" name="status" value="active">
                                                           <label for="status">Active</label> 
                                                        </div>
                                                        <div class="radio radio-custom radio-inline radio-danger">
                                                           <input type="radio"  id="status2" name="status" value="inactive">
                                                           <label for="status2">Inactive</label> 
                                                        </div>
                                                
                                                    </div>

                                               

                                                 
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 text-right ">
                                                        <button type="submit" class="btn btn-primary ">Save product</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                    <button id="click">click</button>

                       <p>masud</p>


      
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection
