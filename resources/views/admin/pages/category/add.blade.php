@extends('admin.layout.master')
@section('title')
       <div class="page-title">
                <div class="container">
                    <div class="row">
                        <div class="page-title-left">
                            <h6 class="page-title-heading mr-0 mr-r-5">Add Category</h6>
                          
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
                        <div class="col-md-1"></div>
                        <div class="col-md-9 widget-holder">
                            <div class="widget-bg">
                                <div class="widget-body clearfix">
                                  
                                   
                                    <form action="{{route('category.store')}}" name="Category" method="post">
                                        <div class="form-group row">
                                            <label class="text-left text-sm-right col-form-label col-sm-3">Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="name" class="form-control" required="">
                                            </div>
                                            <!-- /.col-sm-9 -->
                                        </div>
                                        <!-- /.form-group -->
                                     @csrf
                                     
                                        
                                        <div class="form-group row">
                                            <label class="text-left text-sm-right col-form-label col-sm-3">Remarks</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" name="remarks"></textarea>
                                            </div>
                                            <!-- /.col-sm-9 -->
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="ml-auto col-sm-9 no-padding">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            <button class="btn btn-default" type="reset">Reset</button>
                                        </div>
                                        <!-- /.col-sm-9 -->
                                    </form>
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
            <!-- /.container -->
            @endsection