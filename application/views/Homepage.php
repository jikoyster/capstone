<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to CESDMS!</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/freelancer.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top" style="color: #FFF">C E S D M S</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top" style="color: #FFF"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#sign_in" style="color: #FFF">Sign in</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about" style="color: #FFF">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact" style="color: #FFF">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php echo base_url();?>assets/img/ces_profile.png" alt="CES Logo">
                    <div class="intro-text">
                        <span class="name">Community Extension Services</span>
                        <hr>
                        <span class="skills">Document Management System</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sign In Grid Section -->
    <section id="sign_in">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>sign in to your account</h2>
                    <hr>
                </div>
            </div>
            <div class="login-errors"></div>
            <br>
            <div class="row" align="center">
                <?php echo form_open('Users/login');?>
                  <table width="50%">
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
                        <br>
                        <button type="submit" id="login" class="btn btn-primary btn-lg btn-block" name="login" value="login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp Login</button>
                      </td>
                    </tr>
                  </table>
                <?php echo form_close();?>

                <br>
                <strong><p>Don't have an account?</p>
                <p>For Co-curricular and Extra-curricular Student Organization Representatives</p></strong>

                <table width="50%">
                  <tr>
                    <td>
                        <a href="#register" class="portfolio-link" data-toggle="modal">
                            <button type="button" class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Register</button>
                        </a>
                    </td>
                  </tr>
                </table>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>What is Community Extension Service?</h2>
                    <hr>
                </div>
            </div>
            <div>
                <p style="text-align:justify">
                    <u>Community Extension Service</u> (CES) is one of the three core functions of the <u>University of San Carlos</u> as a Higher Education Institution along with Teaching-Learning and Research. Hence, Carolinians experience integral development by advancing their academic competencies highly motivated by their active engagements with university partner communities, institutions, and organizations. All CES programs, projects, and activities are undertaken by students, faculty, and staff with a three-fold mandate: first, to voluntarily extend one’s professional and academic expertise; second, to engage into prophetic dialogue with the world guided by the Missionary charisma of SVD Spirituality; and third, to empower peoples and communities for social change through a transformatory or liberational approach.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h3 class="text-center"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>&nbsp CES Goals</h3>
                        </div>
                        <div class="panel-body">
                            <p style="text-align:justify">For USC to contribute to nation building by providing highly specialized curricular programs with extension services that allow students, faculty, and staff to apply the new knowledge they generate by empowering communities, organizations, and institutions through a transformatory approach in addressing specific social development problems.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h3 class="text-center"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp CES Objectives</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><p>Extension services are integral to the learning experience and research opportunities of students</p></li>
                                <li><p>Faculty members conduct CES as an enrichment to the teaching-research experience</p></li>
                                <li><p>Alumni take an active role in the conduct of CES programs and projects</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                          <h3 class="text-center"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp CES KRA's</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><p>Context-responsive CES programs and projects</p></li>
                                <li><p>Specialization-based CES by faculty and students</p></li>
                                <li><p>Collaborative and inclusive conduct of CES by academic as well as administrative units</p></li>
                                <li><p>Sustainable and outcomes-based CES programs and projects</p></li>
                                <li><p>Development of Voluntarism and Missionary Orientation among faculty, students, and staff</p></li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Who are in charge of the CES?</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <video width="100%" controls>
                        <source src="<?php echo base_url();?>assets/vid/CES_Video.mp4" type="video/mp4">
                        Your browser is not updated. Please update your browser.
                    </video>
                </div>
                <div class="col-md-5">
                    <p style="text-align:justify">
                        The CES office was constituted to fulfill the above mandate. The office takes a major role in networking, organizing, coordinating, and facilitating the various CES initiatives of departments, colleges, support offices, as well as of student organizations. It also conducts monitoring and evaluation of CES programs, projects, and activities with the college-appointed coordinators. Thus, students, faculty, and staff are highly enjoined to make learning more meaningful by volunteering in the various extension initiatives of the university.
                    </p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align:justify">
                        All of these are envisioned to produce Carolinians with developed empathy and enkindled missionary spirit. A Carolinian who is not only equipped with the mastery of his/her profession, but who is a truthful Witness to the Word.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center" id="contact">
        <div class="footer-above">
            <div class="container">
                <div align="center">
                    <h1>Contact Us</h1>
                    <hr>
                    <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp P. del Rosario Street, Cebu City, Philippines 6000</p>
                    <br>
                    <div class="row">
                        <div class="footer-col col-lg-4">
                            <p><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp Phone: +63 (32) 253 1000</p>
                        </div>
                        <div class="footer-col col-lg-4">
                            <p><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp Fax: +63 (32) 255 4341</p>
                        </div>
                        <div class="footer-col col-lg-4">
                            <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp E-mail: ces@usc.edu.ph</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; CESDMS 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </div>

    <!-- Registration Modal -->
    <div class="portfolio-modal modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="container">
            <div class="modal-header">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <h2 class="modal-title">Registration Form</h2>
            </div>
                <?php echo form_open('Users/process_reg');?>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="panel panel-primary">
                          <div class="panel-heading" align="left">
                            <h4><span class="glyphicon glyphicon-education" aria-hidden="true"></span>&nbsp Student Information</h4>
                          </div>
                          <div class="panel-body">
                            <table width="100%">
                              <tr>
                                <td class="text-left"><label>Last Name:</label></td>
                                <td width="2%"></td>
                                <td><input type="text" class="form-control" name="lname" placeholder="Type your lastname" required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>First Name:</label></td>
                                <td></td>
                                <td><input type="text" class="form-control" name="fname" placeholder="Type your firstname" required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>School:</label></td>
                                <td></td>
                                <td>
                                  <select class="form-control" name="school" required>
                                    <option>-- Select your School --</option>
                                    <option value="School of Architecture, Fine Arts and Design">
                                      School of Architecture, Fine Arts and Design
                                      </option>
                                    <option value="School of Arts and Sciences">
                                      School of Arts and Sciences
                                      </option>
                                    <option value="School of Education">
                                      School of Education
                                      </option>
                                    <option value="School of Health Care Profession">
                                      School of Health Care Profession
                                      </option>
                                    <option value="School of Law and Governance">
                                      School of Law and Governance
                                      </option>
                                    <option value="School of Business and Economics">
                                      School of Business and Economics
                                      </option>
                                    <option value="School of Engineering">
                                      School of Engineering
                                      </option>
                                  </select><br>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Department:</label></td>
                                <td></td>
                                <td>
                                  <select class="form-control" name="dept" required>
                                  <option>-- Select your Department --</option>
                                    <option disabled>-- School of Architecture, Fine Arts and Design --</option>
                                      <option value="Architecture">Architecture</option>
                                      <option value="Fine Arts">Fine Arts</option>
                                    <option disabled>-- School of Arts and Sciences --</option>
                                      <option value="Languages and Literature">Languages and Literature</option>
                                      <option value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                                      <option value="Psychology">Psychology</option>
                                      <option value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                                      <option value="Biology">Biology</option>
                                      <option value="Chemistry">Chemistry</option>
                                      <option value="Computer and Information Sciences">Computer and Information Sciences</option>
                                      <option value="Mathematics">Mathematics</option>
                                      <option value="Phsyics">Phsyics</option>
                                    <option disabled>-- School of Education --</option>
                                      <option value="Teacher Education">Teacher Education</option>
                                      <option value="Science and Mathematics">Science and Mathematics</option>
                                      <option value="Physical Education">Physical Education</option>
                                    <option disabled>-- School of Health Care Profession -</option>
                                      <option value="Nursing">Nursing</option>
                                      <option value="Pharmacy">Pharmacy</option>
                                      <option value="Nutrition and Dietics">Nutrition and Dietics</option>
                                    <option disabled>-- School of Law and Governance --</option>
                                      <option value="Law">Law</option>
                                      <option value="Political Science">Political Science</option>
                                    <option disabled>-- School of Business and Economics --</option>
                                      <option value="Accountancy">Accountancy</option>
                                      <option value="Business Administration">Business Administration</option>
                                      <option value="Economics">Economics</option>
                                      <option value="Hospitality Management">Hospitality Management</option>
                                    <option disabled>-- School of Engineering --</option>
                                      <option value="Chemical Engineering">Chemical Engineering</option>
                                      <option value="Civil Engineering">Civil Engineering</option>
                                      <option value="Computer Engineering">Computer Engineering</option>
                                      <option value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                      <option value="Electrical Engineering">Electrical Engineering</option>
                                      <option value="Industrial Engineering">Industrial Engineering</option>
                                      <option value="Mechanical Engineering">Mechanical Engineering</option>
                                  </select><br>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Organization:</label></td>
                                <td></td>
                                <td><input type="text" class="form-control" name="org" placeholder="Type your organization" required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Email Address:</label></td>
                                <td></td>
                                <td><input type="email" class="form-control" name="email" placeholder="Type your email address"required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Contact Number:</label></td>
                                <td></td>
                                <td><input type="text" class="form-control" name="cnum" placeholder="Type your cellphone number" required></td>
                              </tr>
                            </table>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="panel panel-primary">
                          <div class="panel-heading" align="left">
                            <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Username & Password</h4>
                          </div>
                          <div class="panel-body">
                            <table width="100%">
                              <tr>
                                <td class="text-left" width="30%"><label>Username:</label></td>
                                <td width="2%"></td>
                                <td><input type="text" class="form-control" name="uname" placeholder="Type your username" required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Password:</label></td>
                                <td></td>
                                <td><input type="password" class="form-control" name="pass1" placeholder="Type your password" required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Confirm Password:</label></td>
                                <td></td>
                                <td><input type="password" class="form-control" name="pass2" placeholder="Retype your password" required><br></td>
                              </tr>
                              <tr>
                                  <td colspan="3">
                                      <button type="submit" class="btn btn-success btn-block btn-lg" name="register" value="register"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp Register</button>
                                  </td>
                              </tr>
                            </table>
                          </div>
                      </div>
                    </div>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>

    <!-- Loading Screen -->
    <div class="modal hide" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-header">
            <h1>Processing...</h1>
        </div>
        <div class="modal-body">
            <div class="progress progress-striped active">
                <div class="bar" style="width: 100%;"></div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/freelancer.js"></script>

    <!-- Custom Javascript 
    <script src="<?php echo base_url();?>assets/js/animation.js"></script> -->

</body>

</html>
