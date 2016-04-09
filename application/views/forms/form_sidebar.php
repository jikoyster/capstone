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
            <a href="<?php echo site_url('Users/logout');?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp Logout</a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->