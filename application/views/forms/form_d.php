<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - Fill Out Form D</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.css">

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
                    <a href="<?php echo site_url('Representative/reports');?>" class="active"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/account_settings');?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
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
                    <div>
                        <h1>Filling Out Form D <small>CES Program/Project/Activity Report Form</small></h1>
                        <hr>
                        <form>
                            <div class="panel" align="center">
                                <div class="panel-body">
                                    <table width="100%">
                                        <tr>
                                            <td><label>Title:</label></td>
                                            <td colspan="3">
                                              <select class="form-control" required>
                                                <option>Name of Approved Proposal 1</option>
                                                <option>Name of Approved Proposal 2</option>
                                                <option>Name of Approved Proposal 3</option>
                                                <option>Name of Approved Proposal 4</option>
                                              </select></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><label>School:</label></td>
                                            <td>
                                              <select class="form-control" name="school" required>
                                              <option>-- Select your School --</option>
                                                <option value="School of Architecture, Fine Arts and Design">School of Architecture, Fine Arts and Design</option>
                                                <option value="School of Arts and Sciences">School of Arts and Sciences</option>
                                                <option value="School of Education">School of Education</option>
                                                <option value="School of Health Care Profession">School of Health Care Profession</option>
                                                <option value="School of Law and Governance">School of Law and Governance</option>
                                                <option value="School of Business and Economics">School of Business and Economics</option>
                                                <option value="School of Engineering">School of Engineering</option>
                                              </select>
                                            </td>
                                            <td><label>&nbsp Department:</label></td>
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
                                              </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Inclusive Date:</label></td>
                                            <td><input type="text" name="act_duration1" placeholder="Date Start of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
                                            <td class="text-center"><em>to</em></td>
                                            <td><input type="text" name="act_duration2" placeholder="Date End of Activity (mm/dd/yyyy)" class="form-control datepicker" required></td>
                                        </tr>
                                        <tr>
                                            <td><label>Venue:</label></td>
                                            <td colspan="3"><input type="text" class="form-control" placeholder="Where will the activity take place?" required></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>I. Introduction</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Provide here an explanation or a rationale of the undertaken activity.</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>II. Participants, Partners and Beneficiaries</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Present here a summary of the participants’ profile as well as the roles and responsibilities assumed. (the attendance sheet will serve as an attachment).</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>III. Highlights of the Activity</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Point out the important features or parts of the activity as perceived by the sectors specified below:</p>
                                    </div>
                                    <!-- <table class="table table-bordered" width="100%">
                                      <thead>
                                        <th width="33%" class="text-center">As perceived by the Beneficiaries</th>
                                        <th width="33%" class="text-center">As perceived by the Students</th>
                                        <th width="33%" class="text-center">As perceived by the Faculty/Staff</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                          <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                          <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                        </tr>
                                      </tbody>
                                    </table> -->

                                    <label>As perceived by the Beneficiaries</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                    <label>As perceived by the Students</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                    <label>As perceived by the Faculty/Staff</label>
                                    <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>IV. Challenges/Difficulties Encountered</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> Enumerate and discuss the various difficulties encountered during the implementation of the activity. This may include matters such as logistics, manpower, program, or those that may have been encountered by the participants. Also discuss how the group addressed said challenges/problems.</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>V. Attachments</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p>
                                        <strong>Instruction:</strong> Please provide the following as attachments:
                                        <ol>
                                          <li>Program of Activity</li>
                                          <li>Attendance sheet/s</li>
                                          <li>At most 10 photos with appropriate captions</li>
                                          <li>Feedback forms from participants</li>
                                          <li>Reflection Papers from students</li>
                                          <li>Liquidation Report (if applicable)</li>
                                        </ol>
                                      </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Exit Modal -->
            <div class="modal fade" tabindex="-1" role="dialog" id="exit">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-warning"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Warning!</h4>
                  </div>
                  <div class="modal-body">
                    Are you sure you want cancel creating the report? All progress will not be saved.
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <a href="representative_report.php" style="text-decoration:none">
                        <button type="button" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        </div>

    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Bootstrap-Datepicker JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
    <!-- Custom Scripts -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>
    <script src="<?php echo base_url();?>assets/js/proposals.js"></script>
    <script src="<?php echo base_url();?>assets/js/form_processing.js"></script>

</body>

</html>