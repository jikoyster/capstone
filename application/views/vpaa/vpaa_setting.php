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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

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
                    <h5 class="designation">Vice President of Academic Affairs</h5>
                  </div>
                </li>
                <li>
                    <a href="vpaa_approve.php"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp Approval</a>
                </li>
                <li>
                    <a href="vpaa_setting.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</a>
                </li>
                <li>
                    <a href="index.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a>
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
                    <!-- Account Settings -->
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp Account Settings</h1>
                    <hr>
                    <table width="70%" align="center">
                      <tr>
                        <td class="text-right"><label>Last Name:</label></td>
                        <td width="2%"></td>
                        <td><input type="text" class="form-control" value="Mahusay" required><br></td>
                      </tr>
                      <tr>
                        <td class="text-right"><label>First Name:</label></td>
                        <td></td>
                        <td><input type="text" class="form-control" value="Zoreck" required><br></td>
                      </tr>
                      <tr>
                        <td colspan="3" align="center">
                            <button type="button" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp Save</button>
                        </td>
                    </tr>
                    </table> 
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