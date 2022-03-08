@extends('layouts.master-without-nav')

@section('title')
Reset Passwords
@endsection
@section('css')
<style>
body,
html {
    height: 100%;
}

body {
    position: relative;
}

.account-pages {
    transform: translate(-50%, -50%);
    position: absolute;
    a;
    top: 50%;
    left: 50%;
    width: 100%;
    margin: 0 !important;
}
</style>
<style>

.form-control{
	color: #314667 !important;
}

</style>
@endsection
@section('body')

<body  style="background-color: #314667;">
    @endsection

    @section('content')
   
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="login_logo">
              <!--  <img src="../assets/images/login_logo.png">-->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        @if ($notification = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                    @if ($notification = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                        <div class="card-body pt-4">
                    
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{route('send_mail')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="username" placeholder="Enter Email Id">
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                        <input type="submit" name="submit" class="btn btn-primary w-md waves-effect waves-light"
                                               id="sendBtn" value="Send">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p style="color: white;">Remember It ? <a href="{{url('login')}}" class="font-weight-medium text-primary"><span style="color: white;"> Sign In
                                here</span></a> </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script')	
	
    @endsection