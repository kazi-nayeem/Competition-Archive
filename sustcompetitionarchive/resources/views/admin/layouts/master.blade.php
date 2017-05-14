<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('pagetitle') </title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('adminassets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('adminassets/css/font-awesome.css') }}" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{ asset('adminassets/css/basic.css') }}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{ asset('adminassets/css/custom.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link href="{{ asset('adminassets/js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />

</head>
<body>
<div id="wrapper">
    @include('admin.layouts.topbar')

    @include('admin.layouts.sidebar')

    @yield('body')

</div>
<!-- /. WRAPPER  -->

@include('admin.layouts.footer')
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{ asset('adminassets/js/jquery-1.10.2.js') }}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{ asset('adminassets/js/bootstrap.js') }}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{ asset('adminassets/js/jquery.metisMenu.js') }}"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="{{ asset('adminassets/js/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminassets/js/dataTables/dataTables.bootstrap.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- CUSTOM SCRIPTS -->
<script src="{{ asset('adminassets/js/custom.js') }}"></script>

</body>
</html>
