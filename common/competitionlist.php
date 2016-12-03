<!DOCTYPE html>
<html>
<body>
<div id="home-sec">   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12 competition-list" >
                <h2>Competitions in <?php echo $competitionscoupe; ?></h2>
                  <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">Current</a></li>
                    <li><a data-toggle="pill" href="#menu1">Upcomming</a></li>
                    <li><a data-toggle="pill" href="#menu2">Latest</a></li>
                  </ul>
                  
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <ul>
                          <li><a href="./competition.php">Competition 1</a></li>
                          <li><a href="./competition.php">Competition 2</a></li>
                          <li><a href="./competition.php">Competition 3</a></li>
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
</body>
</html>