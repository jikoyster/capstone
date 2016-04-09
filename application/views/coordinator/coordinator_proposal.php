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
                    <h5 class="designation">CES Coordinator</h5>
                  </div>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/home');?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/my_reports');?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp My Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/other_reports');?>"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>&nbsp Other Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/reviews');?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp Reviews</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/recommendations');?>"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp Recommendations</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Coordinator/settings');?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
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
                    <!-- My Proposals -->
                    <h1><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</h1>
                    <hr>
                    <a href="<?php echo site_url('Coordinator/create_proposal');?>" style="text-decoration:none"><button class="btn btn-success btn-lg"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Create Proposal</button></a>
                    <br>
                    <br>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th class="text-center">#</th>
                            <th class="text-center">Title of PPA Proposal</th>
                            <th class="text-center">Date Created</th>
                            <th class="text-center">Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td><a href="sample_form_a1.php">Barangay Talamban River Clean-up</a></td>
                                <td class="text-center">January 01, 2015</td>
                                <td class="text-center">noted by Dept. Chair</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td><a href="sample_form_a_revised.php">Barangay Labangon River Clean-up <span class="badge">revised</span></a></td>
                                <td class="text-center">January 01, 2015</td>
                                <td class="text-center">noted by Dept. Chair</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td><a href="sample_form_c.php">Barangay Lahug River Clean-up</a></td>
                                <td class="text-center">January 01, 2015</td>
                                <td class="text-center">noted by Dept. Chair</td>
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