@extends('layouts.master')

@section('pagetitle')
    Event
@endsection

@section('body')

    <div id="home-sec">
        <div class="container"  >
            @include('layouts.imgview')
            <div class="row">
                <div  class="col-md-12 competition-info" >
                    <div style="background-color: {{ $competition->start_time>Carbon\Carbon::now()? 'rgba(53,185,255,0.62)': ($competition->end_time<Carbon\Carbon::now()? 'rgba(255,55,26,0.62)': 'rgba(46,191,17,0.62)') }}">
                        <div style="padding-top: 20px; padding-bottom: 20px">
                            <h2 style="text-align: center"> <strong>{{ $competition->title }} </strong></h2>
                            <h3 class="text-center"> Organized By Department of {{\App\Department::findOrFail($competition->department_id)->full_name}}</h3>
                            <p class="text-center"> <i class="fa fa-calendar"> </i> <strong>Time: </strong> &nbsp; {{$competition->start_time->toDayDateTimeString()}} to {{$competition->end_time->toDayDateTimeString()}} </p>
                        </div>
                    </div>
                    <br>
                    <br>
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-body" style="background-color: rgba(11,236,255,0)">
                                    <p>{{ $competition->description }} </p>
                                </div>
                            </div>


                        </div>

                    <table class="table table-bordered">
                        <caption style="text-align: center; font-size: x-large">Competitons List of {{ $competition->title }}</caption>
                          <tr style="background-color: #a5a9ff">
                                <th style="border-right: 1px solid #000000">Competition Title</th>
                                <th style="border-right: 1px solid #000000">Status</th>
                                <th style="border-right: 1px solid #000000">Start Time</th>
                                <th style="border-right: 1px solid #000000">End Time</th>
                                <th>Number of Participant</th>
                            </tr>
                        @forelse($events as $event)
                                <tr>
                                    <td><a href="{{ url('/event/'.$event->id) }}">{{ $event->title }}</a></td>
                                    <td>{{ $event->getStatus() }}</td>
                                    <td> {{ $event->start_time }}</td>
                                    <td> {{ $event->end_time }}</td>
                                    <td>{{ $event->number_of_participants }}</td>
                                </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">
                                    No Events Found
                                </td>

                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection