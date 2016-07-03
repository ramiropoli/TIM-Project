<?php
//database configuation
$host = 'localhost';
$port = '3306';
$dbname = 'hypermedia2';
$charset = 'utf8';
$username='root';
$password='';
$col= "mysql:host=$host;dbname=$dbname;port=$port;";

try {
  $db = new PDO($col , $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch(PDOException $e) {
  echo 'Attenzione: '.$e->getMessage();
}
$sql = $db->prepare("SELECT * FROM description where id=1");
$sql->execute(); 
$query_result = $sql->fetchAll();
$timvision = $query_result[0];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
  
    <!--<link rel="icon" href="C:\Users\Marco\Desktop\prove html\bootstrap-3.3.6\docs\favicon.ico">-->

    <title>TV - Description</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.6\css\bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.6\css\ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="tvdescription.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <nav class="navbar navbar-justified">
          <div class="container2">
              <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                  <a class="navbar-brand" href="#"> <img src="ImmaginiTIM\tim-logo.jpg" alt="" style="width:200px; height:90px;"></a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                  <form class="navbar-form navbar-right">
                      <div class="form-group">
                          <input type="text" placeholder="Email" class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="password" placeholder="Password" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-success">Sign in</button>
                  </form>
                   <ul id="menu-mobile" class="nav navbar-default">
                          <li><a href="#">Home</a></li>
                          <li class="dropdown active">
                              <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Who we are <span class="caret"></span></a>
                              <ul class="vertical-dropdown-menu dropdown-menu">
                                  <li><a href="#">Innovation</a></li>
                                  <li><a href="#">Testimonials</a></li>
                                  <li><a href="#">Projects</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The group <span class="caret"></span></a>
                              <ul class="vertical-dropdown-menu dropdown-menu">
                                  <li><a href="#">Group description</a></li>
                                  <li><a href="#">News</a></li>
                                  <li><a href="#">Business &amp; Market</a></li>
                                  <li><a href="#">For Investors</a></li>       
                              </ul>
                          </li>
                          <li><a href="#">Contacts</a></li>
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category of devices <span class="caret"></span></a>
                              <ul class="vertical-dropdown-menu dropdown-menu">
                                  <li><a href="#">Smartphone &amp; Telephones</a></li>
                                  <li><a href="#">Tablet &amp; Computer</a></li>
                                  <li><a href="#">Modem &amp; Networking</a></li>
                                  <li><a href="#">Tv &amp; SmartLiving</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Promotions</a></li>
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category of services <span class="caret"></span></a>
                              <ul class="vertical-dropdown-menu dropdown-menu">
                                  <li><a href="#">Tv &amp; Entertainment</a></li>
                                  <li><a href="#">Health &amp; Wellness</a></li>
                                  <li><a href="#">Home &amp; Family</a></li>
                                  <li><a href="#">Personal Services</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category of assistance <span class="caret"></span></a>
                              <ul class="vertical-dropdown-menu dropdown-menu">
                                  <li><a href="#">Line &amp; Management</a></li>
                                  <li><a href="#">Costs &amp; Payments control</a></li>
                                  <li><a href="#">Hardware &amp; Configuration Support</a></li>
                                  <li><a href="#">SmartLife</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Highlights</a></li>
                      </ul>
                  
              </div><!--/.navbar-collapse -->
          </div>
      </nav>
      <div class="big-container" style="position:relative;">
          <div class="navbar-wrapper">
              <div class="container">
                  <nav>
                      <ul id="menu-accordeon" class="nav navbar-default">
                <li><a href="#">Home</a></li>
                <li><a href="#">Who we are</a>
                    <ul>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Projects</a></li>
                    </ul>
                </li>
                <li><a href="#">The group</a>
                    <ul>
                        <li><a href="#">Group Description</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Business & Market</a></li>
                        <li><a href="#">For Investors</a></li>
                    </ul>
                </li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Category of devices</a>
                    <ul>
                        <li><a href="#">Smartphone & Telephones</a></li>
                        <li><a href="#">Tablet & Computer</a></li>
                        <li><a href="#">Modem & Networking</a></li>
                        <li><a href="#">Tv & SmartLiving</a></li>
                    </ul>
                </li>
                <li><a href="#">Promotions</a></li>
                <li><a href="#">Category of services</a>
              <ul>
                 <li><a href="#">Tv & Entertainment</a></li>
                 <li><a href="#">Health & Wellness</a></li>
                 <li><a href="#">Home & Family</a></li>
                 <li><a href="#">Personal Services</a></li>
              </ul>
           </li>
                <li><a href="#">Category of assistance</a>
                    <ul>
                        <li><a href="#">Line & Management</a></li>
                        <li><a href="#">Costs & Payments control</a></li>
                        <li><a href="#">Hardware & Configuration Support</a></li>
                        <li><a href="#">SmartLife</a></li>
                    </ul>
                </li>
                <li><a href="#">Highlights</a></li>
                      
        </ul>
                     
                  </nav>
              </div>
          </div>

    <div class="container" id="path">
    <p>
    <a href="category-of-services.html">Category of Services</a>><a href="tv-entertainment.html">TV & Entertainment</a>><a href="tv.html">TV</a>>TIM Vision Description
    </p>      
    </div>

  <!-- Tab Menu -->       
         <ul class="nav nav-pills nav-justified">
  <li class="active"><a href="#">TIMVision</a></li>
</ul>
 <ul class="nav nav-pills nav-justified">
  <li class="active"><a href="#">Decoder TIMVision</a></li>
</ul>
          <!-- Main jumbotron for a primary marketing message or call to action -->
           <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"><?php echo $timvision['name'] ?> <span class="text-muted">See what you can do</span></h2>
          <p class="lead"><?php echo $timvision['desc1'] ?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
               <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h3 class="panel-title">TIM VISION</h3>
                      </div>
                      <div class="panel-body">
                      </div>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide"  src="ImmaginiTIM/image3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="ImmaginiTIM/image2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="ImmaginiTIM/timvision.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
          </div>
               </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
                      </div>
    </div>
        </div>
      </div>

      <hr class="featurette-divider">
           <div class="row featurette">
          <h2 class="featurette-heading"><?php echo $timvision['slogan'] ?></h2>
          <p class="lead"><?php echo $timvision['desc2'] ?> 
          </div>   
           <hr class="featurette-divider">
          
                 <div class="container" id="links">   
<h2>Learn More...</h2>
<p><a class="btn btn-primary btn-lg" href="tvactrules.html" role="button">Activation & Rules &raquo;</a>
<a class="btn btn-primary btn-lg" href="tvfaq.html" role="button">FAQ &raquo;</a>
<a class="btn btn-primary btn-lg" href="#" role="button">For Devices &raquo;</a>
<a class="btn btn-primary btn-lg" href="#" role="button">Buy &raquo;</a></p>
          </div>
      </div>
    

     

      <!-- Site footer -->
      <footer class="footer">
          <p class="align-right"> Telecom Italia 2012-P.IVA 00488410010</p>
          <p class="align-left">Follow us on:</p>
          <br>
          <a target="_blank" title="follow me on Twitter" href="http://www.twitter.com/PLACEHOLDER"><img alt="follow me on twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter40x40.png"></a>
          <a target="_blank" title="follow me on facebook" href="http://www.facebook.com/PLACEHOLDER"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook40x40.png"></a>
          <a target="_blank" title="follow me on youtube" href="http://www.youtube.com/PLACEHOLDER"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube40x40.png"></a>
          <a target="_blank" title="follow me on google plus" href="https://plus.google.com/PLACEHOLDER"><img alt="follow me on google plus" src="https://c866088.ssl.cf3.rackcdn.com/assets/googleplus40x40.png"></a>
      </footer>

      <!-- Bootstrap core JavaScript ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="jquery.min.js"></script>
      <script src="bootstrap-3.3.6/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="bootstrap-3.3.6/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>