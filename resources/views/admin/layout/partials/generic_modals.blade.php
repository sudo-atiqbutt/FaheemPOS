<style type="text/css">
  span{
    font-weight: normal !important;
  }
  label{
    margin-bottom: 5px;
  }
  .modal-header{
    background-color: #17a2b8; 
    border: 1px solid #17a2b8;
    border-radius: none; 
    color: #fff;
  }
  .close button{
    color: #fff; 
    text-shadow: none; 
    opacity: 1;
  }
  #uploaded_files a
  {
    display: block;
    text-decoration: none;
    color: #17a2b8 !important;
    margin-bottom: 5px;
    max-width: 70px;
  }
  #uploaded_files a:hover{
    border-bottom: 1px solid #17a2b8;
    max-width: 70px;
  }
</style>

 <div id="candidate_profile__id"></div>


{{-- /////////////Company Modal Starts//////////// --}}
<div class="modal fade" id="view_company_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="">
        <h4 class="modal-title">Company Detail</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">

          <div class="col-sm-4">
            <div class="form-group">
              <label>Company Name:</label>
              <div><span id="company_name"></span></div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Primary Phone No:</label>
              <div><span id="primary_phone_no"></span></div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Secondary Phone No:</label>
              <div><span id="secondary_phone_no"></span></div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Fax No:</label>
              <div><span id="fax_no"></span></div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Country:</label>
              <div><span id="country"></span></div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>State:</label>
              <div><span id="state"></span></div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>City:</label>
              <div><span id="city"></span></div>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="form-group">
              <label>Postal Code:</label>
              <div><span id="postal_code"></span></div>
            </div>
          </div>
          
          <div class="col-sm-4">
            <div class="form-group">
              <label>Address:</label>
              <div><span id="address"></span></div>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
{{-- /////////////Company Modal Ends//////////// --}}


<!-- Modal HTML View Job-->
<div class="modal fade" id="modal-view-job">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Job Detail</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- info row -->
       <div class="row invoice-info">

        <div class="col-sm-3 invoice-col">
          <address>
            <strong>Company Name:</strong><br>
            <span id="jobs_company_name"></span>
          </address>
        </div>
        <div class="col-sm-3 invoice-col">
          <address>
            <strong>Recruitment Company Name:</strong><br>
            <span id="recruitment_company_name"></span>
          </address>
        </div>
        <div class="col-sm-3 invoice-col">
          <address>
            <strong>Job Title</strong><br>
            <span id="job_title"></span>
          </address>
        </div>
        <div class="col-sm-3 invoice-col">
          <address>
            <strong>Salary:</strong><br>
            <span id="salary"></span>
          </address>
        </div>
      </div>
      <!-- /.row -->

      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-3 invoice-col">
          <address>
            <strong>Contract Start From:</strong><br>
            <span id="contract_period_start"></span>
          </address>
        </div>
        <div class="col-sm-3 invoice-col">
          <address>
            <strong>End To:</strong><br>
            <span id="contract_period_end"></span>
          </address>
        </div>
        <div class="col-sm-3 invoice-col">
          <address>
            <strong>Visa Number:</strong><br>
            <span id="visa_number"></span>
          </address>
        </div>
        <div class="col-sm-3 invoice-col">
          <address>
            <strong>Candidates Number:</strong><br>
            <span id="number_candidates"></span>
          </address>
        </div>
      </div>
      <!-- /.row -->

      <!-- info row -->
      <div class="row invoice-info">
       <div class="col-sm-12 invoice-col">
        <address class="file">
          <strong>Upload Files:</strong><br>
          <div id="uploaded_files"></div>
        </address>
        </div>
      </div>
    <!-- /.row -->

    <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">
          <address>
            <strong>Description:</strong><br>
            <span id="job_description"></span>
          </address>
        </div>
      </div>
    <!-- /.row -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
<!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<!-- Modal HTML View Job -->


<!-- Modal HTML Delete Job -->
<div id="DeleteModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <form action="" id="deleteForm" method="post">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="modal-content">
        <div class="modal-header">
          <div class="icon-box">
            <i class="material-icons">&#xE5CD;</i>
          </div>        
          <h4 class="modal-title">Are you sure?</h4>  
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          
          <p id="confirmation_message">Do you really want to delete this job?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" onclick="formSubmit()">Delete</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Modal HTML Delete Job -->

<!-- Terms And Conditions Job Model -->
<div class="modal fade" id="modal_job_term_condition">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"> Terms and Conditions</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>The materials, products and services provided to you on this website are provided on an "as-is" basis, without warranty of any kind, whether expressed or implied.LUNA Corporation assumes no responsibility for the accuracy,completeness, reliability or timeliness of the information provided by this web site. You understand and expressly agree to use this website at your sole risk, that any material and/or data downloaded or otherwise obtained through the use of this website is at your own discretion and risk and that you will be solely responsible for any damage to your computer system or loss of data that results from the download of such material and/or data.Except as expressly set forth on this website,LUNA Corporation disclaims all warranties of any kind,express or implied, including without limitation any warranty of merchantability, fitness for a particular purpose or non-infringement and it makes no warranty or representation regarding the accuracy or reliability of any information obtained through LUNA Corporation's services, regarding any goods or services purchased or obtained through LUNA Corporation's services, regarding any transactions entered into through LUNA Corporation's services or that LUNA Corporation's services will meet any user's requirements, be uninterrupted, timely, secure or error free.Applicable law may not allow the exclusion of implied warranties, so the exclusion may not apply to you.LUNA Corporation will not be liable for any direct,indirect, incidental, special, consequential or punitive damages of any kind resulting from the use of or the inability to use LUNA Corporation's services, resulting from any goods or services purchased or obtained or messages received or transactions entered into through LUNA Corporation's services, resulting from loss of, unauthorized access to or alteration of a user's transmissions or data or for the cost of procurement of substitute goods and services, including but not limited to damages for loss of profits, use, data or other intangibles, even if LUNA Corporation had been advised of the possibility of such damages.LUNA Corporation will not sell, rent or share your email or other information with any third party. We disclose limited information to our affiliates (companies and individuals we employ to perform functions on our behalf), but they may not share that information with any other third party.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->
<!-- Terms And Conditions Job Model -->


{{-- /////////////Candidates  Modal Starts//////////// --}}
<div id="whitecollar_candidate_modal_id"></div>
{{-- /////////////Candidates  Modal Ends//////////// --}}

 
<!-- Modal HTML Add New Degree-->
<div class="modal fade" id="degreeAddnewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form method="post" id="AddDegree">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Degree</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" style="display:none"></div>
          <div class="form-group">
            <label for="degree_name" class="col-form-label">Degree Name:</label>
            <input type="text" class="form-control" id="add_degree_name" name="degree_name" >
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submit_degree">Add</button>
      </div>
    </div>
  </form>
  </div>
</div>
<!-- Modal HTML Add New Degree-->


<!-- Modal HTML Edit Degree-->
<div class="modal fade" id="degreeEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form method="POST" id="editModel">
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Degree</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" style="display:none"></div>
          <div class="form-group">
            <label for="degree_name" class="col-form-label">Degree Name:</label>
            <input type="text" class="form-control" id="degree_name_update" name="degree_name_edit" value="">
            <input type="hidden" name="degree_id_update_" id="degree_id_update" value="">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="update_degree">Update</button>
      </div>
    </div>
</form>
  </div>
</div>
<!-- Modal HTML Edit Degree-->
