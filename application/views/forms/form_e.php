<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - Fill Out Form E</title>

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
                      <img src="<?php echo base_url();?>assets/img/ces_logo_sm.png"> &nbsp; CESDMS
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
                        <h1>Filling Out Form E <small>CES Program/Project Completion Report Form</small></h1>
                        <hr>
                        <form>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>I. Preliminaries</h4>
                                </div>
                                <div class="panel-body">
                                    <table width="100%">
                                      <tr>
                                        <td width="25%"><strong>1.1 Complete Title of Program/Project</strong></td>
                                        <td width="2%"></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." required><br></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.2 Unit/s Responsible</strong></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." required><br></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.3 Program/Project Duration</strong></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." required><br></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3">
                                          <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center" width="5%">No.</th>
                                              <th class="text-center">Activities</th>
                                              <th class="text-center">Inclusive Dates</th>
                                              <th class="text-center">Total No. of Hours</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td class="text-center"><label>1</label></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control datepicker" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                              </tr>
                                              <tr>
                                                <td class="text-center"><label>2</label></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control datepicker" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <div class="text-center">
                                            <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                          </div>
                                          <br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.4 Final Beneficiaries/Target Groups</strong> <small>(specify the number per sector/group)</small></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." required><br></td>
                                      </tr>
                                      <tr>
                                        <td><strong>1.5 Partners/Collaborators</strong></td>
                                        <td></td>
                                        <td><input type="text" class="form-control" placeholder="Type Here..." required><br></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3">
                                          <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center">Intra USC Partners/Collaborators</th>
                                              <th class="text-center">Extra USC Partners/Collaborators</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                                <td><textarea class="form-control" rows="5" placeholder="Type Here..."></textarea></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>II. Participants, Partners and Beneficiaries</h4>
                                </div>
                                <div class="panel-body">
                                    <table width="100%">
                                      <tr>
                                        <td>
                                            <label>2.1 Summary</label> <small><em>(please write a summary of successes and expected impact of the program/project. Although there is no specifically required format just supply inputs to the items below. You may add items you may consider important)</em></small>
                                            <ul style="list-style:none">
                                              <li>
                                                <em>2.1.1. Background of the issue addressed by the project</em>
                                                <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                              </li>
                                              <li>
                                                <em>2.1.2. Major achievements of the program/project</em>
                                                <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                              </li>
                                              <li>
                                                <em>2.1.3. How results of different activities contribute to the larger goal of the program/project</em>
                                                <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                              </li>
                                            </ul>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.2 Overall strategy adopted for the implementation of the program/project</label> <small><em>(please describe in detail the overall strategy or approach used to ensure the accomplishment of outcomes. You may discuss here the framework of the program/project, if there is any)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.3 Achievements against specified goal</label> <small><em>(please highlight the outputs of the program/project against the goal identified for the program/project. The details can be sourced from your <strong>Form A</strong>)</em></small>
                                          <div class="alert alert-info" role="alert">
                                              <strong>For Outputs:</strong>
                                              <ul>
                                                <li>Please note whether outputs were achieved or not achieved. If not achieved, provide reason/s.</li>
                                                <li>Please quantify and give narrative assessment of results.</li>
                                              </ul>
                                          </div>
                                          <table class="table table-bordered" width="100%">
                                            <thead>
                                              <th class="text-center">Goal</th>
                                              <th class="text-center">Specific Objectives</th>
                                              <th class="text-center">Specific Activities</th>
                                              <th class="text-center">Outputs</th>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <div class="text-center">
                                            <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                          </div>
                                          <br>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.4 Observed impact of the program/project</label> <small><em>(please describe the observed and/or documented outcomes or impact of the program/project. You may provide as attachment some evidences to show these outcomes or impact)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.5 Challenges/difficulties and measures undertaken</label> <small><em>(please describe the challenges/difficulties encountered in all of the phases of the program/project and the measures or mechanisms undertaken to address them)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.6 Good practices</label> <small><em>(please provide all the good practices that resulted from the program/project)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <label>2.7 Lessons learned from the program/project</label> <small><em>(please describe the experiences and lessons learned by the students, faculty, staff especially in terms of program/project management and implementation, partnership and collaboration, community mobilization, capacity building, advocacy, among others)</em></small>
                                          <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                        </td>
                                      </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>III. Partnerships and Collaboration </h4>
                                </div>
                                <div class="panel-body">
                                  <table width="100%">
                                    <tr>
                                      <td>
                                        <label>3.1 Briefly describe the contributions of all your Intra and Extra USC partners/collaborators</label>
                                        <ul style="list-style:none">
                                          <li>
                                            3.1.1 Intra USC Partners/Collaborators
                                            <table class="table table-bordered" width="100%">
                                              <thead>
                                                <th class="text-center">Name of Partners/Collaborators</th>
                                                <th class="text-center">Actual Contributions</th>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                  <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <div class="text-center">
                                              <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                            </div>
                                          </li>
                                          <li>
                                            3.1.2 Extra USC Partners/Collaborators
                                            <table class="table table-bordered" width="100%">
                                              <thead>
                                                <th class="text-center">Name of Partners/Collaborators</th>
                                                <th class="text-center">Actual Contributions</th>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                  <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <div class="text-center">
                                              <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                            </div>
                                          </li>
                                        </ul>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.2 Assess your unit’s relationship with the partners/collaborators mentioned above. How have your relations affected the program/project?</label>
                                        <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <label>3.3 Describe the other links or opportunities gained as a consequence of the program/project.</label>
                                        <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>IV. Witness to the Word, In Action…</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> please describe how the program/project allowed students, faculty, staff to manifest their being Carolinians, Witnesses to the Word</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>V. Ways Forward</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> please explain how your experiences in this program/project can help future undertakings</p>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>VI. Attachments</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-info" role="alert">
                                      <p><strong>Instruction:</strong> please provide as attachment all documents you deem necessary and useful besides those already prescribed by Form E or the Portfolio Checklist</p>
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