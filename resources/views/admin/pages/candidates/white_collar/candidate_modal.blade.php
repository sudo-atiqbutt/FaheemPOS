<style type="text/css">
.section_header h4{
    color: #17a2b8;
    font-weight: 600;
    border-bottom: 1px solid #17a2b8;
    padding-bottom: 10px;
    margin-bottom: 20px;
}
</style>


{{-- /////////////Candidate Modal Starts//////////// --}}

{{-- @php 
 echo "<pre>";
  print_r($json_Data);
  die();
@endphp --}}

<div class="modal fade" id="candidate_profile_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-full" role="document">
      <div class="modal-content">
         <div class="modal-body">
     @foreach($json_Data as $white_condidate)
       
       <div class="wrapper">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <div class="sidebar-wrapper">
   
       
        <div class="profile-container">
                <img class="profile" src="{{asset('admin/dist/img/download.jpg')}}" alt=""/>
                <h1 class="name" name="fname" >{{$white_condidate['first_name']}}</h1>
                <h3 class="tagline">WhiteCollar Condidate</h3>
            </div>            
            <div class="contact-container container-block">
              <ul class="list-unstyled contact-list">
                        <li class="email" ><i class="fa fa-envelope"></i><a href="mailto: yourname@email.com">{{$white_condidate['email']}} </a></li>

                        <li class="phone"><i class="fa fa-phone"></i><a href="tel:0123 456 789" > </a>{{$white_condidate['contact_no']}}</li>

                        <li class="website" ><i class="fas fa-user"></i><a href="" target="_blank" > </a>{{$white_condidate['father_name']}}</li>
                      
                         <li class="website" ><i class="fas fa-pray"></i><a href="" target="_blank" > </a>{{$white_condidate['religion']}}</li>

                        <li class="date"><i class="far fa-calendar-alt"></i><a href="" id="dob"> </a>{{$white_condidate['dob']}}</li>

                        <li class="idcard"><i class="fas fa-id-card"></i><a href="">{{$white_condidate['cnic']}}</li>
                        
                        <li class="idcard"><i class="fas fa-passport"></i><a href=""> </a>{{$white_condidate['passport_no']}}</li>
                      
                        <li class="idcard"><i class="fas fa-address-card"></i><a href="">{{$white_condidate['address']}} </a> </li>
                        

                        @php 

                  $countryid=$white_condidate['country'];
                  $stateid=$white_condidate['state'];
                  $cityid=$white_condidate['city'];
                  $city=CustomHelper::get_cities__byCustom($id=$cityid);
                  $state=CustomHelper::get_state__byCustom($id=$stateid);
                  $country=CustomHelper::get_countries__byCustom($id=$countryid);

                    @endphp

              <li class="idcard"><i class="fa fa-globe"></i><a href="">{{$country[0]->name}}</a></li>
              <li class="idcard"><i class="fa fa-location-arrow"></i>{{$state[0]->name}}<a href="">  </a></li>
              <li class="idcard"><i class="fa fa-map-marker"></i><a href="">{{$city[0]->name}}</a></li>

{{-- @php 
$resu=CustomHelper::get_cities__byCustom($id);
echo $resu[0]->name;
@endphp  --}}   
                        
                        
                        
                     </ul>
             </div>
        
            
        </div>
        
        <div class="main-wrapper">
        
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa fa-briefcase"></i></span>Acadamic Records</h2>
               {{-- @php
                 echo "<pre>";
                 print_r($json_Data);
                 die();
               @endphp --}}
                    
               @foreach($white_condidate['acadamic_record'] as $key => 
                        $acadamic_record)
                        <div class="item">
                            <div class="meta">
                                <div class="upper-row">
                                    <h3 class="job-title">{{$acadamic_record['institution_name']}}</h3>

                                    <div class="time">From - {{$acadamic_record['degree_start_from']}} | To - {{$acadamic_record['degree_end_to']}}  </div>
                                </div>
                                <div class="company">

                                 @if(!empty($all_states))
                                    @foreach($all_states as $state)
                                      @if($acadamic_record['state']==$state->id) {{$state->name}} @endif
                                    @endforeach
                                   @endif
                                 </div>
                            </div>
                            <div class="details">
                                <div class="row">
                                    <div class="col-6">
                                    <div class="contact-container container-block">
                        <ul class="list-unstyled contact-list cert_list">
                            <li class="email"><a href="mailto: yourname@email.com" class="text-black-50">
                                <i class="fa fa-graduation-cap"></i> Grade/CGPA: <strong>{{$acadamic_record['grades']}}</strong></a>
                            </li>
                            <li class="email"><a href="#" class="text-black-50">
                        @php 

                            $countryid=$acadamic_record['country'];
                            $stateid=$acadamic_record['state'];
                            $cityid=$acadamic_record['city'];
                            $city=CustomHelper::get_cities__byCustom($id=$cityid);
                            $state=CustomHelper::get_state__byCustom($id=$stateid);
                            $country=CustomHelper::get_countries__byCustom($id=$countryid);
                        @endphp


                                <i class="fa fa-globe"></i> Country: <strong> 
                                 @if(!empty($country))
                                 {{$country[0]->name}}
                                 @endif
                                 </strong></a>
                            </li>
                            <li class="email"><a href="#" class="text-black-50">
                                <i class="fa fa-location-arrow"></i> State: <strong>
                                  @if(!empty($state))
                                    {{$state[0]->name}}
                                  @endif
                                </strong></a>
                            </li>
                            <li class="email"><a href="#" class="text-black-50">
                                <i class="fa fa-map-marker"></i> City: <strong>
                                   @if(!empty($city))
                                    {{$city[0]->name}}
                                  @endif
                                </strong></a>
                            </li>
                            <li class="email"><a href="#" class="text-black-50">
                                <i class="fa fa-thumb-tack"></i> Address: <strong>{{$acadamic_record['address']}}</strong></a>
                            </li>
                        </ul>
                    </div>
                   </div>
                      <div class="col-6">
                        <div class="certificate_img">   
                       @if(!empty($acadamic_record['upload_ceretificate']))                   
                           <img src="{{ URL::to('/') }}/uploads/admin/candidate_images/certificate_images/{{$acadamic_record['upload_ceretificate']}}" class="d-block mx-auto img-fluid" alt="">
                         </div>
                          @else
                          <div class="certificate_img">   
                            <img src="{{asset('admin/dist/img/default-150x150.png')}}" class="d-block mx-auto img-fluid"  alt="">
                             </div>
                         @endif
                       </div>
                    </div>
                 </div>               
             </div>
         @endforeach 

            
                
            </section>
            
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa fa-briefcase"></i></span>Experiences</h2>

           @foreach($white_condidate['experience'] as $key => 
                      $experiences)  
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{$experiences['employer_name']}}</h3>
                            <div class="time">From - {{$experiences['experience_starts_from']}} | To - {{$experiences['experience_end_to']}}</div>
                        </div>
                        <div class="company">
                              @if(!empty($countries))
                                    @foreach($countries as $country)
                                      @if($experiences['country']==$country->id) {{$country->name}} @endif
                                    @endforeach
                                   @endif, @if(!empty($all_states))
                                    @foreach($all_states as $state)
                                      @if($experiences['state']==$state->id) {{$state->name}} @endif
                                    @endforeach
                                   @endif
                           </div>
                    </div>
                    <div class="details">
                        <div class="row">
                            <div class="col-12">
                                <div class="contact-container container-block">
                                    <h3 class="job-title mb-2">Job Description:</h3>
                                    <div class="summary">
                                        <p>{{$experiences['designation']}}</p>
                                    </div>
                                         <ul class="list-unstyled contact-list cert_list">
                                        <li class="email"><a href="mailto: yourname@email.com" class="text-black-50">
                                        @php

                                            $countryid=$experiences['country'];
                                            $stateid=$experiences['state'];
                                            $cityid=$experiences['city'];
                                            $city=CustomHelper::get_cities__byCustom($id=$cityid);
                                            $state=CustomHelper::get_state__byCustom($id=$stateid);
                                            $country=CustomHelper::get_countries__byCustom($id=$countryid);
                                        
                                        @endphp

                                            <i class="fa fa-globe"></i> Country: <strong>  
                                              @if(!empty($country))
                                 {{$country[0]->name}}
                                 @endif
                                          
                                       </strong></a>
                                        </li>
                                        <li class="email"><a href="mailto: yourname@email.com" class="text-black-50">
                                            <i class="fa fa-location-arrow"></i> State: <strong>
                                            
                                               @if(!empty($state))
                                 {{$state[0]->name}}
                                            @endif
                                          </strong></a>
                                        </li>
                                        <li class="email"><a href="mailto: yourname@email.com" class="text-black-50">
                                            <i class="fa fa-map-marker"></i> City: <strong>  
                                                @if(!empty($city))
                                 {{$city[0]->name}}
                                  @endif
                                      </strong></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           @endforeach 
                 
       </section>
   
            
        </div>
    </div>
    @endforeach
   
            <!--
               <p class="mb-0">
               <input id="upload" type="file" 
               class="filepond"
               name="filepond"
               multiple
               data-max-file-size="3MB"
               data-max-files="3" />
               </p>
               -->
         </div>
      </div>
   </div>
</div>
{{-- /////////////Candidate Modal Ends//////////// --}}
