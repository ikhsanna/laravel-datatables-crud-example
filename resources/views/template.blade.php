<!doctype html>
<html lang="en">

<head>
    <title>@yield('tittle')</title>
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">



    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/color_skins.css')}}">
    
    {{-- cdn datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>

</head> 

<body class="theme-cyan">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('assets/images/logo-icon.svg')}}" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a href="index.html"><img src="{{asset('/assets/images/logo.svg')}}" alt="Lucid Logo" class="img-responsive logo"></a>                
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{url('/')}}" class="icon-menu"><i class="icon-login"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @include('partial.sidebar')

    @yield('content')
    
    
</div>

<!-- Javascript -->



<script src="{{URL::asset('assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('assets/vendor/bootstrap/js/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/vendor/metisMenu/metisMenu.js')}}"></script>
<script src="{{URL::asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<script src="{{URL::asset('assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{URL::asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{URL::asset('assets/bundles/mainscripts.bundle.js')}}"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>

{{-- <script src="{{asset('js/script.js')}}"></script> --}}
{{-- <script>
    $('.sparkbar').sparkline('html', { type: 'bar' });
</script> --}}



@stack('js')
</body>


</html>
