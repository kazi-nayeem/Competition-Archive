@extends('admin.layouts.master')

@section('pagetitle')
    Update Event
@endsection

@section('body')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Update Event</h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-10 col-sm-6 col-xs-12 col-md-offset-1">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Enter Event Information
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ url('user/events/'.$event->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="title">Enter Event Title</label>
                                    <input id="title" class="form-control" type="text" name="title" value="{{ $event->title }}" required autofocus>

                                </div>

                                <div class="form-group">
                                    <label for="start_time">Enter Start Time</label>
                                    <input id="start_time" class="form-control" type="datetime-local" name="start_time" value="{{ $event->start_time->format('Y-m-d\TH:i:s') }}" required>

                                </div>

                                <div class="form-group">
                                    <label for="end_time">Enter End Time</label>
                                    <input id="end_time" class="form-control" type="datetime-local" name="end_time" value="{{ $event->end_time->format('Y-m-d\TH:i:s') }}" required>

                                </div>

                                <div class="form-group">
                                    <label for="number_of_participants">Number of Participants</label>
                                    <input id="number_of_participants" class="form-control" type="number" name="number_of_participants" value="{{ $event->number_of_participants }}" required>

                                </div>

                                <div class="form-group">
                                    <label for="summary">Description</label>
                                    <textarea id="summary" class="form-control" name="summary"  rows="6" required> {{ $event->summary }}</textarea>

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