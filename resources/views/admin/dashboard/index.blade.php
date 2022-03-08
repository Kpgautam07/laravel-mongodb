@extends('layouts.master')
@section('title') Dashboard @endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
<div class="row">
    <div class="col-12">
       
     
			<h5 style="color: #000E42;">System Statistics</h5>
			
			
						<div class="row">
						
							<div class="col-lg-4">
                                <div class="card border border-secondary">
                                    <div class="card-header bg-transparent border-primary">
                                        <a href=""><h5 class="my-0 text-grey" style="font-size: x-large; color: grey;">Total  Users</h5></a>
										  <a href=""><p class="card-text" style="font-size: x-large; color: lightgrey;">{{isset($users)?$users:"0"}}</p></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border border-secondary">
                                    <div class="card-header bg-transparent border-primary">
                                        <a href="admin/categories"><h5 class="my-0 text-grey" style="font-size: x-large; color: grey;">Total Categories</h5></a>
										  <a href="admin/categories"><p class="card-text" style="font-size: x-large; color: lightgrey;">{{isset($categories)?$categories:"0"}}</p></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border border-secondary">
                                    <div class="card-header bg-transparent border-primary">
                                        <a href="admin/media"><h5 class="my-0 text-grey" style="font-size: x-large; color: grey;">Total Media</h5></a>
                                          <a href="admin/media"><p class="card-text" style="font-size: x-large; color: lightgrey;">{{isset($media)?$media:"0"}}</p></a>
                                    </div>
                                    
                                </div>
                            </div>
					    </div>
						
</div>
</div>
<hr></hr>
 <h4>NEW REGISTERED USERS</h4>
 <hr></hr>
<div class="row">
<div class="col-12">
<div class="card">
 <div class="card-body">
 <div class="table-responsive">
                    <table id="UsersList1" class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Profile Image</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>User Type</th>
                                <th>Status</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @php $profilepicturePath = '/uploads/users/'; @endphp
                            @if(count($newusers)>0) @php $i = 0; @endphp
                                @foreach($newusers as $usr) @php $i++; @endphp
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td width="20%"><img src="{{$profilepicturePath}}{{$usr->profile_image}}" alt="" style="width: 50%;"></td>
                                        <td>{{$usr->firstname}} {{$usr->lastname}}</td>
                                        <td>{{$usr->email}}</td>
                                        <td>{{$usr->phone_no}}</td>
                                        <td>{{$usr->user_type}}</td>
                                        <?php if($usr->status == '1'){ ?>
                                        <td id="{{$usr->id}}" ><span class="btn btn-block btn-success btn-sm status" data-id = "{{$usr->id}}" data-status = "{{$usr->status}}" onclick="updatestatus({{$usr->id}},{{$usr->status}})">Active</span></td><?php } else { ?>
                                    
                                        <td id="{{$usr->id}}" ><span class="btn btn-block btn-danger btn-sm status" data-id = "{{$usr->id}}" data-status = "{{$usr->status}}" onclick="updatestatus({{$usr->id}},{{$usr->status}})">Inactive</span></td><?php } ?>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
<!-- <canvas id="bar-chart" width="300" height="100"></canvas> -->
    </div>
</div>
</div>
                                        </div>
<!-- end row -->
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/js/pages/charts.js')}}"></script>
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<!-- Init js-->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $('#UsersList1').DataTable();
        } );
</script>
@endsection
