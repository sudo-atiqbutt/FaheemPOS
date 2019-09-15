@extends('admin.layout.master')

@section('css')
<style type="text/css">
	.link_btn td a {
	    float: left;
	    margin-right: 5px;
	}
	.link_btn td img {
	    max-width: 45px;
	    max-height: 45px;
	}
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
	        <h1 class="m-0 text-dark">Content Pages</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i> Home</a></li>
              <li class="breadcrumb-item active">Content Pages</li>
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
		                  <i class="fas fa-folder"></i>
		                  All Pages
		                  <a href="{{route('add_page')}}"><button type="button" class="btn btn-success float-right">Add New</button></a>
		                </h3>

	            	</div>

	            	<div class="card-body">
	            		<table id="content_page_datatable" class="table table-bordered table-striped">
			                <thead>
			                <tr>
			                  <th>Id</th>
			                  <th>Image</th>
			                  <th>Title</th>
			                  <th>Description</th>
			                  <th>Action</th>
			                </tr>
			                </thead>
			                <tbody class="link_btn">
			                	@foreach($content_pages as $pages)
			                	<tr>
			                	  <td>{{$pages->id}}</td>
				                  <td style="text-align: center;"><img src="{{ URL::to('/') }}/uploads/admin/pages/{{$pages->image}}"></td>
				                  <td>{{$pages->title}}</td>				            
				                  <td>{{$pages->description}}</td>
				                  <td><a href="{{url('editpage',['id' => $pages->id])}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>
				                  <form method="post" action="{{url('deletepage',['id' => $pages->id])}}">
					                  	<input type="hidden" name="_method" value="DELETE">
		           						<input type="hidden" name="_token" value="{{csrf_token()}}">
					                  	<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
				                  </form>
				                  </td>
			                	</tr>
			                	@endforeach
			                </tbody>
			                <tfoot>
				                <tr>
				                  	<th>Id</th>
				                  	<th>Image</th>
			                  		<th>Title</th>
			                  		<th>Description</th>
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
	<script>
	  $(function () {
	    $('#content_page_datatable').DataTable();
	    // $('#content_page_datatable').DataTable({
	    //   "paging": true,
	    //   "lengthChange": false,
	    //   "searching": false,
	    //   "ordering": true,
	    //   "info": true,
	    //   "autoWidth": false,
	    // });
	  });
	</script>
@endsection