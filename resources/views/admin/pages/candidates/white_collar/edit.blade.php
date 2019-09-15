@extends('admin.layout.master')

@section('css')
<link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">
<style type="text/css">
.internal_rec{
	border-top: 1px solid #ddd;
	margin-top: 25px;
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
	        <h1 class="m-0 text-dark">White Collar</h1>
	      </div><!-- /.col -->
	      <div class="col-sm-6">
	        <ol class="breadcrumb float-sm-right">
	          <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i> Home</a></li>
              <li class="breadcrumb-item active">White Collar</li>
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
          {{--  @php 
            echo "<pre>";
            print_r($white_condidates); die();
           @endphp  --}}
           @foreach($white_condidates as $white_condidate)

		           <form method="POST" action="{{ route('candidate.update',$white_condidate->id) }}" enctype="multipart/form-data">

			        <input type="hidden" name="_method" value="PUT">
	           		<input type="hidden" name="_token" value="{{csrf_token()}}">

			         <div class="card card-default" style="border-top: 3px solid #17a2b8 !important;">
			          
			            	<div class="card-header">
				                <h3 class="card-title">
				                  <i class="fas fa-edit"></i>
				                   Personal Informations
				                </h3>
			            	</div>
			            	<div class="card-body">
								<div class="row">
				            		<div class="col-sm-6">
						                <div class="form-group">
						                  <label>First Name:</label>
						                  <div class="input-group">
						                    <input type="text" name="fname" 
						                    value="{{$white_condidate->first_name}}" class="form-control">
						                  </div>
						                </div>
						            </div>

						            <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Last Name:</label>
						                  <div class="input-group">
						                    <input type="text" name="lname" value="{{$white_condidate->last_name}}" class="form-control">
						                  </div>
						                </div>
						            </div>	          

						            <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Middle Name:</label>
						                  <div class="input-group">
						                    <input type="text" name="middle_name" value="{{$white_condidate->middle_name}}" class="form-control">
						                  </div>
						                </div>
						            </div>
						            	<div class="col-sm-6">
						                <div class="form-group">
						                  <label>Father Name:</label>
						                  <div class="input-group">
						                    <input type="text" value="{{$white_condidate->father_name}}" name="father_name" class="form-control">
						                  </div>
						                </div>
						            </div>
						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Upload Photo:</label>
						                  <div class="input-group">
						                    <input type="file"  name="attached_file[]" multiple   {{-- src="{{ URL::to('/') }}/uploads/admin/candidates_images/{{$white_condidate->attached_file}}" --}} class="form-control">
						                  </div>
						                </div>
						            </div>
						         
						           
						<div class="col-sm-6">
						<div class="form-group">
						<label>Religion:</label>

						<select class="form-control dropdown" id="religion" name="religion">	
						<option value="Hinduism" @if($white_condidate->religion=='Hinduism') selected='selected' @endif>Hinduism</option>
						<option value="Islam" @if($white_condidate->religion=='Islam') selected='selected' @endif>Islam</option>
						<option value="Jainism" @if($white_condidate->religion=='Jainism') selected='selected' @endif>Jainism</option>
						<option value="Juche"@if($white_condidate->religion=='Juche') selected='selected' @endif>Juche</option>
						<option value="Judaism"@if($white_condidate->religion=='Judaism') selected='selected' @endif>Judaism</option> 
						<option value="Nonreligious" @if($white_condidate->religion=='Nonreligious') selected='selected' @endif>Nonreligious</option>
						</select>

						</div>
						</div>


					<div class="col-sm-6">
					<div class="form-group">
					<label>Religion:</label>
					<div class="input-group">
					<select class="form-control dropdown"  name="religion">
					<option value="">Please Select Religion</option>	
					<option value="Islam" @if($white_condidate->religion=='Islam') selected='selected' @endif>Islam</option>
					<option value="Hinduism" @if($white_condidate->religion=='Hinduism') selected='selected' @endif>Hinduism</option>								
					<option value="Juche" @if($white_condidate->religion=='Juche') selected='selected' @endif>Juche</option>
					<option value="Nonreligious" @if($white_condidate->religion=='Nonreligious') selected='selected' @endif>Nonreligious</option>
					<option value="Other" @if($white_condidate->religion=='Other') selected='selected' @endif>Other</option>
					</select>
					</div>
					</div>
					</div>

                                   <div class="col-sm-6">
									 <div class="form-group">
										<label>Country:</label>
										 <select class="form-control country" id="personal_info_CountryId" name="country">
				                    	<option value="">Please Select Country</option>
				                    	@if(!empty($countries))
		                            		@foreach($countries as $country)
		                            			<option value="{{$country->id}}" @if($white_condidate->country==$country->id) selected @endif>{{$country->name}}</option>
		                            		@endforeach
	                            		@endif
				                       </select>
								     </div>
								   </div>
                                   
                                   <div class="col-sm-6">
									 <div class="form-group">
										<label>State:</label>
										<select class="form-control state" id="personal_info_stateids"  name="states">
                                           <option value="{{$per_states[0]->id != null}}">{{$per_states[0]->name}}</option>	
										  </select>
									  </div>
								   </div>
                                   
                                   <div class="col-sm-6">
									 <div class="form-group">
										<label>City:</label>
										<select class="form-control city" id="personal_info_cityids"  name="per_city">

									     <option value="{{$cities[0]->id !=null}}">{{$cities[0]->name}}</option>

										</select>
									  </div>
								   </div>

						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>PTCL Number:</label>
						                  <div class="input-group">
						                    <input type="text" value="{{$white_condidate->ptcl_no}}" name="ptcl_no" class="form-control">
						                  </div>
						                </div>
						            </div>

						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Mobile Number:</label>
						                  <div class="input-group">
						                    <input type="text"  value="{{$white_condidate->contact_no}}"  name="contact_no" class="form-control">
						                  </div>
						                </div>
						            </div>
		                             
		                           <div class="col-sm-6">
									 <div class="form-group">
										<label>Gender:</label>
										<select class="form-control" name="gender">
									    <option value="1"@if($white_condidate->gender=='1') selected='selected' @endif >Male</option>
									    <option value="0"@if($white_condidate->gender=='0') selected='selected' @endif >Female</option>
										 
										</select>
									  </div>
								   </div>
						           <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Date of Birth*:</label>
						                  <div class="input-group">
						                    <input type="text" value="{{$white_condidate->dob}}" name="dob" id="date_of_birth" class="form-control">
						                  </div>
						                </div>
						            </div>

						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>CNIC Number:</label>
						                  <div class="input-group">
						                    <input type="text" name="cnic"  value="{{$white_condidate->cnic}}"  class="form-control">
						                  </div>
						                </div>
						            </div>

						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Passport Number:</label>
						                  <div class="input-group">
						                    <input type="text" name="passport_no" value="{{$white_condidate->passport_no}}" class="form-control">
						                  </div>
						                </div>
						            </div>
		                             
		                            <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Email Address:</label>
						                  <div class="input-group">
						                    <input type="email" name="email" value="{{$white_condidate->email}}" class="form-control">
						                  </div>
						                </div>
						            </div>


						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Address:</label>
						                  <div class="input-group">
						                  	<textarea name="address" class="form-control">{{$white_condidate->address}}</textarea>
						                  </div>
						                </div>
						            </div>
						          
					    		</div>
			              	</div>        
			          </div>
                 
                   
			         <div class="card card-default" style="border-top: 3px solid #17a2b8 !important;">
			          
			           		<input type="hidden" name="_token" value="{{csrf_token()}}">
			            	<div class="card-header">
				                <h3 class="card-title">
				                  <i class="fas fa-edit"></i>
				                   Acadamic Information
				                </h3>
			            	</div>
			            	<div class="card-body">
			            		@php 
			            		$count=0;
			            		@endphp
			            		
			            		@foreach($white_condidate->acadamic_record as $key => 
			            			$acadamic_record)
			            			<input type="hidden" name="previous_values_of_acadamic" value="{{++$count}}">
			            			<input type="hidden" name="acadamic_rec_id[]" value="{{$acadamic_record->record_id}}">

									<div class="row">
					                 	<div class="col-sm-6">
							                <div class="form-group">
							                  <label>Name of Institution:</label>
							                  <div class="input-group">
							                    <input type="text" name="institution_name[]" value="{{$acadamic_record->institution_name}}" class="form-control">
							                  </div>
							                </div>
							            </div>
			                            
			                            <div class="col-sm-6">
							                <div class="form-group">
							                  <label>Degree Title:</label>
							                  <div class="input-group">
							                    <input type="text" name="degree_title[]" value="{{$acadamic_record->degree_title}}" class="form-control">
							                  </div>
							                </div>
							            </div>

							            <div class="col-sm-6">
							                <div class="form-group">
							                  <label>From:</label>
							                  <div class="input-group">
							                    <input type="text" name="degree_starting_date[]" value="{{$acadamic_record->degree_start_from}}"  class="form-control calender_set" id="starting_date">
							                  </div>
							                </div>
							            </div>

							            	<div class="col-sm-6">
							                <div class="form-group">
							                  <label>To:</label>
							                  <div class="input-group">
							                    <input type="text" name="degree_ending_date[]"
							                    value="{{$acadamic_record->degree_end_to}}"  
							                     id="ending_date" class="form-control calender_set">
							                  </div>
							                </div>
							            </div>

							           <div class="col-sm-6">
							                <div class="form-group">
							                  <label>Address:</label>
							                  <div class="input-group">
							                    <input type="text" name="acadmic_address[]" value="{{$acadamic_record->address}}"  class="form-control">
							                  </div>
							                </div>
							           </div>
                                                              
			                               
			                           <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Grade / CGPA:</label>
						                  <div class="input-group">
						                    <input type="text" name="grades[]"  value="{{$acadamic_record->grades}}"  class="form-control">
						                  </div>
						                 </div>
						               </div>
			                           
			                        <div class="col-sm-6">
									 <div class="form-group">
										<label>Country:</label>
										 <select class="form-control country acadamic_record_countryIds" id="acadamic_record_countryIds" name="acadamic_record_countries[]" >
				                    	<option value="">Please Select Country</option>
				                    	@if(!empty($acadamic_countries))
		                            		@foreach($acadamic_countries as $country)
		                            			<option value="{{$country->id}}" @if($acadamic_record->country==$country->id) selected @endif>{{$country->name}}</option>
		                            		@endforeach
	                            		@endif
				                       </select>
								     </div>
								   </div>
                                   
                                   {{-- start --}}
                                   <div class="col-sm-6">
									 <div class="form-group">
										<label>State:</label>
										<select class="form-control acadamic_record_stateids"  id="acadamic_record_stateids" name="acadamic_record_states[]">	
	
		                            	@if(!empty($all_states))
		                            		@foreach($all_states as $state)
		                            			<option value="{{$state->id}}" @if($acadamic_record->state==$state->id) selected @endif>{{$state->name}}</option>
		                            		@endforeach
	                            		 @endif
										</select>
									  </div>
								   </div>
                                   
                                   <div class="col-sm-6">
									 <div class="form-group">
										<label>City:</label>
										<select class="form-control acadamic_record_cityIds" 
										 id="acadamic_record_cityIds"  name="acadamic_record_cities[]">                                          
                                          {{-- @foreach($cities as $city) --}}
									        <option value="{{$acadamic_record->city}}">{{$acadamic_record->city}}</option>
                                            
		                            	  {{-- @endforeach --}}

										</select>
									  </div>
								   </div>	   
                                   {{-- end --}}
						             <div class="col-sm-6">
							                <div class="form-group">
							                  <label>Upload Ceretificate:</label>
							                  <div class="input-group">
							                    <input type="file" name="upload_ceretificate[]"  class="form-control">
							                  </div>
							                </div>
							            </div>
					                </div>
				            	@endforeach()

				            	<div id="add_acadamaic_rec">
				            	</div>

				            	<button type="button" name="edit_new_acadamaic_rec" id="edit_new_acadamic_rec" class="btn btn-success float-right">Add More</button>
			              	</div>        
			          </div>

			    <div class="card card-default" style="border-top: 3px solid #17a2b8 !important;">
			           	<input type="hidden" name="_token" value="{{csrf_token()}}">
			            	<div class="card-header">
				                <h3 class="card-title">
				                  <i class="fas fa-edit"></i>
				                   Experience
				                </h3>
			            	</div>
			            <div class="card-body">
                          
                          @php 
			            		$count=0;
			              @endphp
			            		
			            	@foreach($white_condidate->experience as $experiences)
                         

                              <input type="hidden" name="previous_values_of_exprience" value="{{++$count}}"> 
                              <input type="hidden" name="exprience_rec_id[]" value="{{$experiences->id}}">
							 <div class="row">
								  <div class="col-sm-6">
					                <div class="form-group">
					                  <label>Employer Name:</label>
					                  <div class="input-group">
					                    <input type="text" name="employee_name[]" value="{{$experiences->employer_name}}" class="form-control">
					                  </div>
					                 </div>
					               </div>

					                <div class="col-sm-6">
					                <div class="form-group">
					                  <label>Designation:</label>
					                  <div class="input-group">
					                    <input type="text" name="designation[]" 
					                    value="{{$experiences->designation}}" class="form-control">
					                  </div>
					                 </div>
					               </div>

					                <div class="col-sm-6">
					                <div class="form-group">
					                  <label>From:</label>
					                  <div class="input-group">
					                    <input type="text" name="exp_Starting_date[]" id="experince_from" value="{{$experiences->experience_starts_from}}"  class="form-control calender_set">
					                  </div>
					                 </div>
					               </div>

					                <div class="col-sm-6">
					                <div class="form-group">
					                  <label>To:</label>
					                  <div class="input-group">
					                    <input type="text" name="exp_end_date[]"  id="experince_end" value="{{$experiences->experience_end_to}}"  class="form-control calender_set">
					                  </div>
					                 </div>
					               </div>

					                <div class="col-sm-6">
					                <div class="form-group">
					                  <label>Job Description :</label>
					                  <div class="input-group">
					                    <input type="text" name="job_description[]" value="{{$experiences->job_description}}" class="form-control">
					                  </div>
					                 </div>
					               </div>

					               <div class="col-sm-6">
					                <div class="form-group">
					                  <label>Country:</label>
					                  <div class="input-group ">
					                    <select class="form-control" id="certification_CountryIds" name="exprience_country[]" >
				                    	<option value="">Please Select Country</option>
				                    	@if(!empty($acadamic_countries))
		                            		@foreach($acadamic_countries as $country)
		                            			<option value="{{$country->id}}" @if($experiences->country==$country->id) selected @endif>{{$country->name}}</option>
		                            		@endforeach
	                            		@endif
				                       </select>
					                  </div>
					                 </div>
					               </div>

					                <div class="col-sm-6">
									 <div class="form-group">
										<label>State:</label>
										<select class="form-control "  id="certification_stateids" name="exprienc_state[]">	

		                            	  @if(!empty($all_states))
		                            		@foreach($all_states as $state)
		                            			<option value="{{$state->id}}" @if($experiences->state==$state->id) selected @endif>{{$state->name}}</option>
		                            		@endforeach
	                            		 @endif
										</select>


									  </div>
								   </div>

					               <div class="col-sm-6">
									 <div class="form-group">
										<label>City:</label>
										<select class="form-control" 
										 id="certification_citIds"  name="exprience_city[]">                                          
									        <option value="{{$experiences->city}}">{{$experiences->city}}</option>


										</select>
									  </div>
								   </div>


								 </div>
							 @endforeach()
				               
				             <div id="add_expreienc_rec">

				               </div>

				            <button type="button" name="edit_new_exprience_rec" id="edit_new_exprience_rec" class="btn btn-success float-right">Add More</button>

			              	</div>  

			              	<div class="card-footer">
			              		<button type="submit" value="Submit" class="btn btn-success float-right">update</button>
			              	</div>      
			             </div>
		           </form>
		           @endforeach

	          </div>
	        </div>
       	</div>
    </section>
</div>

@endsection

@section('script')

<script>
  $(function () {


    $('.calender_set').datepicker({
	        autoclose: true
	    });

   $('#date_of_birth').datepicker({
      autoclose: true
    });


    $('#starting_date').datepicker({
      autoclose: true
    });

     $('#ending_date').datepicker({
      autoclose: true
    });
    
     $('#experince_from').datepicker({
      autoclose: true
    });

     $('#experince_end').datepicker({
      autoclose: true
    });  

  })
</script>

<script type="text/javascript">
	$('document').ready(function(){
		var i=1;
		$('#edit_new_acadamic_rec').click(function(){  
           i++;  
           $('#total_counter_of_acadamic_rec').val(i);
           $('#add_acadamaic_rec').append('<div class="row extrarow_for_acadamic'+i+'"><div class="col-sm-4"></div><div class="col-sm-4 internal_rec"></div><div class="col-sm-4"></div><div class="col-sm-12"><button type="button" name="remove" id="'+i+'" class="btn btn-danger float-right btn_remove">X</button></div><div class="col-sm-6"><div class="form-group"><label>Name of Institution:</label><div class="input-group"><input type="text" name="institution_name[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Degree Title:</label><div class="input-group"><input type="text" name="degree_title[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>From:</label><div class="input-group"><input type="text" name="degree_starting_date[]"  class="form-control calender_set" id="starting_date"></div></div></div><div class="col-sm-6"><div class="form-group"><label>To:</label><div class="input-group"><input type="text" name="degree_ending_date[]"id="ending_date" class="form-control calender_set"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Address:</label><div class="input-group"><input type="text" name="acadmic_address[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Grade / CGPA:</label><div class="input-group"><input type="text" name="grades[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Country:</label><select class="form-control acad_country" id="acadamic_record_countryId" name="acadamic_record_countries[]"><option value="">Please Select Country</option>@if(!empty($countries)) @foreach($countries as $country)<option value="{{$country->id}}">{{$country->name}}</option>@endforeach @endif</select></div></div><div class="col-sm-6"><div class="form-group"><label>State:</label><select class="form-control acad_state" id="acadamic_record_stateid" name="acadamic_record_states[]"><option value="">Please Select state</option></select></div></div><div class="col-sm-6"><div class="form-group"><label>City:</label><select class="form-control acad_city" id="acadamic_record_cityId" name="acadamic_record_cities[]"><option value="">Please Select City</option></select></div></div>  <div class="col-sm-6"><div class="form-group"><label>Upload Ceretificate:</label><div class="input-group"><input type="file" name="upload_ceretificate[]"  class="form-control"></div></div></div>'); 
            

	           $('.calender_set').datepicker({
	      			autoclose: true

	    		});

           	////////////////////////Addmore country states cities//////////////////

      $('.acad_country').change(function(){
		$(".acad_state").empty();
		$(".acad_state").append('<option value="">Please Select State</option>');
		$(".acad_city").empty();
		$(".acad_city").append('<option value="">Please Select City</option>');
		var country_id=$(this).val(); 


		if(country_id){
			
			$.ajax({
	           type:'GET',
	           url:"{{url('get_states_ajaxRequest')}}?country_id="+country_id,
	           // data:{name:name, password:password, email:email},
	           success:function(data){
	              console.log(data);
	              if(data){
	              	$.each(data, function(key, value){
	              		$('.acad_state').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$(".acad_state").empty();
	              	$(".acad_state").append('<option value="">Please Select State</option>');
	              }
	              
	           }
	        });

		}
		else{
			$(".acad_state").empty();
        	$(".acad_city").empty();
		}
	});

	////////////////////City//////////////////////////
	$('.acad_state').on('change',function(){

		$(".acad_city").empty();
		$(".acad_city").append('<option value="">Please Select City</option>');
		 var state_id=$(this).val(); 
		if(state_id){
			
			$.ajax({
	           type:'GET',
	           url:"{{url('get_cities_of_states')}}?state_id="+state_id,
	           // data:{name:name, password:password, email:email},
	           success:function(data){
	              console.log(data);
	              if(data){
	              	$.each(data, function(key, value){
	              		$('.acad_city').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$(".acad_city").empty();
	              	$(".acad_city").append('<option value="">Please Select City</option>');
	              }	              
	           }
	        });

		}
			else{
	        	$(".acad_city").empty();
	        	$(".acad_city").append('<option value="">Please Select City</option>');
			    }
	});

           	////////////////////////Addmore country states cities//////////////////




      	}); 

      	$(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('.extrarow_for_acadamic'+button_id+'').remove();  
      	}); 

	});


	 //////////////////////////Experience Starts///////////////////////////////
			var j=1;
			$('#edit_new_exprience_rec').click(function(){ 
			j++; 
			$('#add_expreienc_rec').append('<div class="row extrarow_for_experience'+j+'"><div class="col-sm-4"></div><div class="col-sm-4 internal_rec"></div><div class="col-sm-4"></div><div class="col-sm-12"><button type="button" name="remove" id="'+j+'" class="btn btn-danger float-right btn_remove_experience">X</button></div><div class="col-sm-6"><div class="form-group"><label>Employer Name:</label><div class="input-group"><input type="text" name="employee_name[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Designation:</label><div class="input-group"><input type="text" name="designation[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>From:</label><div class="input-group"><input type="text" name="exp_Starting_date[]" id="experince_from" class="form-control calender_set"></div></div></div><div class="col-sm-6"><div class="form-group"><label>To:</label><div class="input-group"><input type="text" name="exp_end_date[]" id="experince_end" class="form-control calender_set"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Job Description :</label><div class="input-group"><input type="text" name="job_description[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Country:</label><div class="input-group"><input type="text" name="exprience_country[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>State:</label><div class="input-group"><input type="text" name="exprienc_state[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>City:</label><div class="input-group"><input type="text" name="exprience_city[]" class="form-control"></div></div></div></div>'); 

			   $('.calender_set').datepicker({
	      			autoclose: true

	    		});
			}); 


			$(document).on('click', '.btn_remove_experience', function(){ 
			var button_id = $(this).attr("id"); 
			$('.extrarow_for_experience'+button_id+'').remove(); 
		});
//////////////////////////Experience Ends///////////////////////////////
</script>

  <script type="text/javascript">
{{-- country,state,city code start--}}	
 
////////////////////////////////Personal Detail Start/////////////////////////////////////////

	////////////////////states//////////////////////////
	$('#personal_info_CountryId').change(function(){
		$("#personal_info_cityids").empty();
		$("#personal_info_stateids").empty();
		$("#personal_info_stateids").append('<option value="">Please Select State</option>');
		$("#personal_info_cityids").append('<option value="">Please Select City</option>');
		var country_id=$(this).val(); 
		if(country_id){
			
			$.ajax({
	           type:'GET',
	           url:"{{url('get_states_ajaxRequest')}}?country_id="+country_id,
	           // data:{name:name, password:password, email:email},
	           success:function(data){
	              console.log(data);
	              if(data){
	              	$.each(data, function(key, value){
	              		$('#personal_info_stateids').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$("#personal_info_stateids").empty();
	              	$("#personal_info_stateids").append('<option value="">Please Select State</option>');
	              }
	              
	           }
	        });

		}
		else{
			$("#personal_info_stateids").empty();
        	$("#personal_info_cityids").empty();
		}
	});

	////////////////////City//////////////////////////
	$('#personal_info_stateids').change(function(){
		$("#personal_info_cityids").empty();
		$("#personal_info_cityids").append('<option value="">Please Select City</option>');
		var state_id=$(this).val(); 
		if(state_id){
			
			$.ajax({
	           type:'GET',
	           url:"{{url('get_cities_of_states')}}?state_id="+state_id,
	           // data:{name:name, password:password, email:email},
	           success:function(data){
	              console.log(data);
	              if(data){
	              	$.each(data, function(key, value){
	              		$('#personal_info_cityids').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$("#personal_info_cityids").empty();
	              	$("#personal_info_cityids").append('<option value="">Please Select City</option>');

	              }
	              
	           }
	        });

		}
		else{
        	$("#personal_info_cityids").empty();
        	$("#personal_info_cityids").append('<option value="">Please Select City</option>');
		}
	});
////////////////////////////////Personal Detail End/////////////////////////////////////////



////////////////////////////////Academic Detail Start/////////////////////////////////////////

	////////////////////states//////////////////////////
	$('.acadamic_record_countryIds').change(function(){
		$(".acadamic_record_stateids").empty();
		$(".acadamic_record_stateids").append('<option value="">Please Select State</option>');
		$(".acadamic_record_cityIds").empty();
		$(".acadamic_record_cityIds").append('<option value="">Please Select City</option>');
		var country_id=$(this).val(); 
		if(country_id){
			
			$.ajax({
	           type:'GET',
	           url:"{{url('get_states_ajaxRequest')}}?country_id="+country_id,
	           // data:{name:name, password:password, email:email},
	           success:function(data){
	              console.log(data);
	              if(data){
	              	$.each(data, function(key, value){
	              		$('.acadamic_record_stateids').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$(".acadamic_record_stateids").empty();
	              	$(".acadamic_record_stateids").append('<option value="">Please Select State</option>');
	              }
	              
	           }
	        });

		}
		else{
			$(".acadamic_record_stateids").empty();
        	$(".acadamic_record_cityIds").empty();
		}
	});

	////////////////////City//////////////////////////
	$('.acadamic_record_stateids').change(function(){
		$(".acadamic_record_cityIds").empty();
		$(".acadamic_record_cityIds").append('<option value="">Please Select City</option>');
		var state_id=$(this).val(); 
		if(state_id){
			
			$.ajax({
	           type:'GET',
	           url:"{{url('get_cities_of_states')}}?state_id="+state_id,
	           // data:{name:name, password:password, email:email},
	           success:function(data){
	              console.log(data);
	              if(data){
	              	$.each(data, function(key, value){
	              		$('.acadamic_record_cityIds').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$(".acadamic_record_cityIds").empty();
	              	$(".acadamic_record_cityIds").append('<option value="">Please Select City</option>');
	              }	              
	           }
	        });

		}
		else{
        	$(".acadamic_record_cityIds").empty();
        	$(".acadamic_record_cityIds").append('<option value="">Please Select City</option>');
		}
	});
////////////////////////////////Academic Detail End/////////////////////////////////////////


////////////////////////////////Certifications Detail Start/////////////////////////////////////////

	////////////////////states//////////////////////////
	$('#certification_CountryIds').change(function(){
		$("#certification_stateids").empty();
		$("#certification_stateids").append('<option value="">Please Select State</option>');
		$("#certification_citIds").empty();
		$("#certification_citIds").append('<option value="">Please Select City</option>');
		var country_id=$(this).val(); 
		if(country_id){
			
			$.ajax({
	           type:'GET',
	           url:"{{url('get_states_ajaxRequest')}}?country_id="+country_id,
	           // data:{name:name, password:password, email:email},
	           success:function(data){
	              console.log(data);
	              if(data){
	              	$.each(data, function(key, value){
	              		$('#certification_stateids').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$("#certification_stateids").empty();
	              	$("#certification_stateids").append('<option value="">Please Select State</option>');
	              }
	              
	           }
	        });

		}
		else{
			$("#certification_stateids").empty();
        	$("#certification_citIds").empty();
		}
	});

	////////////////////City//////////////////////////
	$('#certification_stateids').change(function(){
		$("#certification_citIds").empty();
		$("#certification_citIds").append('<option value="">Please Select City</option>');
		var state_id=$(this).val(); 
		if(state_id){
			
			$.ajax({
	           type:'GET',
	           url:"{{url('get_cities_of_states')}}?state_id="+state_id,
	           // data:{name:name, password:password, email:email},
	           success:function(data){
	              console.log(data);
	              if(data){
	              	$.each(data, function(key, value){
	              		$('#certification_citIds').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$("#certification_citIds").empty();
	              	$("#certification_citIds").append('<option value="">Please Select City</option>');

	              }
	              
	           }
	        });

		}
		else{
        	$("#acadamic_record_cityIds").empty();
        	$("#acadamic_record_cityIds").append('<option value="">Please Select City</option>');
		}
	});
////////////////////////////////Certifications Detail End/////////////////////////////////////////

</script>
{{-- country ,state ,city end --}} 

@endsection