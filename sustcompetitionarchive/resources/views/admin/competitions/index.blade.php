@extends('admin.layouts.master')

@section('pagetitle')
    Event List
@endsection

@section('body')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">My Events</h1>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($competitions as $competition)
                                        <tr class="odd gradeX">
                                            <td>
                                                <a href="{{ url('user/competitions/'.$competition->id) }}">
                                                    {{ $competition->title }}
                                                </a>
                                                </td>
                                            <td>{{ $competition->start_time }}</td>
                                            <td>{{ $competition->end_time }}</td>
                                            <td class="center">{{ $competition->type }}</td>
                                            <td>
                                                <a href="{{ url('user/competitions/'.$competition->id.'/edit') }}">
                                                    <button type="button" class="btn btn-sm btn-primary"> Update </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection