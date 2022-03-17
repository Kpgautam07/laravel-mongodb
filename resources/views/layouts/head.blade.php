@yield('css')

<!-- App css -->
<!-- <link href="{{ asset('/assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/app-rtl.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css1/app.min_ool.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css1/icons.css') }}" rel="stylesheet" type="text/css" /> -->

<link href="{{ URL::asset('assets/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css" /> 

<link href="{{ URL::asset('assets/css/bootstrap-dark.min.css')}}" id="bootstrap-dark" rel="stylesheet"
    type="text/css" />
<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" id="bootstrap-light" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/app-rtl.min.css')}}" id="app-rtl" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/app-dark.min.css')}}" id="app-dark" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/app.min.css')}}" id="app-light" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/select2.min.css')}}" id="app-light" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css1/app.min_ool.css') }}" rel="stylesheet" type="text/css" />
<!-- <link href="{{ URL::asset('assets/css/app.min_ool.css')}}" id="app-light" rel="stylesheet" type="text/css"> -->

<!--<link href="{{ URL::asset('assets/css/icons.css')}}" id="app-light" rel="stylesheet" type="text/css">-->
<style>
  #vertical-menu-btn{
    color: white;
  }
  #page-header-user-dropdown {
    color: white;
}
#tt {
  color: white;
  font-size:20px;
  font-family: "Raleway";
}
body[data-sidebar=dark] #sidebar-menu ul li a {
    color:white;
}
body[data-sidebar=dark] #sidebar-menu ul li a:hover {
    color:black;
}
body[data-sidebar=dark] #sidebar-menu ul li a i {
    color:white;
}
body[data-sidebar=dark] #sidebar-menu ul li:hover {
    color:black;
}
body[data-sidebar=dark] #sidebar-menu ul li ul.sub-menu li a {
    color:white;
}
body[data-sidebar=dark] #sidebar-menu ul li ul.sub-menu li a i{
    color:white;
}
body[data-sidebar=dark] #sidebar-menu ul li ul.sub-menu li a:hover {
    color:black;
}

</style>