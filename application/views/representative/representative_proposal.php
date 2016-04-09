<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - Home</title>

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
                    <h1><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp My Proposals</h1>
                    <hr>
                    <a href="<?php echo site_url('Representative/create_proposal');?>" style="text-decoration:none"><button class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Create Proposal</button></a>
                    <br>
                    <br>

                    <table id="proposal_list" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Proposal</th>
                            <th>Date & Time Created</th>
                            <th>Status</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <!-- display proposals -->
                    <tbody>
                        <?php $query = $this->db->get('proposal_header');

                        foreach ($query->result() as $row)
                        {
                            echo '<tr>';
                            echo '<td>'. $row->title .'</td>';
                            echo '<td>'. date("F d, Y | h:i A", strtotime($row->datetime_created) ) .'</td>';
                            echo '<td></td>';
                            echo '<td>Remarks</td>';
                            echo '</tr>';
                        } 
                        ?>
                        
                    </tbody>
                    <!-- end display -->
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- DataTables Javascript -->
    <script src="<?php echo base_url();?>assets/datatable/datatables.min.js"></script>

    <!-- Custom Script -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>
    <script src="<?php echo base_url();?>assets/js/proposals.js"></script>

    <script type="text/javascript">
            $('#proposal_list').DataTable({
                "pagingType": "full_numbers"
            });
    </script>
</body>

</html>