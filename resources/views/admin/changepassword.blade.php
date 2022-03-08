@extends('layouts.master-without-nav')

@section('title')
Reset Password
@endsection
<style>

.form-control{
	color: #314667 !important;
}

</style>
@section('body')

<body style="background-color: #314667;">
    @endsection

    @section('content')
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="account-pages my-5 pt-5">
        <div class="container">
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
                        <div class="card-body pt-0">
                            <div class="p-2">
                                <form class="form-horizontal mt-4 passwordform" method="POST" action="{{route('updatepassword')}}" id="passwordform">
                                    @csrf
                                  
                                    <input type="hidden" name="email" value="{{ $user->email}}">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" required  onchange="validatePassword();">
                                    </div>

                                    <div class="form-group">
                                        <label for="confirmpassword">Confirm Password</label>
                                       <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" required onchange="validatePassword();">		
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <input type="submit" name="submit" class="btn btn-primary w-md waves-effect waves-light" value="Reset Password">
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
	
@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>

<script type="text/javascript">
    function validatePassword() {
        var validator = $("#passwordform").validate({
            rules: {
                password: "required",
                confirmpassword: {
                    equalTo: "#password"
                }
            },
            messages: {
                password: "Enter Password",
                confirmpassword: "Enter Confirm Password Same as Password"
            }
        });
    }
</script>
@endsection