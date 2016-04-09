<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - My Reports</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/datatable/datatables.min.css"/>

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
                    <!-- My Reports -->
                    <h1><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</h1>
                    <hr>
                    <a href="<?php echo site_url('Representative/create_report');?>" style="text-decoration:none"><button class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Create Report</button></a>
                    <br>
                    <br>

                    <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                    </tbody>
                    </table>

                    <!-- <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th class="text-center">#</th>
                            <th class="text-center">Title of PPA Report</th>
                            <th class="text-center">Date Created</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td><a href="<?php //echo site_url('Representative/sample_report1');?>">Barangay Talamban River Clean-up</a></td>
                                <td class="text-center">January 1, 2015</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td><a href="<?php //echo site_url('Representative/sample_report2');?>">Barangay Talamban River Clean-up</a></td>
                                <td class="text-center">January 1, 2015</td>
                            </tr>
                        </tbody>
                    </table>
                    <nav align="center">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>    -->
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Script -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>

    <!-- DataTables Javascript -->
    <script src="<?php echo base_url();?>assets/datatable/datatables.min.js"></script>

</body>

</html>