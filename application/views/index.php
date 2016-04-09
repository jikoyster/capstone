<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CES Document Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/carousel.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/sticky-footer.css" rel="stylesheet">
  </head>

  <body>
    <!-- Navigation Bar -->
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="index.php" class="pull-left"><img src="<?php echo base_url();?>assets/img/ces_logo_sm.png"></a>
              <a class="navbar-brand" href="index.php">&nbsp CES Document Management System</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">About</a></li>
                <li><a href="#login">Login</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo base_url();?>assets/img/slider.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo base_url();?>assets/img/slider.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo base_url();?>assets/img/slider.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>

      <!-- Arrows of the Carousel -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- About CES -->
    <div id="about" class="container">
      <div class="text-center">
        <h1><strong>What is <ins>Community Extension Service</ins>?</strong></h1>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img class="center-block img-circle" src="<?php echo base_url();?>assets/img/ces_logo.png">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <p style="text-align:justify">Community Extension Service (CES) is one of the three core functions of the University of San Carlos as a Higher Education Institution along with Teaching-Learning and Research. Hence, Carolinians experience integral development by advancing their academic competencies highly motivated by their active engagements with university partner communities, institutions, and organizations. All CES programs, projects, and activities are undertaken by students, faculty, and staff with a three-fold mandate: first, to voluntarily extend one’s professional and academic expertise; second, to engage into prophetic dialogue with the world guided by the Missionary charisma of SVD Spirituality; and third, to empower peoples and communities for social change through a transformatory or liberational approach.</p>

        <p style="text-align:justify">The CES office was constituted to fulfill the above mandate. The office takes a major role in networking, organizing, coordinating, and facilitating the various CES initiatives of departments, colleges, support offices, as well as of student organizations. It also conducts monitoring and evaluation of CES programs, projects, and activities with the college-appointed coordinators. Thus, students, faculty, and staff are highly enjoined to make learning more meaningful by volunteering in the various extension initiatives of the university.</p>

        <p style="text-align:justify">All of these are envisioned to produce Carolinians with developed empathy and enkindled missionary spirit. A Carolinian who is not only equipped with the mastery of his/her profession, but who is a truthful Witness to the Word.</p>
      </div>
    </div>

    <!-- Three Something -->
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="text-center"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp CES Goals</h2>
            </div>
            <div class="panel-body">
              <p style="text-align:justify">For USC to contribute to nation building by providing highly specialized curricular programs with extension services that allow students, faculty, and staff to apply the new knowledge they generate by empowering communities, organizations, and institutions through a transformatory approach in addressing specific social development problems.</p>
              <br>
              <br>
              <br>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="text-center"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp CES Objectives</h2>
            </div>
            <div class="panel-body">
              <ol>
                <li>Extension services are integral to the learning experience and research opportunities of students</li>
                <li>Faculty members conduct CES as an enrichment to the teaching-research experience</li>
                <li>Alumni take an active role in the conduct of CES programs and projects</li>
                <br>
                <br>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h2 class="text-center"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp CES KRA's</h2>
            </div>
            <div class="panel-body">
              <ol>
                <li>Context-responsive CES programs and projects</li>
                <li>Specialization-based CES by faculty and students</li>
                <li>Collaborative and inclusive conduct of CES by academic as well as administrative units</li>
                <li>Sustainable and outcomes-based CES programs and projects</li>
                <li>Development of Voluntarism and Missionary Orientation among faculty, students, and staff</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Login -->
    <div id="login" class="container" align="center">
      <div class="well">
        <h1 class="text-center"><strong>Let's get started!</strong></h1>
        <?php echo form_open('Users/login');?>
          <table width="40%">
            <tr>
              <td>
                <div class="form-group input-group">
                  <input type="text" class="form-control" placeholder="Username" name="uname" required>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group input-group">
                  <input type="password" class="form-control" placeholder="Password" name="pass" required>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp Login</button>
              </td>
            </tr>
          </table>
        <?php echo form_close();?>
        <br>
        <strong><p>Don't have an account?</p>
        <p>For Co-curricular and Extra-curricular Student Organization Representatives</p></strong>

        <table width="40%">
          <tr>
            <td>
              <a href="<?php echo site_url('Main/signup')?>">
                <button class="btn btn-info btn-lg btn-block">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Register Here
                </button>
              </a>
            </td>
          </tr>
        </table>

      </div>
    </div>


    <!-- FOOTER -->
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
