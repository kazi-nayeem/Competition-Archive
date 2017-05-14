@extends('admin.layouts.master')

@section('pagetitle')
    Event
@endsection

@section('body')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">
                        <div class="col-md-11">
                            Event Details
                        </div>

                        <form action="{{ url('user/competitions/'.$competition->id) }}" method="post" id="delete">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </h1>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3> <strong>Title: </strong> &nbsp; {{ $competition->title }}</h3>
                                <h3> <strong>Department: </strong> &nbsp; {{\App\Department::findOrFail($competition->department_id)->full_name}}</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3> <strong>Start Date: </strong> &nbsp; {{$competition->start_time}} </h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3> <strong>End Date: </strong> &nbsp; {{$competition->end_time}}</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3> <strong>Status: </strong> &nbsp;{{ $competition->getStatus() }} </h3>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ url('user/competitions/'.$competition->id.'/edit') }}">
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4><strong>Description</strong></h4>
                                            </div>
                                            <div class="panel-body">
                                                <p>{{ $competition->description }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4><strong>Competitions</strong></h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>No. Of Participants</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($events as $event)
                                                    <tr class="odd gradeX">
                                                        <td>
                                                            <a href="{{ url('user/events/'.$event->id) }}">
                                                                {{ $event->title }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $event->start_time }}</td>
                                                        <td>{{ $event->end_time }}</td>
                                                        <td class="center">{{ $event->number_of_participants }}</td>
                                                        <td>
                                                            <a href="{{ url('user/events/'.$event->id.'/edit') }}">
                                                                <button type="button" class="btn btn-sm btn-primary"> Update </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <a href="{{ url('user/competitions/'.$competition->id.'/createevent') }}">
                                            <button type="button" class="btn btn-primary">Add New Competition</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Image</h4>
                                    </div>
                                    <div class="panel-body">
                                        @foreach($images as $image)
                                            <div class="col-md-6">
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($image->path) }}" style="width: 450px; height: 150px">
                                                <form method="post" action="{{ url('user/competitions/'.$competition->id.'/image/delete') }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="image_id" value="{{ $image->id }}">
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                            </div>

                                        @endforeach
                                        <div class="col-md-12">
                                            <br>
                                            <form action="{{ url('user/competitions/'.$competition->id.'/image') }}" enctype="multipart/form-data" method="post">
                                                {{ csrf_field() }}
                                                <input type="file" name="image" required>
                                                <input type="submit" value="Add image" class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
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