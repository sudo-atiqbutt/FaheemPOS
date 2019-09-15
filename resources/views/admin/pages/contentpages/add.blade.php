@extends('admin.layout.master')

@section('css')
	<link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">
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
	          
				@if($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif

	           <div class="card card-default" style="border-top: 3px solid #17a2b8 !important;">
	           	<form method="post" action="{{route('createpage')}}" enctype="multipart/form-data">
	           		<input type="hidden" name="_token" value="{{csrf_token()}}">
	            	<div class="card-header">
		                <h3 class="card-title">
		                  <i class="fas fa-folder"></i>
		                  Create Page
		                </h3>
	            	</div>
	            	<div class="card-body">
						<div class="row">
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Title:</label>
				                  <div class="input-group">
				                    <input type="text" name="title" class="form-control">
				                  </div>
				                </div>
				            </div>
				            <div class="col-sm-6">
				                <div class="form-group">
				                  <label>Image:</label>
				                  <div class="input-group">
				                    <input type="file" name="image" class="form-control">
				                  </div>
				                </div>
				            </div>
			    		</div>

						<div class="row">
				            <div class="col-sm-12">
				                <div class="mb-3">
				                	<label>Description:</label>
					                <textarea class="description_textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 500px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
					                </textarea>
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
    </section>


</div>



@endsection

@section('script')
	<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
	<script>
	  $(function () {
	    // Summernote
	    $('.description_textarea').summernote({
	    	// placeholder: 'Hello bootstrap 4',
        	// tabsize: 2
        	height: 150
	    });

	  })
	</script>
@endsection