@extends('admin.layout.master')
@section('css')
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
	        <h1 class="m-0 text-dark">Jobs Pages</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i> Home</a></li>
              <li class="breadcrumb-item active">Jobs Pages</li>
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
	           	<form method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data">
	           		<input type="hidden" name="_token" value="{{csrf_token()}}">
	            	<div class="card-header">
		                <h3 class="card-title">
		                  <i class="fas fa-edit"></i>
		                  Create Job
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
									<option value="{{$company->id}}">{{$company->company_name}}</option>
									  @endforeach
							     </select>
				                </div>
				            </div>
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Recruitment Company Name:</label>
				                  <div class="input-group">
				                    <input type="text" name="recruitment_company_name" class="form-control" value="{{old('recruitment_company_name')}}">
				                  </div>
				                </div>
				            </div>
			    		</div>
			    		<div class="row">
			    			<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Job Title:</label>
				                  <div class="input-group">
				                    <input type="text" name="job_title" class="form-control" value="{{old('job_title')}}">
				                  </div>
				                </div>
				            </div>

				            <div class="col-sm-6">
				                <div class="form-group">
				                  <label>Upload Files:</label>
				                  <div class="input-group">
				                    <input type="file" name="file[]" multiple class="form-control">
				                  </div>
				                </div>
				            </div>
			    		</div>

			    		

			    		<div class="row">
							<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Salary:</label>
				                  <div class="input-group">
				                    <input type="text" name="salary" class="form-control" value="{{old('salary')}}">
				                  </div>
				                </div>
				            </div>
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Contract Period:</label>
				                  {{-- <div class="input-group">
				                    <input type="text" name="contract_period_start" class="form-control float-right" id="startdate">
				                    <input type="text" class="form-control float-right" name="contract_period_end" id="enddate" />
				                  </div> --}}
				                  <div class="input-daterange input-group" id="datepicker">
								    <input type="text" class="form-control" name="contract_period_start" autocomplete="off" value="{{old('contract_period_start')}}">
								    <div class="input-group-addon">to</div>
								    <input type="text" class="form-control" name="contract_period_end" autocomplete="off" value="{{old('contract_period_end')}}">
								</div>

				                </div>
				            </div>
			    		</div>

			    		<div class="row">
							<div class="col-sm-6">
				                <div class="form-group">
				                  <label>Visa Number:</label>
				                  <div class="input-group">
				                    <input type="text" name="visa_number" class="form-control" value="{{old('visa_number')}}">
				                  </div>
				                </div>
				            </div>
		            		<div class="col-sm-6">
				                <div class="form-group">
				                  <label>No. Of Candidates Required:</label>
				                  <div class="input-group">
				                    <input type="text" name="number_candidates" class="form-control" value="{{old('number_candidates')}}">
				                  </div>
				                </div>
				            </div>
			    		</div>
			    		<div class="row">
			    			<div class="col-sm-12">
				                <div class="form-group">
				                <label>
									<input type="checkbox" name="terms_and_conditions" value="1" checked="checked"> <span class="label-text"> Do you Agree to our <a href="#" data-toggle="modal" data-target="#modal_job_term_condition">Terms and Conditions? *</a></span>
								</label>
				                </div>
				            </div>
			    		</div>
			    		
			    		<div class="row">
				            <div class="col-sm-12">
				                <div class="mb-3">
				                	<label>Description:</label>
					                <textarea class="description_textarea" name="job_description" placeholder="Place some text here" value="{{old('job_description')}}" style="width: 100%; height: 500px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
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

<script type="text/javascript">
        // $(function () {
        //     $("#startdate").datepicker({
        //     	// uiLibrary: 'bootstrap4',
        //     	dateFormat: "yy-mm-dd",
        //         minDate: new Date(),
        //         onSelect: function (selected) {
        //             var dt = new Date(selected);
        //             dt.setDate(dt.getDate() + 1);
        //             $("#enddate").datepicker("option", "minDate", dt);
        //         }
        //     });
        //     $("#enddate").datepicker({
        //     	// uiLibrary: 'bootstrap4',
        //     	dateFormat: "yy-mm-dd",
        //         onSelect: function (selected) {
        //             var dt = new Date(selected);
        //             dt.setDate(dt.getDate() - 1);
        //             $("#startdate").datepicker("option", "maxDate", dt);
        //         }
        //     });
        // });
    </script>
    <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
	<script>
	  $(function () {
	    // Summernote
	    $('.description_textarea').summernote({
        	height: 150
	    });
		$('.input-daterange').datepicker({
		    todayBtn: true,
		    autoclose: true,
		    format: "yyyy-mm-dd",
		});

		$('.input-daterange input').each(function() {
		    $(this).datepicker('clearDates');
		});

	  });
	</script>
 @endsection