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
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Departments - SUST Competition Archive</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--></head>
<body>
     <!-- NAV SECTION -->
        <?php require '/common/header.php'; ?>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
     

     <!--END HOME SECTION-->

     <div id="home-sec">   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12 department-list" >
                <h2>Departments in University</h2>
                  <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">Applied Science & Technology</a></li>
                    <li><a data-toggle="pill" href="#menu1">Life Sciences</a></li>
                    <li><a data-toggle="pill" href="#menu2">Management & Business Administration</a></li>
                  </ul>
                  
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <ul>
                          <li><a href="./department.php">Computer Science and Engineering</a></li>
                          <li><a href="./department.php">Electrical and Electronic Engineering</a></li>
                          <li><a href="./department.php">Civil and Environmental Engineering</a></li>
                      </ul>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </div>

  
    <!--FOOTER SECTION -->
    <?php require './common/footer.php'; ?>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    </body>
</html>
