@extends('layouts.master')

@section('pagetitle')
    Competitions
@endsection

@section('body')
    <div id="home-sec">
        <div class="container"  >
    @include('layouts.competitionlist')
        </div>
    </div>
@endsection