@extends('admin.layouts.master')

@section('pagetitle')
    Departments List
@endsection

@section('body')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Departments</h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Department ID</th>
                                        <th>Department Short Name</th>
                                        <th>Department Full Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @forelse($departments as $department)

                                        <tr>
                                            <td>{{ $department->id }}</td>
                                            <td>{{ $department->short_name }}</td>
                                            <td>{{ $department->full_name }}</td>
                                            <td>
                                                <a href="{{ url('admin/department/'.$department->id.'/edit') }}">
                                                <button class="btn btn-xs btn-primary">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                    Edit
                                                </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                            No Department Found
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Kitchen Sink -->
                </div>

            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection