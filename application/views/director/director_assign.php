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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.css">

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
                    <div>
                        <h1>Assign Review Committee</h1>
                        <hr>
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <table width="80%" align="center">
                              <tr>
                                <td class="text-right" width="38%"><label>CES Proposal Title:</label></td>
                                <td width="2%"></td>
                                <td width="40%">Barangay Talamban River Clean-up</td>
                              </tr>
                              <tr>
                                <td class="text-right" width="38%"><label>Unit/s Proponent:</label></td>
                                <td width="2%"></td>
                                <td width="40%"><a href="" data-toggle="modal" data-target="#amanda_profile">Amanda Quinal</a></td>
                              </tr>
                              <tr>
                                <td class="text-right" width="38%"><label>School:</label></td>
                                <td width="2%"></td>
                                <td width="40%">School of Arts & Sciences</a></td>
                              </tr>
                              <tr>
                                <td class="text-right" width="38%"><label>Department:</label></td>
                                <td width="2%"></td>
                                <td width="40%">Computer and Information Sciences</td>
                              </tr>
                            </table>
                          </div>
                        </div>

                        <div class="panel panel-default">
                          <div class="panel-body">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <label>Committee 1:</label>
                              <select class="form-control">
                                <option>SAFAD - Tabasuarez, Josuha</option>
                                <option>SAFAD - Abella, Catherine</option>
                                <option>SAS - Gelbolingo, Devra</option>
                                <option>SAS - Salve, Daisy</option>
                                <option>SED - Malonjao, Mariter</option>
                                <option>SED - Cañizares, Monell John</option>
                                <option>SHCP - Pontillas, Laarne</option>
                                <option>SHCP - Abapo, Glenda</option>
                                <option>SLG - Capanas, Glenn</option>
                                <option>SLG - Conales, Kay</option>
                              </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <label>Committee 2:</label>
                              <select class="form-control">
                                <option>SAFAD - Tabasuarez, Josuha</option>
                                <option>SAFAD - Abella, Catherine</option>
                                <option>SAS - Gelbolingo, Devra</option>
                                <option>SAS - Salve, Daisy</option>
                                <option>SED - Malonjao, Mariter</option>
                                <option>SED - Cañizares, Monell John</option>
                                <option>SHCP - Pontillas, Laarne</option>
                                <option>SHCP - Abapo, Glenda</option>
                                <option>SLG - Capanas, Glenn</option>
                                <option>SLG - Conales, Kay</option>
                              </select>
                            </div>
                          </div>
                          <div class="panel-body">
                            <table class="table table-bordered table-striped">
                              <thead>
                                <th class="text-center" width="37%">Coordinator's Name</th>
                                <th class="text-center" width="37%">Office</th>
                                <th class="text-center" width="25%">No. of Reviews Done</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Tabasuarez, Josuha</td>
                                  <td class="text-center">SAFAD</td>
                                  <td class="text-center">1</td>
                                </tr>
                                <tr>
                                  <td>Abella, Catherine</td>
                                  <td class="text-center">SAFAD</td>
                                  <td class="text-center">1</td>
                                </tr>
                                <tr>
                                  <td>Gelbolingo, Devra</td>
                                  <td class="text-center">SAS</td>
                                  <td class="text-center">2</td>
                                </tr>
                                <tr>
                                  <td>Salve, Daisy</td>
                                  <td class="text-center">SAS</td>
                                  <td class="text-center">2</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                          <button type="button" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    </div>
                </div>
            </div>

            <!-- Amanda Profile -->
            <div class="modal fade" tabindex="-1" role="dialog" id="amanda_profile">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp User's Information</h4>
                  </div>
                  <div class="modal-body">
                    <table>
                        <tr>
                            <td width="35%"><label>Full Name</label></td>
                            <td width="5%"><label>:</label></td>
                            <td>Amanda Quinal</td>
                        </tr>
                        <tr>
                            <td><label>Office/Unit</label></td>
                            <td><label>:</label></td>
                            <td>CAS - Computer and Information Sciences</td>
                        </tr>
                        <tr>
                            <td><label>Designation</label></td>
                            <td><label>:</label></td>
                            <td>Representative</td>
                        </tr>
                        <tr>
                            <td><label>Email Address</label></td>
                            <td><label>:</label></td>
                            <td>amanda_example@yahoo.com</td>
                        </tr>
                        <tr>
                            <td><label>Contact Number</label></td>
                            <td><label>:</label></td>
                            <td>09123456789</td>
                        </tr>
                    </table>
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

    <!-- Custom Scripts -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>

</body>

</html>