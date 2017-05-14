<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title> @yield('pagetitle') </title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="{{ asset('adminassets/js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>
<body>
<!-- NAV SECTION -->
@include('layouts.topmenu')
<!--END NAV SECTION -->

<!--HOME SECTION-->

@yield('body')


<!--CONTACT SECTION-->

<!--END CONTACT SECTION-->

<!--FOOTER SECTION -->
@include('layouts.footer')
<!-- END FOOTER SECTION -->

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY  -->
<script src="{{ asset('assets/plugins/jquery-1.10.2.js') }}"></script>
<!-- BOOTSTRAP CORE SCRIPT   -->
<script src="{{ asset('assets/plugins/bootstrap.min.js') }}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- DATA TABLE SCRIPTS -->
<script src="{{ asset('adminassets/js/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminassets/js/dataTables/dataTables.bootstrap.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
</body>
</html>
