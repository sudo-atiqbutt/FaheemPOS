@extends('admin.layout.master')

@section('css')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection
@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Jobs</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i> Home</a></li>
						<li class="breadcrumb-item active">Jobs</li>
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
								<i class="fas fa-edit"></i>
								All Pages
								<a href="{{route('jobs.create')}}"><button type="button" class="btn btn-success float-right">Add New</button></a>
							</h3>

						</div>

						<div class="card-body">
							<table id="content_page_datatable" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Id</th>
										<th>Rec Company Name</th>
										<th>Job Title</th>
										<th>Salary</th>
										<th>Contract Start From</th>
										<th>End To</th>
										{{-- <th>No. of candidates required</th> --}}
										<th>Action</th>
									</tr>
								</thead>
								<tbody class="link_btn">
									@foreach($jobs as $job)
									<tr>
										<td>{{$job->id}}</td>
										<td>{{$job->recruitment_company_name}}</td>			 <td>{{$job->job_title}}</td>
										<td>{{$job->salary}}</td>
										<td>{{$job->contract_period_start}}</td>
										<td>{{$job->contract_period_end}}</td>
										{{-- <td>{{$job->no_of_candidates_required}}</td> --}}
										<td><a href="{{url('/jobs/'.$job->id.'/edit')}}"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>
											<a href="javascript:;" data-toggle="modal" onclick="deleteData({{$job->id}})" 
												data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
												<a class="btn btn-primary btn-md viewjob" href="javascript:;" onclick="viewJob({{$job->id}})"><i class="fas fa-eye"></i></i></a> 
											</td>
										</tr>
										@endforeach
									</tbody>
									<tfoot>
										<th>Id</th>
										<th>Company Name</th>
										<th>Job Title</th>
										<th>Salary</th>
										<th>Contract Start From</th>
										<th>End To</th>
										{{-- <th>No. of candidates required</th> --}}
										<th>Action</th>
									</tfoot>
								</table>
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

<script type="text/javascript">
	function deleteData(id)
	{
		var id = id;
		var url = '{{ route("jobs.destroy", ":id") }}';
		url = url.replace(':id', id);
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

	function viewJob(id){
		$.ajax({
			type:"GET",
			url: "{{ url('viewjob') }}?id="+id,
			dataType: "JSON",
			success:function(data){
				if(data){

					$('#jobs_company_name').html(data[0].company_name);
					$('#recruitment_company_name').html(data[0].jobs.recruitment_company_name);
					$('#job_title').html(data[0].jobs.job_title);
					$('#salary').html(data[0].jobs.salary);
					$('#contract_period_start').html(data[0].jobs.contract_period_start);
					$('#contract_period_end').html(data[0].jobs.contract_period_end);
					$('#visa_number').html(data[0].jobs.visa_number);
					$('#number_candidates').html(data[0].jobs.no_of_candidates_required);
					$('#uploaded_files').html('');

					$.each(data[0].files, function(key, value){

						$('#uploaded_files').append('<a href="{{ URL::to('/') }}/uploads/admin/jobs/'+value+'"><i class="fas fa-file"></i>&nbsp;&nbsp;&nbsp;File '+(key+1)+'</a>');
					});

					$('#job_description').html(data[0].jobs.job_description);
					$('#modal-view-job').modal('show');
				}
			}
		});
	}

</script>

@endsection