<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CES-DMS - Manage Accounts</title>

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
                    <a href="<?php echo site_url('Director/other_reports');?>"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>&nbsp Other Reports</a>
                </li>
                <li>
                    <a href="<?php echo site_url('Director/manage_accounts');?>" class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Manage Accounts</a>
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
                    <!-- Accounts -->
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Manage Accounts</h1>
                    <hr>
                    <a href="<?php echo site_url('Director/create_account');?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Create Account</button></a>
                    <br>
                    <br>

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Full Name</th>
                                <th class="text-center">Designation</th>
                                <th class="text-center">Office</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($active->result() as $user): ?>
                            <tr>
                                <td><?=$user->firstname?> <?=$user->lastname?></td>
                                <td><?=$user->designation?></td>
                                <td><?=$user->office?></td>
                                <td class="text-center">
                                    <?php echo form_open();?>
                                    <input type="hidden" class="userId" value="<?=$user->user_id?>"></input>
                                    <span id="editAccount" data-toggle="modal" data-target="#editModal">
                                        <a class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-pencil text-success"></span></a>
                                    </span>
                                    &nbsp 
                                    <a class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="glyphicon glyphicon-trash text-danger"></span></a>
                                    <?php echo form_close();?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- Pending Requests -->

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3><span class="glyphicon glyphicon-time" aria-hidden="true"></span>&nbsp Pending Requests</h3>
                        </div>
                        <div class="panel-body">

                        <table id="example1" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>School</th>
                                    <th>Department</th>
                                    <th>Organization</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="5"></td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($new->result() as $apply): ?>
                                    <tr>
                                        <td><?=$apply->lastname;?></td>
                                        <td><?=$apply->firstname;?></td>
                                        <td><?=$apply->office;?></td>
                                        <td><?=$apply->department;?></td>
                                        <td><?=$apply->organization;?></td>
                                        <td>
                                            <input type="hidden" value="<?=$apply->user_id?>"></input>
                                            <a href="" data-toggle="tooltip" data-placement="left" title="Accept"><span class="glyphicon glyphicon-ok text-success"></span></a>
                                            &nbsp 
                                            <a href="" data-toggle="tooltip" data-placement="right" title="Deny"><span class="glyphicon glyphicon-remove text-danger"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>        

        </div>

    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">EDIT ACCOUNT</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col-md-3">
                  <h5>First Name:</h5>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="fname" placeholder="Type your Firstname"></input>
                  </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h5>Last Name:</h5>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="lname" placeholder="Type your Lastname"></input>
                  </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h5>School:</h5>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="school" placeholder="Type your Office / School"></input>
                  </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h5>Department:</h5>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="dept" placeholder="Type your Office / Department"></input>
                  </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h5>Organization:</h5>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="org" placeholder="Type your Organization"></input>
                  </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h5>Username:</h5>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="uname" placeholder="Type the Username"></input>
                  </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <h5>Password:</h5>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="password" class="form-control" id="pass" placeholder="Type your Password"></input>
                  </div> 
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <div class="btn-group">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">&nbsp; Save &nbsp;</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Custom Scripts -->
    <script type="text/javascript">
        base_url = '<?=base_url()?>';
    </script>
    <script src="<?php echo base_url();?>assets/js/global.js"></script>
    <!-- DataTables Javascript
    <script src="<?php echo base_url();?>assets/datatable/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example1').DataTable({
                responsive: true,
                "pagingType": "full_numbers"
            });
        });
    </script>-->

</body>

</html>