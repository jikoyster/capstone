<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - Create Proposal</title>

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
                    <a href="<?php echo site_url('Representative/home');?>" class="active"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</a>
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
            <a href="#menu-toggle" class="btn btn-default btn-xs pull-right" id="menu-toggle">
                <strong>Toggle Sidebar</strong> &nbsp
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </a>
            <div class="container-fluid">
                <div class="row tab-content">
                    <!-- My Proposals -->
                    <h1><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Create Proposal</h1>
                    <hr>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3>Types of CES Program/Project/Activity Proposals</h3>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <strong>1. Course-based CES Program/Project/Activity</strong>
                                </div>
                                <table class="table table-bordered" width="100%">
                                    <tr>
                                        <td>
                                            <ul style="list-style-type:none">
                                                <li>a. Deadline for 1st Semester: last Friday of June</li>
                                                <li>b. Deadline for 2nd Semester: last Friday of September</li>
                                            </ul>
                                        </td>
                                        <td width="30%">
                                            <a href="<?php echo site_url('Representative/form_a_1');?>" style="text-decoration:none">
                                                <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <strong>2. CES Proposals from Department/School and Student Organizations (co-curricular and extra-curricular)</strong>
                                </div>
                                <table class="table table-bordered" width="100%">
                                    <tr>
                                        <td>
                                            <ul style="list-style-type:none">
                                                <li>a. <strong>Medium and Long term proposals planned by 1st quarter of the year</strong> (first Friday of February)</li>
                                            </ul>
                                        </td>
                                        <td width="30%">
                                            <a href="<?php echo site_url('Representative/form_a_1');?>" style="text-decoration:none">
                                                <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <ul style="list-style-type:none">
                                                <li>
                                                    b. <strong>Submitted Within the Academic Year: <span class="text-danger"><em>Deadlines only apply to items i, ii, iii and not for Special Projects</em></span></strong>
                                                    <ol>
                                                        <li>Deadline for 1st Semester: last Friday of June</li>
                                                        <li>Deadline for 2nd Semester: last Friday of September</li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <table class="table table-bordered" width="100%">
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>i.</strong> Medium and Long Term proposal and planned within the academic year</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Representative/form_a_1');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>ii.</strong> Short term proposals (one time activity; or to be implemented in one semester) with cash out requirement</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Representative/form_a');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>iii.</strong> Short term proposals (one time activity; or to be implemented in one semester) without cash out requirement</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Representative/form_a');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>iv.</strong> Special Projects (those requested by partners from within and outside USC) with cash out requirement</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Representative/form_c');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-success">
                                                    <ul style="list-style-type:none">
                                                        <li><strong>v.</strong> Special Projects (those requested by partners from within and outside USC) without cash out requirement</li>
                                                    </ul>
                                                </td>
                                                <td width="30%">
                                                    <a href="<?php echo site_url('Representative/form_c');?>" style="text-decoration:none">
                                                        <button type="button" class="btn btn-success btn-block btn-lg">Proceed &nbsp<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
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