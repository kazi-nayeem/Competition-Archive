@extends('admin.layouts.master')

@section('pagetitle')
    Update Department
@endsection

@section('body')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Update Department</h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-10 col-sm-6 col-xs-12 col-md-offset-1">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Enter Department Information
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ url('admin/department/'.$department->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="full_name">Enter Full Name</label>
                                    <input id="full_name" class="form-control" type="text" name="full_name" value="{{ $department->full_name }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="short_name">Enter Short Name</label>
                                    <input id="short_name" class="form-control" type="text" name="short_name" value="{{ $department->short_name }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="id">Department ID</label>
                                    <input id="id" class="form-control" type="number" name="id" value="{{ $department->id }}" disabled>
                                </div>

                                <button type="submit" class="btn btn-info">Update</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection