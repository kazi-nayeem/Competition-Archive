@extends('admin.layouts.master')

@section('pagetitle')
    Users List
@endsection

@section('body')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">{{ $title }}</h1>

                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Nick Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr class="odd gradeX">
                                            <td>{{ $user->full_name }}</td>
                                            <td>{{ $user->short_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td class="center">{{ \App\Department::findOrFail($user->department_id)->full_name }}</td>
                                            <td class="center">
                                                @if($user->type == 0)
                                                    <form role="form" method="post" action="{{ url('admin/usersupdate') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                                                        <input type="hidden" id="type" name="type" value="{{ 2 }}">
                                                        <button  type="submit" class="btn btn-xs btn-success">
                                                            Accept
                                                        </button>
                                                    </form>
                                                @endif

                                                @if($user->type == 2)
                                                        <form role="form" method="post" action="{{ url('admin/usersupdate') }}">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                                                            <input type="hidden" id="type" name="type" value="{{ -2 }}">
                                                            <button  type="submit" class="btn btn-xs btn-danger">
                                                                Block
                                                            </button>
                                                        </form>
                                                @endif

                                                    @if($user->type == -2)
                                                        <form role="form" method="post" action="{{ url('admin/usersupdate') }}">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                                                            <input type="hidden" id="type" name="type" value="{{ 2 }}">
                                                            <button  type="submit" class="btn btn-xs btn-primary">
                                                                Unblock
                                                            </button>
                                                        </form>
                                                    @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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