@extends('admin.layout.master')

@section('css')
	<link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">
<style type="text/css">
.login-form-select{
    width: 100%;
    padding: 8px 10px 8px 10px;
}
</style>
@endsection

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark">Edit Pages</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i> Home</a></li>
              <li class="breadcrumb-item active">Edit Pages</li>
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
	           	<form method="POST" action="{{route('jobs.update',[$jobs->id])}}" enctype="multipart/form-data">
	           		<input type="hidden" name="_method" value="PUT">
	           		<input type="hidden" name="_token" value="{{csrf_token()}}">
	            	<div class="card-header">
		                <h3 class="card-title">
		                  <i class="fas fa-edit"></i>
		                  Edit Page
		                </h3>
	            	</div>
	            	<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
				                <div class="form-group">
				                	<label>Select Company:</label>
				                  <select name="company_name" class="login-form-select">
                            		<option value="">Select Company</option>
                            		@foreach($companies as $company)
									<option value="{{$company->id}}" @if($jobs->company_id==$company->id) selected @endif>{{$company->company_name}}</option>
									@endforeach
							     </select>
				                </div>
				            </div>
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Recruitment Company Name:</label>
				                  <div class="input-group">
				                    <input type="text" name="recruitment_company_name" class="form-control" value="{{$jobs->recruitment_company_name}}">
				                  </div>
				                </div>
				            </div>
			    		</div>

			    		<div class="row">
			    			<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Job Title:</label>
				                  <div class="input-group">
				                    <input type="text" name="job_title" class="form-control" value="{{$jobs->job_title}}">
				                  </div>
				                </div>
				            </div>

				            <div class="col-sm-6">
				                <div class="form-group">
				                  <label>Upload Files:</label>
				                  <div class="input-group">
				                    <input type="file" name="file[]" multiple class="form-control" value="{{$jobs->uploaded_files}}">
				                    
				                  </div>
				                </div>
				            </div>
			    		</div>

			    		<div class="row">
							<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Salary:</label>
				                  <div class="input-group">
				                    <input type="text" name="salary" class="form-control" value="{{$jobs->salary}}">
				                  </div>
				                </div>
				            </div>
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Contract Period:</label>
				                  <div class="input-daterange input-group" id="datepicker">
								    <input type="text" class="form-control" name="contract_period_start" value="{{$jobs->contract_period_start}}">
								    <div class="input-group-addon">to</div>
								    <input type="text" class="form-control" name="contract_period_end" value="{{$jobs->contract_period_end}}">
								</div>

				                </div>
				            </div>
			    		</div>

			    		<div class="row">
							<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Visa Number:</label>
				                  <div class="input-group">
				                    <input type="text" name="visa_number" class="form-control" value="{{$jobs->visa_number}}">
				                  </div>
				                </div>
				            </div>
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>No. Of Candidates Required:</label>
				                  <div class="input-group">
				                    <input type="text" name="number_candidates" class="form-control" value="{{$jobs->no_of_candidates_required}}">
				                  </div>
				                </div>
				            </div>
			    		</div>

			    		<div class="row">
			    			<div class="col-sm-12">
				                <div class="form-group">
					                <label>
										<input type="checkbox" name="terms_and_conditions" value="{{$jobs->term_and_condition}}" checked="checked"> <span class="label-text"> Do you Agree to our <a href="#" data-toggle="modal" data-target="#modal_job_term_condition">Terms and Conditions? *</a></span>
									</label>
				                </div>
				            </div>
			    		</div>


						<div class="row">
				            <div class="col-sm-12">
				                <div class="mb-3">
				                	<label>Description:</label>
					                <textarea class="description_textarea textarea" name="job_description" placeholder="Place some text here" value="" style="width: 100%; height: 500px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$jobs->job_description}}
					                </textarea>
					            </div>
				            </div>
				        </div>
	              	</div>
	              	<div class="card-footer">
	              		<button type="submit" class="btn btn-success float-right">update</button>
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

	    $('.input-daterange').datepicker({
		    // todayBtn: true,
		    autoclose: true,
		    format: "yyyy-mm-dd",
		});

		$('.input-daterange input').each(function() {
		    // $(this).datepicker('clearDates');
		});
		// var start = $('#test').val();
		// $('#datePicker').datepicker( 'setDate', today );

	  });
	</script>
@endsection