@extends('layouts.master')

@section('pagetitle')
    Departments
@endsection

@section('body')
    <div id="home-sec">
        <div class="container"  >
            <div class="row text-center">
                <div  class="col-md-12 department-list text-center" >
                    <h2>Departments in University</h2>
                    <br>
                    <ul class="text-center">
                        @foreach(\App\Department::orderBy('full_name', 'ASC')->get() as $department)
                            <li class="text-center"><a href="{{ url('department/'.$department->id) }} ">{{ $department->full_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection