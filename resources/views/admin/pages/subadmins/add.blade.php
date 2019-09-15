@extends('admin.layout.master')

@section('css')
<style type="text/css">
</style>
<link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark">SubAdmins</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i> Home</a></li>
              <li class="breadcrumb-item active">SubAdmins</li>
	          {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
	        </ol>
	      </div><!-- /.col -->
	    </div><!-- /.row -->
	  </div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->


    <section class="content">
      	<div class="container-fluid">

		    <div class="row">
	          <div class="col-md-12">

	          	@if($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
	          
				@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
					        <strong>{{ $message }}</strong>
					</div>
				@endif

	           <div class="card card-default" style="border-top: 3px solid #17a2b8 !important;">
	           	<form method="post" action="{{url('add-admin')}}" enctype="multipart/form-data">
	           		<input type="hidden" name="_token" value="{{csrf_token()}}">
	            	<div class="card-header">
		                <h3 class="card-title">
		                  <i class="fas fa-user-shield"></i>
		                  Create SubAdmin
		                  {{-- <a href="{{url('creat-member')}}"><button type="button" class="btn btn-success float-right">Add New</button></a> --}}
		                </h3>

	            	</div>

	            	<div class="card-body">
	            		<div class="row">

	            			<div class="col-sm-6">
				                <div class="form-group">
								  <label>Admin Type:</label>
								  <select class="form-control" name="admin_type">
								    <option value="">Please Select Admin Type</option>
								    <option value="recruitment_specialist">Recruitment Specialist</option>
								    <option value="sales_officer">Sales Officer</option>
								  </select>
								</div>
				            </div>
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Name:</label>
				                  <div class="input-group">
				                    <input type="text" name="admin_name" value="{{old('admin_name')}}" class="form-control">
				                  </div>
				                </div>
				            </div>				
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Email:</label>
				                  <div class="input-group">
				                    <input type="text" name="admin_email" value="{{old('admin_email')}}" class="form-control">
				                  </div>
				                </div>
				            </div>
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Password:</label>
				                  <div class="input-group">
				                    <input type="password" name="password" class="form-control">
				                  </div>
				                </div>
				            </div>
				            <div class="col-sm-6">
				                <div class="form-group">
				                  <label>Confirm Password:</label>
				                  <div class="input-group">
				                    <input type="password" name="password_confirmation" class="form-control">
				                  </div>
				                </div>
				            </div>
		            		
				        </div>
	              	</div>

	              	<div class="card-footer">
	              		<button type="submit" class="btn btn-success float-right">Create</button>
	              	</div>
	            </form>
	            </div>

	              	
	            </div>


	          </div>
	        </div>

       	</div>
    </section>

</div>

@endsection

@section('script')
	<script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
	<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
@endsection