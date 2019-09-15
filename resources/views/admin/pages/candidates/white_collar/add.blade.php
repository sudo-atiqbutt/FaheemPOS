@extends('admin.layout.master')

@section('css')
<style type="text/css">
	.internal_rec{
		border-top: 1px solid #ddd;
		margin-top: 25px;
	}

</style>
	<link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">
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
		           <form method="POST" action="{{ route('candidate.store') }}" enctype="multipart/form-data">
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
						                    <input type="text" name="fname" value="{{old('fname')}}" class="form-control">
						                  </div>
						                </div>
						            </div>

						            <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Last Name:</label>
						                  <div class="input-group">
						                    <input type="text" name="lname"  value="{{old('lname')}}" class="form-control">
						                  </div>
						                </div>
						            </div>	          

						            <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Middle Name:</label>
						                  <div class="input-group">
						                    <input type="text" name="middle_name" value="{{old('middle_name')}}" class="form-control">
						                  </div>
						                </div>
						            </div>
						            	<div class="col-sm-6">
						                <div class="form-group">
						                  <label>Father Name:</label>
						                  <div class="input-group">
						                    <input type="text" name="father_name" value="{{old('father_name')}}" class="form-control">
						                  </div>
						                </div>
						            </div>
						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Upload Photo:</label>
						                  <div class="input-group">
						                    <input type="file" name="attached_file[]" multiple class="form-control">
						                  </div>
						                </div>
						            </div>
						           


								<div class="col-sm-6">
								<div class="form-group">
								<label>Religion:</label>
								<div class="input-group">
							  
								<select class="form-control dropdown"  name="religion">
								<option value="">Please Select Religion</option>	
								<option value="Islam" @if (old('religion') == "Islam") {{ 'selected' }} @endif>Islam</option>
								 <option value="Christian"  @if (old('religion') == "Christian") {{ 'selected' }} @endif>Christian</option>
								 <option value="Hinduism"  @if (old('religion') == "Hinduism") {{ 'selected' }} @endif>Hinduism</option>								
								<option value="Juche" @if (old('religion') == "Juche") {{ 'selected' }} @endif>Juche</option>
								<option value="Nonreligious" @if (old('religion') == "Nonreligious") {{ 'selected' }} @endif>Nonreligious</option>
								<option value="Other" @if (old('religion') == "Other") {{ 'selected' }} @endif>Other</option>
								</select>
								</div>
								</div>
								</div>
                        
							      <div class="col-sm-6">
									 <div class="form-group">
										<label>Country:</label>
										<select class="form-control " id="personal_info_CountryId" name="personal_info_countries">
										<option value="">Please Select Country</option>
										 @if(!empty($countries))
	                            		  @foreach($countries as $country)
	                            		 <option value="{{$country->id}}">{{$country->name}}</option>
	                            		@endforeach
	                            	     @endif
										 
										</select>
									  </div>
								   </div>

						           <div class="col-sm-6">
									 <div class="form-group">
										<label>State:</label>
										<select class="form-control state" id="personal_info_stateids" name="personal_info_states">
										<option value="">Please Select state</option>	
										</select>
									  </div>
								   </div>     
                                     <div class="col-sm-6">
									 <div class="form-group">
										<label>City:</label>
										<select class="form-control" id="personal_info_cityids" name="personal_info_cities">
										<option value="">Please Select City</option>	
										</select>
									  </div>
								   </div>  

						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>PTCL Number:</label>
						                  <div class="input-group">
						                    <input type="text" name="ptcl_no" value="{{old('ptcl_no')}}" class="form-control">
						                  </div>
						                </div>
						            </div>

						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Mobile Number:</label>
						                  <div class="input-group">
						                    <input type="text" value="{{old('religion')}}" name="contact_no" class="form-control">
						                  </div>
						                </div>
						            </div>
		                             
		                           <div class="col-sm-6">
									 <div class="form-group">
										<label>Gender:</label>
										<select class="form-control state" value="{{old('gender')}}" name="gender">
										<option value="">Please Select Gender</option>
										 <option value="1"  @if (old('gender') == "1") {{ 'selected' }} @endif>Male</option>
										 <option value="0"  @if (old('gender') == "0") {{ 'selected' }} @endif>Female</option>
										</select>
									  </div>
								   </div>
						      
						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Date of Birth*:</label>
						                  <div class="input-group">
						                    <input type="text"  value="{{old('dob')}}" name="dob" class="form-control calender_set">
						                  </div>
						                </div>
						            </div>

						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>CNIC Number:</label>
						                  <div class="input-group">
						                    <input type="text" name="cnic" value="{{old('cnic')}}" class="form-control">
						                  </div>
						                </div>
						            </div>

						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Passport Number:</label>
						                  <div class="input-group">
						                    <input type="text" name="passport_no" value="{{old('passport_no')}}" class="form-control">
						                  </div>
						                </div>
						            </div>
		                             
		                            <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Email Address:</label>
						                  <div class="input-group">
						                    <input type="email" name="email" value="{{old('email')}}" class="form-control">
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

						             <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Address:</label>
						                  <div class="input-group">
						                    <input type="text" name="address" value="{{old('address')}}" class="form-control">
						                  </div>
						                </div>
						            </div>
						          
					    		</div>
			              	</div>        
			          </div>


			         <div class="card card-default" style="border-top: 3px solid #17a2b8 !important;">
			          
			           		
			            	<div class="card-header">
				                <h3 class="card-title">
				                  <i class="fas fa-edit"></i>
				                   Acadamic Information
				                </h3>
			            	</div>
			            	<div class="card-body" >
			            		<input type="hidden" name="total_counter_of_acadamic_rec" id="total_counter_of_acadamic_rec" value="">
			            		
			            	<div id="add_acadamaic_rec">
					            <div class="row">
					            	
				                 	<div class="col-sm-6">
						                <div class="form-group">
						                  <label>Name of Institution:</label>
						                  <div class="input-group">
						                    <input type="text" name="institution_name[]"  value="{{ old('institution_name')[0] }}" class="form-control">
						                  </div>
						                </div>
						            </div>
		                            
		                            <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Degree Title:</label>
						                  <div class="input-group">
						                    <input type="text" name="degree_title[]" value="{{ old('degree_title')[0] }}" class="form-control">
						                  </div>
						                </div>
						            </div>

						            	<div class="col-sm-6">
						                <div class="form-group">
						                  <label>From:</label>
						                  <div class="input-group">
						                    <input type="text" value="{{ old('degree_starting_date')[0] }}" name="degree_starting_date[]"  class="form-control calender_set" >
						                  </div>
						                </div>
						            </div>

						            <div class="col-sm-6">
						                <div class="form-group">
						                  <label>To:</label>
						                  <div class="input-group">
						                    <input type="text" name="degree_ending_date[]" 
						                         class="form-control calender_set" value="{{ old('degree_ending_date')[0] }}">
						                  </div>
						                </div>
						            </div>

						           <div class="col-sm-6">
						            <div class="form-group">
						                  <label>Address:</label>
						                  <div class="input-group">
						                    <input type="text" value="{{ old('acadmic_address')[0] }}"  name="acadmic_address[]" class="form-control">
						                  </div>
						                </div>
						           </div>
		                               
		                           <div class="col-sm-6">
					                <div class="form-group">
					                  <label>Grade / CGPA:</label>
					                  <div class="input-group">
					                    <input type="text" value="{{ old('grades')[0] }}" name="grades[]" class="form-control">
					                  </div>
					                 </div>
					               </div>
		                         		                      
							      <div class="col-sm-6">
									 <div class="form-group">
										<label>Country:</label>
										<select class="form-control" id="acadamic_record_countryIds" name="acadamic_record_countries[]">
										<option value="">Please Select Country</option>
										 @if(!empty($countries))
	                            		  @foreach($countries as $country)
	                            		 <option value="{{$country->id}}">{{$country->name}}</option>
	                            		@endforeach
	                            	     @endif
										 
										</select>
									  </div>
								   </div>

						           <div class="col-sm-6">
									 <div class="form-group">
										<label>State:</label>
										<select class="form-control" id="acadamic_record_stateids" name="acadamic_record_states[]">
										 <option value="">Please Select state</option>	
										</select>
									  </div>
								   </div>

                                   <div class="col-sm-6">
									 <div class="form-group">
										<label>City:</label>
										<select class="form-control" id="acadamic_record_cityIds" name="acadamic_record_cities[]">
										<option value="">Please Select City</option>	
										</select>
									  </div>
								   </div>  

					                <div class="col-sm-6">
						                <div class="form-group">
						                  <label>Upload Ceretificate:</label>
						                  <div class="input-group">
						                    <input type="file" name="upload_ceretificate[]"   class="form-control">
						                  </div>
						                </div>
						            </div>
				                </div>
				            </div>

				                 <button type="button" name="add_acadamaic_rec" id="add_new_acadamic_rec" class="btn btn-success float-right">Add More</button>
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
					      <div id="add_experience_rec">
					         <div class="row">
					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label>Employer Name:</label>
					                  <div class="input-group">
					                     <input type="text" name="employee_name[]" value="{{ old('employee_name')[0] }}" class="form-control">
					                  </div>
					               </div>
					            </div>
					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label>Designation:</label>
					                  <div class="input-group">
					                     <input type="text" value="{{ old('designation')[0] }}" name="designation[]" class="form-control">
					                  </div>
					               </div>
					            </div>
					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label>From:</label>
					                  <div class="input-group">
					                     <input type="text" name="exp_Starting_date[]"  value="{{ old('exp_Starting_date')[0] }}" class="form-control calender_set">
					                  </div>
					               </div>
					            </div>
					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label>To:</label>
					                  <div class="input-group">
					                     <input type="text" value="{{ old('exp_end_date')[0] }}" name="exp_end_date[]"  class="form-control calender_set">
					                  </div>
					               </div>
					            </div>
					            <div class="col-sm-6">
					               <div class="form-group">
					                  <label>Job Description :</label>
					                  <div class="input-group">
					                     <input type="text" value="{{ old('job_description')[0] }}" name="job_description[]" class="form-control">
					                  </div>
					               </div>
					            </div>
					           <div class="col-sm-6">
									 <div class="form-group">
										<label>Country:</label>
										<select class="form-control state" id="certification_CountryIds" name="certification_countries[]">
										<option value="">Please Select Country</option>
										 @if(!empty($countries))
	                            		  @foreach($countries as $country)
	                            		 <option value="{{$country->id}}">{{$country->name}}</option>
	                            		@endforeach
	                            	     @endif
										 
										</select>
									  </div>
								  </div>

						           <div class="col-sm-6">
									 <div class="form-group">
										<label>State:</label>
										<select class="form-control state" id="certification_stateids" 
										name="certification_states[]">
										<option value="">Please Select state</option>	
										</select>
									  </div>
								   </div>  

                                    <div class="col-sm-6">
									 <div class="form-group">
										<label>City:</label>
										<select class="form-control state" id="certification_citIds" 
										name="certification_cities[]">
										<option value="">Please Select City</option>	
										</select>
									  </div>
								   </div>  

					         </div>
					      </div>
					      <button type="button" name="add_experience_rec" id="add_new_experience_rec" class="btn btn-success float-right">Add More</button>
					   </div>
					   
					   <div class="card-footer">
					      <button type="submit" value="Submit" class="btn btn-success float-right">Create</button>
					   </div>
					</div>		          

		           </form>

	          </div>
	        </div>
       	</div>
    </section>
</div>

@endsection

@section('script')
<script type="text/javascript">
	$('document').ready(function() {
	    $('.calender_set').datepicker({
	      autoclose: true
	    });
    });
</script>

<script>
 
 /////////////////// Append Acadmic Info Detail //////////////////////

   $(".add_acadmic").click(function(){
        $(".exp").append(''
                   
                );      
		  });
							
  /////////////////////////////End Acadmic Detail end ///////////////////////

</script>



<script type="text/javascript">
	$('document').ready(function(){
		var i=1;
		$('#add_new_acadamic_rec').click(function(){  
           i++;  
           $('#total_counter_of_acadamic_rec').val(i);
           $('#add_acadamaic_rec').append('<div class="row extrarow_for_acadamic'+i+'"><div class="col-sm-4"></div><div class="col-sm-4 internal_rec"></div><div class="col-sm-4"></div><div class="col-sm-12"><button type="button" name="remove" id="'+i+'" class="btn btn-danger float-right btn_remove">X</button></div><div class="col-sm-6"><div class="form-group"><label>Name of Institution:</label><div class="input-group"><input type="text" name="institution_name[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Degree Title:</label><div class="input-group"><input type="text" name="degree_title[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>From:</label><div class="input-group"><input type="text" name="degree_starting_date[]"  class="hajanDatePicker form-control calender_set" ></div></div></div><div class="col-sm-6"><div class="form-group"><label>To:</label><div class="input-group"><input type="text" name="degree_ending_date[]" class="form-control calender_set"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Address:</label><div class="input-group"><input type="text" name="acadmic_address[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Grade / CGPA:</label><div class="input-group"><input type="text" name="grades[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Country:</label><select class="form-control acad_country" id="acadamic_record_countryId" name="acadamic_record_countries[]"><option value="">Please Select Country</option>@if(!empty($countries)) @foreach($countries as $country)<option value="{{$country->id}}">{{$country->name}}</option>@endforeach @endif</select></div></div><div class="col-sm-6"><div class="form-group"><label>State:</label><select class="form-control acad_state" id="acadamic_record_stateid" name="acadamic_record_states[]"><option value="">Please Select state</option></select></div></div><div class="col-sm-6"><div class="form-group"><label>City:</label><select class="form-control acad_city" id="acadamic_record_cityId" name="acadamic_record_cities[]"><option value="">Please Select City</option></select></div></div><div class="col-sm-6"><div class="form-group"><label>Upload Ceretificate:</label><div class="input-group"><input type="file" name="upload_ceretificate[]"  class="form-control"></div></div></div></div>');

	           $('.calender_set').datepicker({
	      			autoclose: true
	    		});

                /*country start*/
                 
	////////////////////states//////////////////////////

		  	$('#acadamic_record_countryId').change(function(){

				$("#acadamic_record_stateid").empty();
				$("#acadamic_record_stateid").append('<option value="">Please Select State</option>');
				$("#acadamic_record_cityId").empty();
				$("#acadamic_record_cityId").append('<option value="">Please Select City</option>');
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
			              		$('#acadamic_record_stateid').append('<option value= "'+value['id']+'">'+value['name']+'</option>');
			              	});
			              }
			              else{
			              	$("#acadamic_record_stateid").empty();
			              	$("#acadamic_record_stateid").append('<option value="">Please Select State</option>');
			              }			              
			           }
			        });
				}
				else{
					$("#acadamic_record_stateid").empty();
		        	$("#acadamic_record_cityId").empty();
				}
			});

			////////////////////City//////////////////////////
			$('#acadamic_record_stateid'). change(function(){
				
				$("#acadamic_record_cityId").empty();
				$("#acadamic_record_cityId").append('<option value="">Please Select City</option>');
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
			              		$('#acadamic_record_cityId').append('<option value="'+value['id']+'">'+value['name']+'</option>');
			              	});
			              }
			              else{
			              	$("#acadamic_record_cityId").empty();
			              	$("#acadamic_record_cityId").append('<option value="">Please Select City</option>');
			              }	              
			           }
			        });
				}
				 else{
			         $("#acadamic_record_cityId").empty();
			          $("#acadamic_record_cityId").append('<option value="">Please Select City</option>');
				 }
			});
      	}); 

      /*end of country */

      	$(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('.extrarow_for_acadamic'+button_id+'').remove();  
      	}); 
	});
  
  //////////////////////////Experience Starts///////////////////////////////
			var j=1;
			$('#add_new_experience_rec').click(function(){ 
			j++; 
			$('#add_experience_rec').append('<div class="row extrarow_for_experience'+j+'"><div class="col-sm-4"></div><div class="col-sm-4 internal_rec"></div><div class="col-sm-4"></div><div class="col-sm-12"><button type="button" name="remove" id="'+j+'" class="btn btn-danger float-right btn_remove_experience">X</button></div><div class="col-sm-6"><div class="form-group"><label>Employer Name:</label><div class="input-group"><input type="text" name="employee_name[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Designation:</label><div class="input-group"><input type="text" name="designation[]" class="form-control"></div></div></div><div class="col-sm-6"><div class="form-group"><label>From:</label><div class="input-group"><input type="text" name="exp_Starting_date[]" id="experince_from" class="form-control calender_set"></div></div></div><div class="col-sm-6"><div class="form-group"><label>To:</label><div class="input-group"><input type="text" name="exp_end_date[]" id="experince_end" class="form-control calender_set"></div></div></div><div class="col-sm-6"><div class="form-group"><label>Job Description :</label><div class="input-group"><input type="text" name="job_description[]" class="form-control"></div></div></div>     <div class="col-sm-6"><div class="form-group"><label>Country:</label><select class="form-control certification_CountryIds" id="certification_CountryIds" name="certification_countries[]"><option value="">Please Select Country</option> @if(!empty($countries)) @foreach($countries as $country) <option value="{{$country->id}}">{{$country->name}}</option>@endforeach @endif</select></div></div>  <div class="col-sm-6"><div class="form-group"><label>State:</label><select class="form-control certification_stateids" id="certification_stateids" name="certification_states[]"><option value="">Please Select state</option></select></div></div>     <div class="col-sm-6"><div class="form-group"><label>City:</label><select class="form-control certification_citIds" id="certification_citIds" name="certification_cities[]"><option value="">Please Select City</option></select></div></div> '); 

	           $('.calender_set').datepicker({
	      			autoclose: true

	    		});
                
                /*country stat city start*/
                    ////////////////////////////////Certifications Detail Start/////////////////////////////////////////

				////////////////////states//////////////////////////
				$('.certification_CountryIds').change(function(){
					$(".certification_stateids").empty();
					$(".certification_stateids").append('<option value="">Please Select State</option>');
					$(".certification_citIds").empty();
					$(".certification_citIds").append('<option value="">Please Select City</option>');
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
				              		$('.certification_stateids').append('<option value="'+value['id']+'">'+value['name']+'</option>');
				              	});
				              }
				              else{
				              	$(".certification_stateids").empty();
				              	$(".certification_stateids").append('<option value="">Please Select State</option>');
				              }
				              
				           }
				        });

					}
					else{
						$(".certification_stateids").empty();
			        	$(".certification_citIds").empty();
					}
				});

				////////////////////City//////////////////////////
				$('.certification_stateids').change(function(){
					$(".certification_citIds").empty();
					$(".certification_citIds").append('<option value="">Please Select City</option>');
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
				              		$('.certification_citIds').append('<option value="'+value['id']+'">'+value['name']+'</option>');
				              	});
				              }
				              else{
				              	$(".certification_citIds").empty();
				              	$(".certification_citIds").append('<option value="">Please Select City</option>');

				              }
				              
				           }
				        });

					}
					else{
			        	$(".acadamic_record_cityIds").empty();
			        	$(".acadamic_record_cityIds").append('<option value="">Please Select City</option>');
					}
				});
                /*country state city end*/ 

			}); 

			$(document).on('click', '.btn_remove_experience', function(){ 
			var button_id = $(this).attr("id"); 
			$('.extrarow_for_experience'+button_id+'').remove(); 
		});
//////////////////////////Experience Ends///////////////////////////////

</script>




{{-- country,state,city code start--}}	
<script type="text/javascript">

   	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
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
	$('#acadamic_record_countryIds').change(function(){
		$("#acadamic_record_stateids").empty();
		$("#acadamic_record_stateids").append('<option value="">Please Select State</option>');
		$("#acadamic_record_cityIds").empty();
		$("#acadamic_record_cityIds").append('<option value="">Please Select City</option>');
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
	              		$('#acadamic_record_stateids').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$("#acadamic_record_stateids").empty();
	              	$("#acadamic_record_stateids").append('<option value="">Please Select State</option>');
	              }
	              
	           }
	        });

		}
		else{
			$("#acadamic_record_stateids").empty();
        	$("#acadamic_record_cityIds").empty();
		}
	});

	////////////////////City//////////////////////////
	
		$('#acadamic_record_stateids').on('change', function() {

		$("#acadamic_record_cityIds").empty();
		$("#acadamic_record_cityIds").append('<option value="">Please Select City</option>');
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
	              		$('#acadamic_record_cityIds').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$("#acadamic_record_cityIds").empty();
	              	$("#acadamic_record_cityIds").append('<option value="">Please Select City</option>');
	              }	              
	           }
	        });

		}
		else{
        	$("#acadamic_record_cityIds").empty();
        	$("#acadamic_record_cityIds").append('<option value="">Please Select City</option>');
		}
	});

$('#acadamic_record_stateid').on('change', function() {
	
		alert('shs');
		$("#acadamic_record_cityId").empty();
		$("#acadamic_record_cityId").append('<option value="">Please Select City</option>');
		var state_ide=$(this).val(); 
		if(state_id){
			
			$.ajax({
	           type:'GET',
	           url:"{{url('get_cities_of_states')}}?state_id="+state_ide,
	           // data:{name:name, password:password, email:email},
	           success:function(data){
	              console.log(data);
	              if(data){
	              	$.each(data, function(key, value){
	              		$('#acadamic_record_cityId').append('<option value="'+value['id']+'">'+value['name']+'</option>');
	              	});
	              }
	              else{
	              	$("#acadamic_record_cityId").empty();
	              	$("#acadamic_record_cityId").append('<option value="">Please Select City</option>');
	              }	              
	           }
	        });

		}
		else{
        	$("#acadamic_record_cityId").empty();
        	$("#acadamic_record_cityId").append('<option value="">Please Select City</option>');
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