<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - Your Profile Settings</title>

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
                    <h3>
                      <img src="<?php echo base_url();?>assets/img/ces_logo_sm.png">
                      &nbsp CESDMS
                    </h3>
                  </a>
                </li>
                <li>
                  <div align="center">
                    <img src="<?php echo base_url();?>assets/img/usc_white.png" alt="..." class="img-circle navlogo" style="height:140px; width:140px">
                    <h4 class="name"><?php echo $fname." ".$lname;?></h4>
                    <h5 class="designation">CES Representative</h5>
                  </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/home');?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/reports');?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/account_settings');?>" class="active"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Users/logout')?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a>
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
                <?php echo form_open('Representative/process_settings');?>
                    <!-- Account Settings -->
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</h1>
                    <hr>
                    <br>
                    <div class="container" style="width: 90%">
                      <div class="row">
                        <div class="col-md-2"><label>Last Name:</label></div>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="lname" value="<?php echo($lname);?>" required>
                        </div>
                        <div class="col-md-2"><label>First Name:</label></div>
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="lname" value="<?php echo($fname);?>" required>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-2"><label>School:</label></div>
                        <div class="col-md-4">
                          <select class="form-control" name="school" required>
                            <option value="School of Architecture, Fine Arts and Design" <?php if($school=="School of Architecture, Fine Arts and Design") echo 'selected="selected"'; ?>>
                              School of Architecture, Fine Arts and Design</option>
                            <option value="School of Arts and Sciences" <?php if($school=="School of Arts and Sciences") echo 'selected="selected"'; ?>>
                              School of Arts and Sciences</option>
                            <option value="School of Education" <?php if($school=="School of Education") echo 'selected="selected"'; ?>>
                              School of Education</option>
                            <option value="School of Health Care Profession" <?php if($school=="School of Health Care Profession") echo 'selected="selected"'; ?>>
                              School of Health Care Profession</option>
                            <option value="School of Law and Governance"<?php if($school=="School of Law and Governance") echo 'selected="selected"'; ?>>
                              School of Law and Governance</option>
                            <option value="School of Business and Economics" <?php if($school=="School of Business and Economics") echo 'selected="selected"'; ?>>
                              School of Business and Economics</option>
                            <option value="School of Engineering" <?php if($school=="School of Engineering") echo 'selected="selected"'; ?>>
                              School of Engineering</option>
                          </select>
                        </div>
                        <div class="col-md-2"><label>Deparment:</label></div>
                        <div class="col-md-4">
                          <select class="form-control" name="dept" required>
                            <option disabled>-- School of Architecture, Fine Arts and Design --</option>
                              <option value="Architecture" <?php if($dept=="Architecture") echo 'selected="selected"'; ?>>
                                Architecture</option>
                              <option value="Fine Arts" <?php if($dept=="Fine Arts") echo 'selected="selected"'; ?>>
                                Fine Arts</option>
                            <option disabled>-- School of Arts and Sciences --</option>
                              <option value="Languages and Literature" <?php if($dept=="Languages and Literature") echo 'selected="selected"'; ?>>
                                Languages and Literature</option>
                              <option value="Philosophy and Religious Studies" <?php if($school=="Philosophy and Religious Studies") echo 'selected="selected"'; ?>>
                                Philosophy and Religious Studies</option>
                              <option value="Psychology" <?php if($dept=="Psychology") echo 'selected="selected"'; ?>>
                                Psychology</option>
                              <option value="Anthropology, Sociology and History" <?php if($school=="Anthropology, Sociology and History") echo 'selected="selected"'; ?>>
                                Anthropology, Sociology and History</option>
                              <option value="Biology" <?php if($dept=="Biology") echo 'selected="selected"'; ?>>
                                Biology</option>
                              <option value="Chemistry" <?php if($dept=="Chemistry") echo 'selected="selected"'; ?>>
                                Chemistry</option>
                              <option value="Computer and Information Sciences" <?php if($dept=="Computer and Information Sciences") echo 'selected="selected"'; ?>>
                                Computer and Information Sciences</option>
                              <option value="Mathematics" <?php if($dept=="Mathematics") echo 'selected="selected"'; ?>>
                                Mathematics</option>
                              <option value="Physics" <?php if($dept=="Physics") echo 'selected="selected"'; ?>>
                                Physics</option>
                            <option disabled>-- School of Education --</option>
                              <option value="Teacher Education" <?php if($dept=="Teacher Education") echo 'selected="selected"'; ?>>
                                Teacher Education</option>
                              <option value="Science and Mathematics" <?php if($dept=="Science and Mathematics") echo 'selected="selected"'; ?>>
                                Science and Mathematics</option>
                              <option value="Physical Education" <?php if($dept=="Physical Education") echo 'selected="selected"'; ?>>
                                Physical Education</option>
                            <option disabled>-- School of Health Care Profession -</option>
                              <option value="Nursing" <?php if($dept=="Nursing") echo 'selected="selected"'; ?>>
                                Nursing</option>
                              <option value="Pharmacy" <?php if($dept=="Pharmacy") echo 'selected="selected"'; ?>>
                                Pharmacy</option>
                              <option value="Nutrition and Dietics" <?php if($dept=="Nutrition and Dietics") echo 'selected="selected"'; ?>>
                                Nutrition and Dietics</option>
                            <option disabled>-- School of Law and Governance --</option>
                              <option value="Law" <?php if($dept=="Law") echo 'selected="selected"'; ?>>
                                Law</option>
                              <option value="Political Science" <?php if($dept=="Political Science") echo 'selected="selected"'; ?>>
                                Political Science</option>
                            <option disabled>-- School of Business and Economics --</option>
                              <option value="Accountancy" <?php if($dept=="Accountancy") echo 'selected="selected"'; ?>>
                                Accountancy</option>
                              <option value="Business Administration" <?php if($dept=="Business Administration") echo 'selected="selected"'; ?>>
                                Business Administration</option>
                              <option value="Economics" <?php if($dept=="Economics") echo 'selected="selected"'; ?>>
                                Economics</option>
                              <option value="Hospitality Management" <?php if($dept=="Hospitality Management") echo 'selected="selected"'; ?>>
                                Hospitality Management</option>
                            <option disabled>-- School of Engineering --</option>
                              <option value="Chemical Engineering" <?php if($dept=="Chemical Engineering") echo 'selected="selected"'; ?>>
                                Chemical Engineering</option>
                              <option value="Civil Engineering" <?php if($dept=="Civil Engineering") echo 'selected="selected"'; ?>>
                                Civil Engineering</option>
                              <option value="Computer Engineering" <?php if($dept=="Computer Engineering") echo 'selected="selected"'; ?>>
                                Computer Engineering</option>
                              <option value="Electronics and Communications Engineering" <?php if($dept=="Electronics and Communications Engineering") echo 'selected="selected"'; ?>>
                                Electronics and Communications Engineering</option>
                              <option value="Electrical Engineering" <?php if($dept=="Electrical Engineering") echo 'selected="selected"'; ?>>
                                Electrical Engineering</option>
                              <option value="Industrial Engineering" <?php if($dept=="Industrial Engineering") echo 'selected="selected"'; ?>>
                                Industrial Engineering</option>
                              <option value="Mechanical Engineering" <?php if($dept=="Mechanical Engineering") echo 'selected="selected"'; ?>>
                                Mechanical Engineering</option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-2"><label>E-mail Address:</label></div>
                        <div class="col-md-4">
                          <input type="email" class="form-control" value="<?php echo($email);?>" name="email" required>
                        </div>
                        <div class="col-md-2"><label>Contact #:</label></div>
                        <div class="col-md-4">
                          <input type="number" class="form-control" value="<?php echo($cnum);?>" name="cnum" required>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                          <button type="submit" class="btn btn-success" name="save" value="save" style="width:100%"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE</button>
                        </div>
                        <div class="col-md-4"></div>
                      </div>
                <?php echo form_close();?> 
                </div>
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