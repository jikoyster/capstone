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
                    <h5 class="designation">CES Coordinator</h5>
                  </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/home');?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/my_reports');?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/other_reports');?>"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>&nbsp Other Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/reviews');?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp Reviews</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/recommendations');?>"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp Recommendations</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/settings');?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
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
                    <!-- Account Settings -->
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</h1>
                    <hr>
                    <table width="70%" align="center">
                      <tr>
                        <td class="text-right"><label>Last Name:</label></td>
                        <td width="2%"></td>
                        <td><input type="text" class="form-control" value="Mahusay" required><br></td>
                      </tr>
                      <tr>
                        <td class="text-right"><label>First Name:</label></td>
                        <td></td>
                        <td><input type="text" class="form-control" value="Zoreck" required><br></td>
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
                        <td><input type="email" class="form-control" value="example123@yahoo.com" required><br></td>
                      </tr>
                      <tr>
                        <td class="text-right"><label>Contact Number:</label></td>
                        <td></td>
                        <td><input type="number" class="form-control" value="09421239876" required><br></td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center">
                            <button type="button" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp Save</button>
                        </td>
                    </tr>
                    </table> 
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