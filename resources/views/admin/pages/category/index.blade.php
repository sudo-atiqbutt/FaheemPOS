@extends('admin.layout.master')
@section('title')
       <div class="page-title">
                <div class="container">
                    <div class="row">
                        <div class="page-title-left">
                            <h6 class="page-title-heading mr-0 mr-r-5">Category List</h6>
                          
                        </div>
                        <!-- /.page-title-left -->
                        <div class="page-title-right d-none d-sm-inline-flex align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Category</li>
                            </ol>
                        </div>
                        <!-- /.page-title-right -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
@endsection
@section('content')

 <div class="container">
                <div class="widget-list">
                    <div class="row">
                        <div class="col-md-12 widget-holder">
                        	@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
					        <strong>{{ $message }}</strong>
					</div>
				@endif
                            <div class="widget-bg">
                                <div class="widget-heading clearfix">
                                    <h5>Categories View</h5>
                                     <a href="{{route('category.create')}}"><button type="button" class="btn btn-success float-right">Add New</button></a>
                                </div>
                                <!-- /.widget-heading -->
                                <div class="widget-body clearfix">
                                 
                                    <table class="tablesaw color-table table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch data-toggle="datatables" data-plugin-options='{"searching": false}'>
                                    	
                                        <thead>
                                            <tr class="bg-primary">
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Name</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Remarks</th>
                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($data as $val)
                                            <tr>
                                                <td class="title">{{$val->name}}</td>
                                                <td>{{$val->remarks}}</td>
                                                <td><a href="{{route('category.edit',$val->id)}}" class="content-color"><i class="lnr lnr-cog md-18"></i></a>
                                                	<a href="javascript:;" data-toggle="modal" onclick="deleteData({{$val->id}})" 
												data-target="#DeleteModal" class="lnr lnr-trash md-18"></a>
                                                </td>
                                            </tr>
                                           
											@endforeach                                          
                                           
                                          
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.widget-body -->
                            </div>
                            <!-- /.widget-bg -->
                        </div>
                        <!-- /.widget-holder -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.widget-list -->
            </div>

@endsection


	@section('script')
	
<script type="text/javascript">
	function deleteData(id)
	{
		var id = id;
		var url = '{{ route("category.destroy", ":id") }}';
		url = url.replace(':id', id);
		$("#deleteForm").attr('action', url);
	}
	function formSubmit()
	{
		$("#deleteForm").submit();
	}
</script>

@endsection