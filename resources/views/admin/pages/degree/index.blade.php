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
					<h1 class="m-0 text-dark">Degrees</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-tachometer-alt"></i> Home</a></li>
						<li class="breadcrumb-item active">Degrees</li>
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
					@if ($message = Session::get('message'))
					<div class="alert alert-success alert-block" id="msg">
						<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>{{ $message }}</strong>
					</div>
					@endif
					<div class="alert alert-success" style="display: none;"></div>
					<div class="card card-default" style="border-top: 3px solid #17a2b8 !important;">
						<div class="card-header">
							<h3 class="card-title">
								<i class="fas fa-edit"></i>
								All Degrees
								{{-- <a href=""><button type="button" class="btn btn-success float-right">Add New</button></a> --}}
								<button type="button" class="btn btn-success float-right"  onclick="open_degreemodal()">Add New</button>
							</h3>

						</div>
						<div class="card-body">
							<table id="content_page_datatable" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Id</th>
										<th>Degree Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody class="link_btn">
									@foreach($degrees as $degree)
									<tr>
										<td>{{$degree->id}}</td>
										<td>{{$degree->degree_name}}</td>
										<td><a href="javascript:;" onclick="editdegreeModel({{$degree->id}})"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>
											<a href="javascript:;" data-toggle="modal" onclick="deleteDegree({{$degree->id}})" 
												data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a> 
											</td>
										</tr>
										@endforeach
									</tbody>
									<tfoot>
										<th>Id</th>
										<th>Degree Name</th>
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
		});


	function open_degreemodal(){
		$("#add-error-bag").hide();
		$('#degreeAddnewModal').modal('show');
	}
	
	$.ajaxSetup({
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
	});
{{--Degree Add Ajax--}}
		$("#submit_degree").click(function(event){
            $.ajax({
            	type:"POST",
            	url:"{{route('degree.store')}}",
            	data:{degree_name : $('#add_degree_name').val()},
            	dataType: "json",
            	success: function(data){
            		// console.log(data);
            		if(data.success) {
		              window.location.reload(true);

		            }else{
		                $('.alert-danger').html('');

                  		$.each(data.errors, function(key, value){
                  			$('.alert-danger').show();
                  			$('.alert-danger').append('<li>'+value+'</li>');
                  		});
		            }
            	}
            });
		});
{{--Degree Add Ajax--}}
</script>

<script type="text/javascript">
	{{--Degree Edit Ajax--}}
	function editdegreeModel(id){
		var id = id;
		var degree_url = "{{ route("degree.edit", ":id") }}";
		degree_url = degree_url.replace(':id', id);
		$.ajax({
			type:"GET",
			url:degree_url,
			data:{id:id},
			success: function(data){
				console.log(data);
				$('#degreeEditModal').modal('show');
				$('#degree_id_update').val(data.id);
				$('#degree_name_update').val(data.degree_name);
			}
		});		
	}

	$('#update_degree').click(function(){
		var id = $('#degree_id_update').val();
		var degree_url = "{{route("degree.update", ":id")}}";
		degree_url = degree_url.replace(':id',id);

		$.ajax({
			type:'PUT',
        	url:degree_url,
        	data:{id:id,degree_name_edit:$("#degree_name_update").val()},
        	dataType: 'json',
			success: function(data){
				if(data.success){
					window.location.reload(true);
				}else{
					$('.alert-danger').html('');

                  	$.each(data.errors, function(key, value){
                  			$('.alert-danger').show();
                  			$('.alert-danger').append('<li>'+value+'</li>');
                  	});
				}
			}
		});
	});
	{{--Degree Edit Ajax--}}

	{{--Degree Delete Ajax--}}
	function deleteDegree(id){
		var id = id;
		var url = '{{route("degree.destroy",":id")}}';
		degree_url = url.replace(':id',id);
		$('#deleteForm').attr('action',degree_url);
		$('#confirmation_message').html('Do you really want to delete this degree?');
	}
	function formSubmit(){
		$('#deleteForm').submit();
	}
	{{--Degree Delete Ajax--}}
</script>
@endsection