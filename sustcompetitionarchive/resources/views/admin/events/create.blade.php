@extends('admin.layouts.master')

@section('pagetitle')
    Add Competition
@endsection

@section('body')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Create Competition</h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-10 col-sm-6 col-xs-12 col-md-offset-1">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Enter Competition Information
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('events.store') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title">Enter Competition Title</label>
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
                                    <label for="number_of_participants">Number of Participants</label>
                                    <input id="number_of_participants" class="form-control" type="number" name="number_of_participants" required>

                                </div>

                                <div class="form-group">
                                    <label for="summary">Description</label>
                                    <textarea id="summary" class="form-control" name="summary"  rows="6" required> </textarea>

                                </div>
                                <input id="user_id" type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input id="competition_id" type="hidden" name="competition_id" value="{{ $competition->id }}">
                                <input id="number_of_awards" type="hidden" name="number_of_awards" value="{{ 0 }}">
                                <button type="submit" class="btn btn-info">Create Competition</button>

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