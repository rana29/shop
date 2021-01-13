
  <div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
  <div class="row">

<!-- ============================================== SIDEBAR ============================================== -->	
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			
			<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
          @foreach($catagory as $row)
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>{{$row->catagory}}</a>
                 <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
          @foreach($row->subcats as $subcat) 
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                 
                     <li><a href="">{{$subcat->sub_catagory}}</a></li>
                     
                          
                </ul>
            
            </div><!-- /.col -->
        @endforeach 

        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

@endforeach

          
          
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->