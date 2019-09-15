@extends('admin.layout.master')

@section('css')
<style type="text/css">
	.link_btn td a {
	    float: left;
	    margin-right: 5px;
	}
	.link_btn td img {
	    max-width: 70px;
	    max-height: 70px;
	}
</style>
<link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('admin/dist/css/candidate_modal.css')}}">
@endsection

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	  <div class="container-fluid">
	    <div class="row mb-2">
	      <div class="col-sm-6">
	        <h1 class="m-0 text-dark">Condidates</h1>
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
	          
				@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
					        <strong>{{ $message }}</strong>
					</div>
				@endif
				@if ($message = Session::get('Delsuccess'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
					        <strong>{{ $message }}</strong>
					</div>
				@endif
             


	           <div class="card card-default" style="border-top: 3px solid #17a2b8 !important;">
	            	<div class="card-header">
		                <h3 class="card-title">
		                  <i class="fas fa-edit"></i>
		                    White Collar Candidates
		                  <a href="{{route('candidate.create') }}"><button type="button" class="btn btn-success float-right">Add New</button></a>
		                </h3>

	            	</div>

	          
	            	<div class="card-body">
	            		<table id="content_page_datatable" class="table table-bordered table-striped">
			                <thead>
			                <tr>
			                  <th>Id</th>
			                  <th>Name</th>
			                  <th>Email</th>
			                  <th>Candidate Type</th>
			                  
			                  
			                  {{-- <th>Job Description</th> --}}
			                  <th>Action</th>
			                </tr>
			                </thead>
			                <tbody class="link_btn">
			                	
			                	@foreach($white_condidates as  $no => $white_condidate)
			                	<tr>
			                	  <td>{{$no+1}}</td>
				                  <td>{{$white_condidate->first_name}} {{$white_condidate->last_name}}</td>	
				                  <td>{{$white_condidate->email}}</td>
				                  <td>{{$white_condidate->candidate_type}}</td>
				                  {{-- <td>{{$white_condidate->experience->job_description}}</td> --}}


				                  <td><a href="{{ route('candidate.edit',$white_condidate->id)}}" class="btn btn-xs btn-success"><i class="fas fa-edit"></i></a>

				                  <form  action="{{route('candidate.destroy',
				                   $white_condidate->id) }}" method="POST"  onSubmit="return confirm('Are You Sure To Delete This Candidate? {{ $white_condidate->first_name }}')">
					                  	<input type="hidden" name="_method" value="DELETE">
		           						<input type="hidden" name="_token" value="{{csrf_token()}}"> <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

		           						<a href="JavaScript:Void(0);" class="btn btn-xs btn-primary" onclick="showcandidate_detail({{$white_condidate->id}})"><i class="fas fa-eye"></i></a>
				                  </form> 

				               </td>

			                	</tr>
			                	@endforeach
			                </tbody>
			                <tfoot>
				                <tr>
				                  	  <th>Id</th>
					                  <th>First Name</th>
					                  <th>Email</th>
					                  <th>Candidate Type</th>
					                {{-- <th>Job Description</th> --}}
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
    
   $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

  ////////////////////////////Data table use

	  $(function () {
	    $('#content_page_datatable').DataTable();
	  });

//////////////////////// white candidates modal show here ////////////////

function showcandidate_detail(id)
 {   
 	var $id = $(this).val(id);
     //alert(id); return false;
		 $.ajax({
				type:'GET',
				url:"{{url('view_candidate')}}?id="+id,
				dataType: "json",
				success:function(data){
                   	// console.log(data); return false;
                   $('#candidate_profile__id').html(data.candidates_modal)
                   $('#candidate_profile_').modal('show');
                   //console.log(data); return false ;
       
				   }
			   });
       }
     
   //////////////////////////////

	</script>
@endsection

