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
                    <h5 class="designation">CES Director</h5>
                  </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/home');?>"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>&nbsp Endorsed Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/approved_proposals');?>"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Approved Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/reviews');?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp Reviewed Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/other_reports');?>" class="active"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>&nbsp Other Reports</a>
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
                    <!-- My Reports -->
                    <h1><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>&nbsp Coordinators' Reports</h1>
                    <hr>
                    <br>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th class="text-center">#</th>
                            <th class="text-center">Title of PPA Report</th>
                            <th class="text-center">Created By</th>
                            <th class="text-center">Date Created</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" class="text-center">-- No Reports to Display --</td>
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
                    </nav>   
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