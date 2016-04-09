<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - Fill Out Form A</title>

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
                    <a href="<?php echo site_url('Representative/home');?>" class="active"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/reports');?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
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
                        <h1>Filling Out Form A <small>CES Program/Project/Activity Proposal (<em>Concept Note</em>)</small></h1>
                        <hr>
                        <?php echo form_open('Proposals/process_forms')?>
                            <div class="panel" align="center">
                                <div class="panel-body">
                                    <table width="100%">
                                        <tr>
                                            <td><label>Title:</label></td>
                                            <td colspan="4"><input type="text" class="form-control" name="title" placeholder="Name of the Program/Project/Activity" required></td>
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
                                            <td colspan="3"><input type="text" class="form-control" name="venue" placeholder="Where will the activity take place?" required></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>
                                      I. Rationale and Contextualization &nbsp&nbsp&nbsp&nbsp
                                      <span class="glyphicon glyphicon-question-sign pull-right" data-toggle="collapse" data-target="#info_1"></span>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div id="info_1" class="collapse">
                                      <div class="well well-sm">
                                        <p>
                                          This portion will serve as the justification for your proposal. Please provide the following minimum information for the rationale and introduction of your program/project/activity:
                                          <ol>
                                            <li>Current condition of the community</li>
                                            <li>Problem/need identified by the unit that you intend to address</li>
                                            <li>Data source as well as the process underwent to generate the data</li>
                                            <li>How will the unit respond to the condition? What expertise and competencies from the unit or in collaboration with others will be useful to address the identified condition?</li>
                                          </ol>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" name="rationale" placeholder="Type Here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>
                                      II. Goal, Objectives, and Outcomes &nbsp&nbsp&nbsp
                                      <span class="glyphicon glyphicon-question-sign pull-right" data-toggle="collapse" data-target="#info_2"></span>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div id="info_2" class="collapse">
                                      <div class="well well-sm">
                                        <p>
                                          This section must enumerate the following items:
                                          <ol>
                                            <li>Over-all goal of the proposed program/project/activity</li>
                                            <li>The specific objectives that will be useful in achieving the goal (be sure they are SMART)</li>
                                            <li>What are the expected outcomes after implementing the program/project/activity</li>
                                          </ol>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" name="goal" placeholder="Type Here..."></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>
                                      III. Participants, Partners and Beneficiaries &nbsp&nbsp
                                      <span class="glyphicon glyphicon-question-sign pull-right" data-toggle="collapse" data-target="#info_3"></span>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div id="info_3" class="collapse">
                                      <div class="well well-sm">
                                        <p>
                                          This part must explicitly provide the specific roles/responsibilities or deliverables as well as benefits of the following:
                                          <ol>
                                            <li>Implementing team from USC/Unit</li>
                                            <li>Internal and external partners</li>
                                            <li>Beneficiaries and/or partner community/organization/institutionWhat are the expected outcomes after implementing the program/project/activity</li>
                                          </ol>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" name="partners" placeholder="Type Here..."></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>IV. Outline of Activities</h4>
                                </div>
                                <div class="panel-body">
                                    <table id="activity-outline" class="table table-bordered">
                                      <thead>
                                          <th class="text-center">Tentative Date</th>
                                          <th class="text-center">Activities</th>
                                          <th class="text-center">Participants Needed</th>
                                          <th class="text-center">Person/s In-charge</th>
                                          <th class="text-center"><button type="button" id="add-activity-outline-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button></th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><input type="text" name="tentative[]" class="form-control datepicker" required></td>
                                          <td><input type="text" name="activity[]" class="form-control" required></td>
                                          <td><input type="number" name="participants[]" min="1" class="form-control" required></td>
                                          <td><input type="text" name="persons[]" class="form-control" required></td>
                                          <td></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>V. Budgetary Requirements</h4>
                                </div>
                                <div class="panel-body">
                                    <table id="budgetary" class="table table-bordered">
                                      <thead>
                                          <th class="text-center" width="20%">Particulars</th>
                                          <th class="text-center" width="20%">Frequency</th>
                                          <th class="text-center" width="20%">Quantity</th>
                                          <th class="text-center" width="20%">Amount</th>
                                          <th class="text-center" width="20%">Subtotal</th>
                                          <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                      </thead>
                                      <thead>
                                          <th colspan="6" class="bg-success">
                                            A. Meals and Snacks
                                            <button type="button" id="add-meals-row" class="pull-right btn btn-success btn-sm"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                                          </th>
                                      </thead>
                                      <tbody>
                                        <div class="mealsNsnacks">
                                          <tr>
                                            <td><input type="text" name="a_particulars[]" id="a_particulars" class="particulars form-control" required></td>
                                            <td><input type="number" name="a_frequency[]" id="a_frequency" class="frequency form-control" min="1" required></td>
                                             <td><input type="number" name="a_quantity[]" id="a_quantity" class="quantity form-control" min="1" required></td>
                                            <td>
                                              <div class="input-group">
                                                <div class="input-group-addon">₱</div>
                                                <input type="number" name="a_amount[]" id="a_amount" class="amount form-control" step="0.01" min="0.25" required>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group">
                                                <div class="input-group-addon">₱</div>
                                                <input type="number" name="a_total[]" id="a_product" class="subtotal form-control" step="0.01" readonly>
                                              </div>
                                            </td>
                                            <td>
                                              <button type="button" class="rm-meals-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                            </td>
                                          </tr>
                                        </div>
                                      </tbody>
                                      <thead>
                                          <th colspan="6" class="bg-success">
                                            B. Transportation
                                            <button type="button" id="add-transpo-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                                          </th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><input type="text" name="b_particulars[]" class="particulars form-control" required></td>
                                          <td><input type="number" name="b_frequency[]" class="frequency form-control" min="1" required></td>
                                          <td><input type="number" name="b_quantity[]" class="quantity form-control" min="1" required></td>
                                          <td>
                                            <div class="input-group">
                                              <div class="input-group-addon">₱</div>
                                              <input type="number" name="b_amount[]" class="amount form-control" step="0.01" min="0.25" required>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="input-group">
                                              <div class="input-group-addon">₱</div>
                                              <input type="number" name="b_total[]" id="b_product" class="subtotal form-control" step="0.01" readonly>
                                            </div>
                                          </td>
                                          <td>
                                            <button type="button" class="rm-transpo-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                          </td>
                                        </tr>
                                      </tbody>
                                      <thead>
                                          <th colspan="6" class="bg-success">
                                            C. Materials
                                            <button type="button" id="add-materials-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                                          </th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><input type="text" name="c_particulars[]" class="particulars form-control" required></td>
                                          <td><input type="number" name="c_frequency[]" class="frequency form-control" min="1" required></td>
                                          <td><input type="number" name="c_quantity[]" class="quantity form-control" min="1" required></td>
                                          <td>
                                            <div class="input-group">
                                              <div class="input-group-addon">₱</div>
                                              <input type="number" name="c_amount[]" class="amount form-control" step="0.01" min="0.25" required>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="input-group">
                                              <div class="input-group-addon">₱</div>
                                              <input type="number" name="c_total[]" id="c_product" class="subtotal form-control" step="0.01" readonly>
                                            </div>
                                          </td>
                                          <td>
                                            <button type="button" class="rm-materials-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                          </td>
                                        </tr>
                                      </tbody>
                                      <tfoot>
                                        <tr>
                                          <td colspan="4">
                                            <button type="button" id="calc" class="pull-left btn btn-default"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp Calculate Total</button>
                                            <h4 class="text-right">Grand Total:</h4>
                                          </td>
                                          <td colspan="2" class="calculation">
                                            <div class="input-group">
                                            <div class="input-group-addon">₱</div>
                                             <input type="number" id="grand-total" class="grand_total form-control text-center" name="grandtotal" readonly>
                                            </div>
                                          </td>
                                        </tr>
                                      </tfoot>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <a href="<?php echo site_url('Representative/form_b');?>" style="text-decoration:none">
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="submit" value="next">Next &nbsp<span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></button>
                              </a>
                            </div>
                        <?php echo form_close();?>
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
                    Are you sure you want cancel creating the proposal? All progress will not be saved.
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <a href="<?php echo site_url('Representative/create_proposal');?>" style="text-decoration:none">
                        <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
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
    <!-- Custom Script -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/global.js"></script>
    <script src="<?php echo base_url();?>assets/js/proposals.js"></script>
    <script src="<?php echo base_url();?>assets/js/form_processing.js"></script>

</body>

</html>