<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sample Revised Form A</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

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
                      &nbsp CES-DMS
                    </h3>
                  </a>
                </li>
                <li>
                  <div class="userinfo">
                    <img src="<?php echo base_url();?>assets/img/usc.png" alt="..." class="img-circle" style="height:140px; width:140px">
                    <h4><?php echo $fname." ".$lname;?></h4>
                    <h5>CES Representative</h5>
                  </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/home');?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/reports');?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Representative/account_settings');?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Users/logout')?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>&nbsp <strong>Toggle Menu</strong>
            </a>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        <h1>USC-CES FORM A <small>CES Program/Project/Activity Proposal (<u>Concept Note</u>)</small></h1>
                        <hr>

                        <div class="panel" align="center">
                            <div class="panel-body"><p>
                                  <h2>Barangay Labangon River Clean-up <span class="badge">revised</span></h2>
                                  <h3>School of Arts & Sciences</h3>
                                  <h4>Computer and Information Sciences</h4>
                                  <h5>Barangay Talamban, Cebu City</h5>
                                  <h5>December 25, 2015</h5>
                                </p>
                            </div>
                        </div>

                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <label>Progress:</label>
                          </div>
                          <div class="panel-body">
                            <div class="progress">
                              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                            <div class="text-success">
                              <table>
                                <tr>
                                  <td><span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp Department Chair notes revised CES proposal - <strong>January 1, 2016</strong></td>
                                </tr>
                                <tr>
                                  <td><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>&nbsp CES Coordinator recommends endorsement of revised CES proposal</td>
                                </tr>
                                <tr>
                                  <td><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>&nbsp School Dean endorses revised CES Proposals</td>
                                </tr>
                                <tr>
                                  <td><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>&nbsp Review Committee assesses revised CES proposal</td>
                                </tr>
                                <tr>
                                  <td><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>&nbsp VPPA approves the CES Proposal</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>I. Rationale and Contextualization</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>II. Goal, Objectives, and Outcomes</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>III. Participants, Partners and Beneficiaries</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-justify">Lorem ipsum dolor sit amet, usu an legimus vivendum adolescens, pro no vidisse definitiones, quas mundi quo ex. Eam at ullum quidam, omnesque verterem his te. Posse nonumy impedit ea qui, alii velit nulla eu vim. Indoctum volutpat sed at. Essent accusam constituam in vis, duo agam nonumy principes ea, nec putent numquam definitionem ad. Cum scripta oportere voluptaria an.</p>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>IV. Outline of Activities</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                  <thead>
                                      <th class="text-center">Tentative Date</th>
                                      <th class="text-center">Activities</th>
                                      <th class="text-center">Participants Needed</th>
                                      <th class="text-center">Person/s In-charge</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-center">December 25, 2015</td>
                                      <td class="text-center">Feeding</td>
                                      <td class="text-center">100</td>
                                      <td class="text-center">DynaCom Society</td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                       
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>V. Budgetary Requirements</h4>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                  <thead>
                                      <th class="text-center" width="20%">Particulars</th>
                                      <th class="text-center" width="20%">Frequency</th>
                                      <th class="text-center" width="20%">Quantity</th>
                                      <th class="text-center" width="20%">Amount</th>
                                      <th class="text-center" width="20%">Total</th>
                                  </thead>
                                  <thead>
                                      <th colspan="5" class="bg-success">A. Meals and Snacks</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                  </tbody>
                                  <thead>
                                      <th colspan="5" class="bg-success">B. Transportation</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                  </tbody>
                                  <thead>
                                      <th colspan="5" class="bg-success">C. Materials</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                    <tr>
                                      <td class="text-center">Sample</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">10</td>
                                      <td class="text-center">₱ 100.00</td>
                                      <td class="text-center">₱ 100.00</td>
                                    </tr>
                                    <tr>
                                      <td class="text-right" colspan="4"><h4>Total:</h4></td>
                                      <td class="text-center"><h4>₱ 600.00</h4></td>
                                    </tr>
                                  </tbody>
                                </table>
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

    <!-- Customized JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <!-- Datepicker Script -->
    <script type="text/javascript">
      $('.datepicker').datepicker({
        todayBtn: "linked"
      });
    </script>

</body>

</html>