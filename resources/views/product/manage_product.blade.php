@extends('layouts.app')

@section('content')

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('dashbord')}}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">product</a></li>
            <li><a href="javascript:avoid(0)">Manage-product</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">


 <div class="row"> 

    <div class="col-sm-12 col-md-12 col-md-offset-">
     @include('includes.error_message')
     <div class="panel b-primary bt-md">
        <div class="panel-content">
            <div class="row">
                <div class="col-xs-6">
                    <h4 class="text-success">Manage product</h4>
                </div>
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('product.create')}}">Add product</a> 

               </div>
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>product Name</th>
                                <th>Model</th>
                                <th>Description</th>
                                <th>Buying_price</th>
                                <th>Selling_price</th>
                                <th>Special_price</th>
                                <th>Special_price_start</th>
                                <th>Special_price_end</th>
                                <th>Quantity</th>
                                <th>Video_url</th>
                                <th>Warranty</th>
                                <th>Warranty duration</th>
                                <th>Warrinty condation</th>
                                <th>Gallary</th>
                                <th>Status</th>
                                <th>Action</th>



                            </tr>
                        </thead>
                        <tbody>

                            @foreach($product as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->model}}</td>
                                <td>{{$row->description}}</td>
                                
                                <td>{{$row->buying_price}}</td>
                                <td>{{$row->selling_price}}</td>
                               
                                <td>{{$row->special_price}}</td>
                                <td>{{$row->special_start}}</td>
                                <td>{{$row->special_end}}</td>
                                <td>{{$row->quantity}}</td>
                                <td>{{$row->video_url}}</td>
                                <td>{{$row->warranty== 1 ? 'Yes':'No'}}</td>
                                <td>{{$row->duration}}</td>
                                <td>{{$row->condaition}}</td>
                               
                                <td><img src="{{asset('/productimage'.$row->gallery)}}"></td>

                                 <td>{{$row->status==1?"active":"inactive"}}</td>
                                
                                
                                <td>

                                  <!--   @if($row->Status==0)
                                  
                                  
                                  <a href="{{route('cat-active',$row->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-arrow-down"></i></a>
                                  
                                  
                                  
                                  @else
                                  <a href="{{route('cat-inactive',$row->id)}}" class="btn btn-success btn-xs"><i class="fa fa-arrow-up"></i></a>
                                  
                                  @endif -->
                                    
                                    <a href="{{route('product.edit',$row->id)}}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>


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
                                                    <form method="post" action="{{route('product.delete',$row->id)}}">
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


      <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
      @endsection

