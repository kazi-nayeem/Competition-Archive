<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{ asset('adminassets/img/user.png') }}" class="img-thumbnail" />

                    <div class="inner-text">
                        Name: {{ Auth::user()->full_name }}
                        <br />
                        <small> Department : {{ \App\Department::findOrFail(Auth::user()->department_id)->short_name }} </small>
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="{{ url('/home') }}"><i class="fa fa-dashboard "></i>Dashboard</a>
            </li>
            @if(\Illuminate\Support\Facades\Auth::user()->type == 1)
            <li>
                <a href="#"><i class="fa fa-desktop "></i>User <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/allusers') }}">All User</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/newusers') }}"><i class="fa fa-bell "></i>New User</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/activeusers') }}"><i class="fa fa-circle-o "></i>Active User</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/blockedusers') }}"><i class="fa fa-bug "></i>Blocked User</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-yelp "></i>Department <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/admin/department/') }}"><i class="fa fa-coffee"></i>Department List</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/department/create') }}"><i class="fa fa-flash "></i>Add New Department</a>
                    </li>
                </ul>
            </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()->type >= 1)
            <li>
                <a href="#"><i class="fa fa-yelp "></i>Competition <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('user/competitions') }}"><i class="fa fa-coffee"></i>Competition List</a>
                    </li>
                    <li>
                        <a href="{{ url('user/competitions/create') }}"><i class="fa fa-flash "></i>Create New Competition</a>
                    </li>
                </ul>
            </li>
            @endif
            @if(\Illuminate\Support\Facades\Auth::user()->type == 10)
            <li>
                <a href="blank.html"><i class="fa fa-square-o "></i>Update Profile</a>
            </li>
            @endif
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->