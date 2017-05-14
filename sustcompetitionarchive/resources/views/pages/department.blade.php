@extends('layouts.master')

@section('pagetitle')
    {{ $department->full_name }}
@endsection

@section('body')
    <div id="home-sec">
        <div class="container"  >
    @include('layouts.competitionlist')
        </div>
    </div>
@endsection