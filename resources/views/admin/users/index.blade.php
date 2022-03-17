 @extends('layouts.master')
@section('title') User Management @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title')User Management @endslot
@slot('add_btn') <h4 class="card-title"><a style="margin-left: -28%;" href=""
        class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bx-plus label-icon"></i>Add User  </a></h4> @endslot
@endcomponent
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                   @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                    
                <div class="table-responsive">

                    <table id="UsersList1" class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>User Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($users)>0)
                            @php $i=1; @endphp
                                @foreach($users as $usr)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$usr['name']}}</td>
                                        <td>{{$usr['email']}}</td>
                                        <td>{{$usr['mobile_no']}}</td>
                                        <td>{{$usr['user_type']}}</td>
                                        @if($usr['status'] == '1')
                                            <td id="{{$usr['_id']}}">
                                                <span class="btn btn-block btn-success btn-sm status" data-id = "{{$usr['_id']}}" data-status = "{{$usr['status']}}" onclick="updatestatus({{$usr['_id']}},{{$usr['status']}})">
                                                Active</span>
                                            </td>
                                        @else
                                            <td id="{{$usr['_id']}}">
                                                <span class="btn btn-block btn-danger btn-sm status" data-id = "{{$usr['_id']}}" data-status = "{{$usr['status']}}" onclick="updatestatus({{$usr['_id']}},{{$usr['status']}})">
                                                Inactive</span>
                                            </td>
                                        @endif
                                        <td>
                                            <a href=""  class="btn btn-outline-secondary btn-sm edit" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a href=""  class="btn btn-outline-secondary btn-sm edit" title="View"><i class="fas fa-eye"></i></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" href=""  class="btn btn-outline-secondary btn-sm edit" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @php $i++; @endphp
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
@section('script')
<!-- Plugins js -->
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
<script>
            function updatestatus(id,status)
            {
                $.ajax({
                    type: "POST",
                    url: '{{route("users_status")}}',
                    data: {'status': status, 'id': id, "_token": "{{ csrf_token() }}"},
                    success: function(data){
                      if(data.return =='Active')
                      {
                        status = 1;
                        var html = '<span class="btn btn-block btn-success btn-sm status" data-id ="'+id+'" data-status = "'+status+'" onclick="updatestatus('+_id+','+status+')">Active</span>';
                      }
                      else
                      {
                        status = 0;
                        var html = '<span class="btn btn-block btn-danger btn-sm status" data-id = "'+id+'" data-status = "'+status+'" onclick="updatestatus('+id+','+status+')">Inactive</span>';
                      }
                      $("#"+id).empty();
                      $("#"+id).append(html);
                    }
                });
            }
</script>
@endsection