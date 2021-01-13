@extends('layouts.app')

@section('content')

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashbord')}}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Slider</a></li>
            <li><a href="javascript:avoid(0)">Manage-Slider</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">


 <div class="row"> 

    <div class="col-sm-12">
     @include('includes.error_message')
     <div class="panel b-primary bt-md">
        <div class="panel-content">
            <div class="row">
                <div class="col-xs-6">
                    <h4 class="text-success">Manage Slider</h4>
                </div>
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('slider.create')}}">Add Slider</a> 

               </div>
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>Title</th>
                                <th>Sub title</th>
                                <th>Date</th>
                                <th>URL</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>



                            </tr>
                        </thead>
                        <tbody>

                            @foreach($slider as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{substr($row->title,0,20)}}</td> <!--substr length define korche 0 to 20 -->
                                <td>{{substr($row->subtitle,0,20)}}</td> <!--substr length define korche 0 to 20 -->
                                
                                <td>{{$row->end.'-'.$row->start}}</td>
                                <td>
                                <a href="{{$row->url}}" class="btn btn-primary btn-xs" ta>click here</a>
                                </td>

                                <td>
                                  @php($image=json_decode($row->image))
                                 

                             

                                 <img src="{{ asset('slider/'.$image[1])}}" width="" height="">
                                  <!-- <img src="{{ asset('slider/'.$row->image)}}" width="" height=""> -->
                                </td>


                                <!-- <td>{{$row->Status== 1 ? 'Active':'Inactive'}}</td> -->
                                <td> <input type="checkbox" id="status" data-toggle="toggle" data-on="Active" data-off="Inactive" data-size="small" data-onstyle="primary" data-offstyle="danger" data-id={{$row->id}} {{$row->status==1?'checked':''}}> </td>
                               
                                <td>

                                   <!--  @if($row->Status==0)
                                   
                                   
                                   
                                   
                                   
                                   
                                   @else
                                   <a href="{{route('slider.inactive',$row->id)}}" class="btn btn-success btn-xs"><i class="fa fa-arrow-up"></i></a>
                                   
                                   @endif -->
                                    
                                    <a href="{{route('slider.edit',$row->id)}}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>


                                                   <!--  <a href="{{route('delete',$row->id)}}" data-tog="modal" class="btn btn-success btn-xs">
                                                       <i class="fa fa-trash"> </i></a> --> 
                                                       <a href="#rana{{$row->id}}" data-toggle="modal" class="btn btn-success btn-xs "><i class="fa fa-trash"></i></a>


                                                   </td>


                                               </tr>

                                                   <!---------------- data modal for delete -------------------------->

                                               <div class="modal fade" id="rana{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title text-danger" id="exampleModalLabel">Are you sure to delete?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <form method="post" action="{{route('slider.delete',$row->id)}}">
                                                      @csrf


                                                      <div class="modal-footer">
                                                          <button type="submit" name="submit" class="btn btn-secondary text-info">yes</button>
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                      </div>

                                                  </form>


                                              </div>
                                          </div>
                                      </div>
                                      </div>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>


    <!-- FULL CIRCLE LOADER  -->
    
    <div>
    
    <div>
    <div class="ml-loader  circle">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  </div>
      
    </div>
 
      <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
      @endsection

