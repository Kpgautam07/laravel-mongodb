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
                                        <a href=""><h5 class="my-0 text-grey" style="font-size: x-large; color: grey;">Registered  Users</h5></a>
										  <a href=""><p class="card-text" style="font-size: x-large; color: lightgrey;">{{isset($users)?$users:"0"}}</p></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border border-secondary">
                                    <div class="card-header bg-transparent border-primary">
                                        <a href="admin/categories"><h5 class="my-0 text-grey" style="font-size: x-large; color: grey;">Users Registered Today</h5></a>
										  <a href="admin/categories"><p class="card-text" style="font-size: x-large; color: lightgrey;">{{isset($categories)?$categories:"0"}}</p></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border border-secondary">
                                    <div class="card-header bg-transparent border-primary">
                                        <a href="admin/media"><h5 class="my-0 text-grey" style="font-size: x-large; color: grey;">Total Earnings</h5></a>
                                          <a href="admin/media"><p class="card-text" style="font-size: x-large; color: lightgrey;">{{isset($media)?$media:"0"}}</p></a>
                                    </div>
                                    
                                </div>
                            </div>
					    </div>
						
</div>
</div>
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
