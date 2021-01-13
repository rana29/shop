<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Daily_shop</title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="{{asset('/')}}assets/admin/image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="{{asset('/')}}assets/admin/image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="{{asset('/')}}assets/admin/image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="{{asset('/')}}assets/admin/vendor/pace/pace.min.js"></script>
    <link href="{{asset('/')}}assets/admin/vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- loddar -->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/loddar/style.css">

    <!-- ========================================================= -->
    <!-- bootstrap toggle -->
   
    <link href="{{asset('/')}}assets/admin/toggle/css/bootstrap-toggle.min.css" rel="stylesheet" />
    <!--ckeditor css-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/ckeditor/samples/css/samples.css">

    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/animate.css/animate.css">
    

     <!--dataTable-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/magnific-popup/magnific-popup.css">
    <!--Select with searching & tagging-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/select2/css/select2-bootstrap.min.css">
    <!--Date picker-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/bootstrap_date-picker/css/bootstrap-datepicker3.min.css">
      <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/bootstrap_time-picker/css/timepicker.css">
    <!--Color picker-->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendor/bootstrap_color-picker/css/bootstrap-colorpicker.min.css">
   
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/stylesheets/css/style.css">
  <!--   Bootstrap toggle -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


</head>

<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div class="logo">
                    <a href="{{route('dashbord')}}" class="on-click">
                       <!--  <img alt="logo" src="{{asset('/')}}assets/admin/images/header-logo.png" /> -->
                       <h3><a class="ml-4" href="">Daily_Shop</a></h3>
                    </a>
                </div>
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <div class="header-middle"></div>
                <!--SEARCH HEADERBOX-->
                <div class="header-section" id="search-headerbox">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                    <div class="header-separator"></div>
                </div>
                <!--NOCITE HEADERBOX-->
                
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <img alt="profile photo" src="{{asset('/')}}assets/admin/images/avatar/avatar_user.jpg" />
                        </div>
                        <div class="user-info">
                            <span class="user-name"></span>
                            <span class="user-profile">Admin</span>
                        </div>
                        <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                        <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
                <!--Log out -->
                <div class="header-section">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </div>
            </div>
        </div>
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Navigation</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="{{request()->is('dashbord')? 'active-item':''}}"><a href="{{route('dashbord')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                                <!--------------------BRAND---------------------->
                                <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Brand</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('Brand/add-brand')? 'active-item':''}}"><a href="{{route('add-brand')}}">Add Brand</a></li>
                                        <li class="{{request()->is('Brand/manage-brand')? 'active-item':''}}"><a href="{{route('manage-brand')}}">Manage Brand</a></li>
                                    </ul>
                                </li>



                                 <!--------------------CATAGORY---------------------->
                                <li class="has-child-item close-item {{request()->is('Catagories/*')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Catagories</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('catagory/manage-catagory')? 'active-item':''}}"><a href="{{route('manage-catagory')}}">Catagory</a></li>
                                        <li class="{{request()->is('Catagory/catagory')? 'active-item':''}}"><a href="{{route('manage-subcatagory')}}">Sub-catagory</a></li>
                                        <li class="{{request()->is('Catagory/catagory')? 'active-item':''}}"><a href="{{route('manage-sub-subcatagory')}}">Sub subcatagory</a></li>
                                    </ul>
                                </li>

                                <!----------------------------SLIDER------------------------------>

                                 <li class="has-child-item close-item {{request()->is('Catagories/*')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Sliders</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('catagory/manage-catagory')? 'active-item':''}}"><a href="{{route('slider.create')}}">Add slider</a></li>
                                        <li class="{{request()->is('Catagory/catagory')? 'active-item':''}}"><a href="{{route('slider.manage')}}">Manage slider</a></li>
                                    </ul>
                                </li>



                                 <!----------------------------PRODUCT------------------------------>

                                 <li class="has-child-item close-item {{request()->is('Catagories/*')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Products</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('catagory/manage-catagory')? 'active-item':''}}"><a href="{{route('product.create')}}">Add product</a></li>
                                        <li class="{{request()->is('Catagory/catagory')? 'active-item':''}}"><a href="{{route('product.manage')}}">Manage product</a></li>
                                    </ul>
                                </li>




                                <!--CHARTS-->
                                
                                <!--WIDGETS-->
                                

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">


                @yield('content')


            </div>
            <!-- RIGHT SIDEBAR -->
            <!-- ========================================================= -->
            
            <!--scroll to top-->
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
    </div>
    <!--BASIC scripts-->
    <!-- ========================================================= -->
    
    <script src="{{asset('/')}}assets/admin/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script src="{{asset('/')}}assets/admin//js/custom.js"></script>
    <script src="{{asset('/')}}assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}assets/admin/vendor/nano-scroller/nano-scroller.js"></script>
    <!--TEMPLATE scripts-->
    <!-- ========================================================= -->
    <script src="{{asset('/')}}assets/admin/javascripts/template-script.min.js"></script>
    <script src="{{asset('/')}}assets/admin/javascripts/template-init.min.js"></script>
    <!-- SECTION script and examples-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <script src="{{asset('/')}}assets/admin/vendor/toastr/toastr.min.js"></script>
    <!--morris chart-->
    <script src="{{asset('/')}}assets/admin/vendor/chart-js/chart.min.js"></script>
    <!--Gallery with Magnific popup-->
    <script src="{{asset('/')}}assets/admin/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--Examples-->
    <script src="{{asset('/')}}assets/admin/{{asset('/')}}assets/admin/javascripts/examples/dashboard.js"></script>
    <!--dataTable-->
    <script src="{{asset('/')}}assets/admin/vendor/data-table/media/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('/')}}assets/admin/vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>

    <!--Select with searching & tagging-->
    <script src="{{asset('/')}}assets/admin/vendor/select2/js/select2.min.js"></script>
    <!--Examples-->
    <script src="{{asset('/')}}assets/admin/javascripts/examples/tables/data-tables.js"></script>

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!--Date picker-->
   <script src="{{asset('/')}}assets/admin/vendor/bootstrap_date-picker/js/bootstrap-datepicker.min.js"></script>
   <!--Time picker-->
   <script src="{{asset('/')}}assets/admin/vendor/bootstrap_time-picker/js/bootstrap-timepicker.js"></script>
   <!--Color picker-->
   <script src="{{asset('/')}}assets/admin/vendor/bootstrap_color-picker/js/bootstrap-colorpicker.min.js"></script>
   <!--    summarnote -->
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
   <!--  botstrap toggle -->
   <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
   <script src="{{asset('/')}}assets/admin/toggle/js/bootstrap-toggle.min.js"></script>
   <!-- ck editor -->
   <script src="{{asset('/')}}assets/admin/ckeditor/ckeditor.js"></script>
   <script src="{{asset('/')}}assets/admin/ckeditor/samples/js/sample.js"></script>

 <script>
    initSample();
</script>
   
</body>

</html>

