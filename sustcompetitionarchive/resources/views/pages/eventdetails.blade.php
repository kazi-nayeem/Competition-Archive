@extends('layouts.master')

@section('pagetitle')
    Event
@endsection

@section('body')

    <div id="home-sec">
        <div class="container"  >
            <div class="row">
                <div  class="col-md-12 competition-info" >
                    <div style="background-color: rgba(53,185,255,0.62)">
                        <div style="padding-top: 20px; padding-bottom: 20px">
                            <h2 style="text-align: center"> <strong>{{ $event->title}} </strong></h2>
                            <h3 class="text-center"> in<strong> {{ \App\Competition::findOrFail($event->competition_id)->title }} </strong></h3>
                            <p class="text-center"> <i class="fa fa-calendar"> </i> <strong>Time: </strong> &nbsp; {{$event->start_time->toDayDateTimeString()}} to {{$event->end_time->toDayDateTimeString()}} </p>
                        </div>
                    </div>

                    <br>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body" style="background-color: rgba(11,236,255,0)">
                                <p>{{ $event->summary }} </p>
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
                </div>
            </div>

        </div>
    </div>

@endsection