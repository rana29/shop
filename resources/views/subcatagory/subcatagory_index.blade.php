@extends('layouts.app')

@section('content')

                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashbord')}}">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">Subatagory</a></li>
                            <li><a href="javascript:avoid(0)">Add-subcatagory</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

                <div class="row animated fadeInUp">
                    
                    <div class="row"> 

                        <div class="col-sm-12 col-md-8 col-md-offset-2">
                             @include('includes.error_message')
                            <div class="panel b-primary bt-md">
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-xs-6"><h4 class="text-success">Subcatagory Add Form</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('manage-subcatagory')}}">Manage subcatagory</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('subcatagory-create')}}">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Catagory Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control" name=catagory_id>
                                                        	<option value="" >Select catagory</option>
                                                        	@foreach($cat as $row)
                                                        	<option value="{{$row->id}}">{{$row->catagory}}</option>

                                                        	@endforeach
                                                        	
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Subatagory Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="sub_catagory" id="email2" placeholder="subcatagory name" value="{{old('sub_catagory')}}">
                                                    </div>
                                                </div>

                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                        <button type="submit" class="btn btn-primary ">Save subcatagory</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection

