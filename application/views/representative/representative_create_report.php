<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - Create Report</title>

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
                    <a href="<?php echo site_url('Representative/reports');?>" class="active"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
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
            <a href="#menu-toggle" class="btn btn-default btn-xs pull-right" id="menu-toggle">
                <strong>Toggle Sidebar</strong> &nbsp
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </a>
            <div class="container-fluid">
                <div class="row tab-content">
                    <!-- My Proposals -->
                    <h1><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Create Report</h1>
                    <hr>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>Types of CES Program/Project/Activity Reports</h3>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-success">
                                <table class="table table-bordered" width="100%">
                                    <tr>
                                        <td>
                                            <h4>USC-CES Form D CES Activity Report Form</h4>
                                        </td>
                                        <td width="30%">
                                            <a href="<?php echo site_url('Representative/form_d');?>" style="text-decoration:none">
                                                <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>USC-CES Form E CES Program or Project Completion Report Form</h4>
                                        </td>
                                        <td width="30%">
                                            <a href="<?php echo site_url('Representative/form_e');?>" style="text-decoration:none">
                                                <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                            </a>
                                        </td>
                                    </tr>
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

    <!-- Custom Scripts -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>

</body>

</html>