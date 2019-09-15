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
	          
				@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
					        <strong>{{ $message }}</strong>
					</div>
				@endif

	           <div class="card card-default" style="border-top: 3px solid #17a2b8 !important;">
	            	<div class="card-header">
		                <h3 class="card-title">
		                  <i class="fas fa-user-shield"></i>
		                  All SubAdmin
		                  <a href="{{url('createadmin')}}"><button type="button" class="btn btn-success float-right">Add New</button></a>
		                </h3>

	            	</div>

	            	<div class="card-body">
	            		<table id="content_page_datatable" class="table table-bordered table-striped">
			                <thead>
			                <tr>
			                  <th>Id</th>
			                  <th>Name</th>
			                  <th>Email</th>
			                  <th>Type</th>
			                  <th>Action</th>
			                </tr>
			                </thead>
			                <tbody class="link_btn">
			                	@foreach($subadmins as $subadmin)
			                		<tr>
			                			<td>{{$subadmin->id}}</td>
			                			<td>{{$subadmin->name}}</td>
			                			<td>{{$subadmin->email}}</td>
			                			<td>@if($subadmin->role=='recruitment_specialist') Recruitement Specialist @else Sales Officer @endif</td>
			                			<td>
			                			{{-- <a href="{{url('edit_subadmin')}}/{{$subadmin->id}}" class="btn btn-xs btn-success"><i class="fas fa-edit"></i></a> --}}
			                			<a href="javascript:;" data-toggle="modal" onclick="deleteData({{$subadmin->id}})" 
												data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>
										</a>			                  
				                  		</td>
			                		</tr>

			                	@endforeach
			                </tbody>
			                
			                <tfoot>
				                <tr>
				                  	<th>Id</th>
			                  		<th>Name</th>
			                  		<th>Email</th>
			                  		<th>Type</th>
			                  		<th>Action</th>
				                </tr>
			                </tfoot>
			            </table>
	            		{{-- /////////////////////// --}}
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

	<script type="text/javascript">
		function deleteData(id)
		{
			var id = id;
			var url = "{{url('delete_subadmin')}}/"+id;
			// url = url.replace(':id', id);
			// console.log(url);
			// return false;
			$("#deleteForm").attr('action', url);
		}
		function formSubmit()
		{
			$("#deleteForm").submit();
		}
	</script>

	<script type="text/javascript">
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		
	</script>
@endsection