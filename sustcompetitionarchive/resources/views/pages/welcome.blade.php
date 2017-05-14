@extends('layouts.master')

@section('pagetitle')
    Home
@endsection

@section('body')
    <div id="home-sec">
        <div class="container"  >
    @include('layouts.imgview')

    @include('layouts.competitionlist')
        </div>
    </div>
@endsection