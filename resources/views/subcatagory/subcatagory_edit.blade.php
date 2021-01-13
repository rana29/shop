@extends('layouts.app')

@section('content')

                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashbord')}}">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">subcatagory</a></li>
                            <li><a href="javascript:avoid(0)">Subcatagory-update</a></li>
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
                                        <div class="col-xs-6"><h4 class="text-success">Update subcatagory</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('manage-subcatagory')}}">Manage subcatagory</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('subcatagory-update',$subcat->id)}}">
                                                @csrf

                                                <!-- <div class="form-group" >
                                                    <label for="email2" class="col-sm-3 control-label">Catagory name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{$subcat->cat->catagory}}" name="catagory" id="email2" placeholder="catagory name">
                                                    </div>
                                                </div> -->
                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Catagory Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control" name=catagory_id>
                                                          <option value="" >Select catagory</option>
                                                          @foreach($cat as $row)
                                                        <option value="{{$row->id}}" {{$row->id==$subcat->catagory_id? "selected":""}}> {{$row->catagory}}</option>

                                                          @endforeach
                                                          
                                                        </select>
                                                    </div>
                                                </div>

                                                 <div class="form-group" >
                                                    <label for="email2" class="col-sm-3 control-label">subcatagory name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{$subcat->sub_catagory}}" name="sub_catagory" id="email2" placeholder="Add catagory">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                        <!-- <button type="submit" class="btn btn-primary ">Update</button> -->
                                                        <a href="#rana{{$subcat->id}}" data-toggle="modal" class="btn btn-success">Update subcatagory</a>
                                                    </div>
                                                </div>


                                                <!---------------- data modal for delete -------------------------->

                                                 <div class="modal fade" id="rana{{$subcat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title text-primary" id="exampleModalLabel">Are you sure to update?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                  
                                                  <div class="modal-footer">
                                                          <button type="submit" name="submit" class="btn btn-secondary text-info">yes</button>
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                      </div>
                                                  </div>
                                          </div>
                                      </div>
                                      </div>
                                            </form>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>

                    </div>
                    </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection
