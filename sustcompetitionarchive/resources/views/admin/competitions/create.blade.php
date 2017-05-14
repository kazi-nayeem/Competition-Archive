@extends('admin.layouts.master')

@section('pagetitle')
    Add Event
@endsection

@section('body')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Create Event</h1>
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
                            <form role="form" method="POST" action="{{ route('competitions.store') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title">Enter Event Title</label>
                                    <input id="title" class="form-control" type="text" name="title" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="start_time">Enter Start Time</label>
                                    <input id="start_time" class="form-control" type="datetime-local" name="start_time" required>
                                </div>

                                <div class="form-group">
                                    <label for="end_time">Enter End Time</label>
                                    <input id="end_time" class="form-control" type="datetime-local" name="end_time" required>
                                </div>

                                <div class="form-group">
                                    <label for="type">Event Type</label>
                                    <input id="type" class="form-control" type="text" name="type" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" class="form-control" name="description"  rows="6" required> </textarea>
                                </div>
                                <input id="user_id" type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input id="department_id" type="hidden" name="department_id" value="{{ Auth::user()->department_id }}">
                                <button type="submit" class="btn btn-info">Create Event</button>

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