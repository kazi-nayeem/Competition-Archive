@extends('admin.layouts.master')

@section('pagetitle')
    Competition
@endsection

@section('body')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">
                        <div class="col-md-11">
                            Competition Details
                        </div>

                        <form action="{{ url('user/events/'.$event->id) }}" method="post" id="delete">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </h1>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3> <strong>Title: </strong> &nbsp; {{ $event->title }}</h3>
                                <h3> <strong>Event: </strong>  {{\App\Competition::findOrFail($event->competition_id)->title}}</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3> <strong>Start Date: </strong> &nbsp; {{$event->start_time}} </h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3> <strong>End Date: </strong> &nbsp; {{$event->end_time}}</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3> <strong>Status: </strong> &nbsp; {{ $event->getStatus() }}</h3>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ url('user/events/'.$event->id.'/edit') }}">
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
                                                <p>{{ $event->summary }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color: rgba(191,199,255,0.64)">
                                            <h3 class="text-center" style="margin: 5px"><strong>Ranklist</strong></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                    <tr style="background-color: rgba(25,98,226,0.33)">
                                                        <th>Rank No.</th>
                                                        <th>Team Name</th>
                                                        <th>Institution</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $teamId = 1;
                                                    @endphp
                                                    @foreach($ranklist as $team)
                                                        <tr data-toggle="modal" data-id="myModal{{ $teamId }}" data-target="#myModal{{ $teamId }}">
                                                            <td> {{ $team->rank }} </td>
                                                            <td> {{ $team->name }}</td>
                                                            <td>{{ $team->institution }}</td>
                                                            <td> <button id="myBtn" class="btn btn-primary"> Details</button></td>
                                                        </tr>
                                                        <!-- The Modal -->
                                                        <div id="myModal{{ $teamId }}" class="modal">
                                                            <div class="modal-dialog modal-lg">
                                                                <!-- Modal content -->
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="background-color: rgba(25,109,255,0.47)">
                                                                        <h3 style="margin: 5px">{{ $team->name }}</h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @php
                                                                            $member = 1;
                                                                        @endphp
                                                                        @foreach(\App\Student::whereTeamId($team->id)->get() as $student)
                                                                            @if($member != 1)
                                                                                <br>
                                                                            @endif
                                                                            Member {{ $member }}: {{ $student->name }}
                                                                            @php
                                                                                $member = $member + 1;
                                                                            @endphp
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $teamId = $teamId + 1;
                                                        @endphp
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <form id="ranklist" name="ranklist" method="post" enctype="multipart/form-data" action="{{ url('user/events/'.$event->id.'/updateranklist') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="file" name="file" required>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Update Ranklist</button>
                                        </div>
                                    </div>
                                </form>
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