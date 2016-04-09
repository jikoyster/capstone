<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                  <a href="#">
                      <img src="<?php echo base_url();?>assets/img/ces_logo_sm.png"> CES-DMS
                  </a>
                </li>
                <li>
                  <div align="center">
                    <img src="<?php echo base_url();?>assets/img/usc_white.png" alt="..." class="img-circle navlogo" style="height:140px; width:140px">
                    <h4 class="name"><?php echo $fname." ".$lname;?></h4>
                    <h5 class="designation">CES Director</h5>
                  </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/home');?>" class="active"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp Endorsed Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/approved_proposals');?>"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Approved Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/reviews');?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp Reviewed Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/other_reports');?>"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>&nbsp Other Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/manage_accounts');?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Manage Accounts</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/account_settings');?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Users/logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default btn-xs pull-right" id="menu-toggle">
                <strong>Toggle Sidebar</strong> &nbsp
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </a>
            <div class="container-fluid">
                <div class="row tab-content">
                    <!-- My Proposals -->
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Create Account</h1>
                    <hr>
                    <br>
                    <form>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="panel panel-primary">
                              <div class="panel-heading" align="left">
                                <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp User Information</h4>
                              </div>
                              <div class="panel-body">
                                <table width="100%">
                                  <tr>
                                    <td class="text-right" width="30%"><label>Last Name:</label></td>
                                    <td width="2%"></td>
                                    <td><input type="text" class="form-control" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>First Name:</label></td>
                                    <td></td>
                                    <td><input type="text" class="form-control" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Designation:</label></td>
                                    <td></td>
                                    <td>
                                      <select class="form-control" required>
                                        <option>CES Representative</option>
                                        <option>CES Coordinator</option>
                                        <option>Department Chair</option>
                                        <option>School Dean</option>
                                      </select><br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>School:</label></td>
                                    <td></td>
                                    <td>
                                      <select class="form-control" required>
                                        <option>School of Architecture, Fine Arts and Design</option>
                                        <option>School of Arts and Sciences</option>
                                        <option>School of Education</option>
                                        <option>School of Health Care Profession</option>
                                        <option>School of Law and Governance</option>
                                        <option>School of Business and Economics</option>
                                        <option>School of Engineering</option>
                                      </select><br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Department:</label></td>
                                    <td></td>
                                    <td>
                                      <select class="form-control" required>
                                        <option disabled>-- School of Architecture, Fine Arts and Design --</option>
                                          <option>Architecture</option>
                                          <option>Fine Arts</option>
                                        <option disabled>-- School of Arts and Sciences --</option>
                                          <option>Languages and Literature</option>
                                          <option>Philosophy and Religious Studies</option>
                                          <option>Psychology</option>
                                          <option>Anthropology, Sociology and History</option>
                                          <option>Biology</option>
                                          <option>Chemistry</option>
                                          <option>Computer and Information Sciences</option>
                                          <option>Mathematics</option>
                                          <option>Phsyics</option>
                                        <option disabled>-- School of Education --</option>
                                          <option>Teacher Education</option>
                                          <option>Science and Mathematics</option>
                                          <option>Physical Education</option>
                                        <option disabled>-- School of Health Care Profession -</option>
                                          <option>Nursing</option>
                                          <option>Pharmacy</option>
                                          <option>Nutrition and Dietics</option>
                                        <option disabled>-- School of Law and Governance --</option>
                                          <option>Law</option>
                                          <option>Political Science</option>
                                        <option disabled>-- School of Business and Economics --</option>
                                          <option>Accountancy</option>
                                          <option>Business Administration</option>
                                          <option>Economics</option>
                                          <option>Hospitality Management</option>
                                        <option disabled>-- School of Engineering --</option>
                                          <option>Chemical Engineering</option>
                                          <option>Civil Engineering</option>
                                          <option>Computer Engineering</option>
                                          <option>ECE</option>
                                          <option>EE</option>
                                          <option>Industrial Engineering</option>
                                          <option>Mechanical Engineering</option>
                                      </select><br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Email Address:</label></td>
                                    <td></td>
                                    <td><input type="email" class="form-control" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Contact Number:</label></td>
                                    <td></td>
                                    <td><input type="text" class="form-control" required><br></td>
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
                                    <td class="text-right" width="30%"><label>Username:</label></td>
                                    <td width="2%"></td>
                                    <td><input type="text" class="form-control" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Password:</label></td>
                                    <td></td>
                                    <td><input type="password" class="form-control" required><br></td>
                                  </tr>
                                  <tr>
                                    <td class="text-right"><label>Confirm Password:</label></td>
                                    <td></td>
                                    <td><input type="password" class="form-control" required><br></td>
                                  </tr>
                                  <tr>
                                    <td colspan="3"><hr></td>
                                  </tr>
                                  <tr>
                                    <table width="100%" align="center">
                                      <tr>
                                        <td width="48%">
                                          <a href="<?php echo site_url('Director/manage_accounts');?>" style="text-decoration:none"><button type="button" class="btn btn-danger btn-block btn-lg"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button></a>
                                        </td>
                                        <td width="4%"></td>
                                        <td width="48%">
                                          <button type="submit" class="btn btn-success btn-block btn-lg"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp Register</button>
                                        </td>
                                      </tr>
                                    </table>
                                  </tr>
                                </table>
                              </div>
                          </div>
                        </div>
                      </form>  
                </div>
            </div>

        </div>

    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Scripts -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>

</body>

</html>