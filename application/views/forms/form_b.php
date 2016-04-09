<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - Fill Out Form B</title>

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

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default btn-xs pull-right" id="menu-toggle">
                <strong>Toggle Sidebar</strong> &nbsp
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </a>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        <h1>Filling Out Form B <small>CES Program/Project/Activity Proposal (<em>Details</em>)</small></h1>
                        <hr>
                        <?php echo form_open('Proposals/process_forms')?>
                            

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>I. Program/Project/Activity Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                      <thead>
                                        <th class="bg-success">A. College/School/Department/Unit Responsible (<em>please <span class="text-danger">check/tick</span> the appropiate item</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr> <td class="col-md-8">
                                         
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">CES Office</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#sas">School of Arts and Sciences</label>
                                                    <div id="sas" class="collapse">
                                                      <select class="form-control">
                                                        <option>-- Select your Department --</option>
                                                        <option value="Languages and Literature">Languages and Literature</option>
                                                        <option value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                                                        <option value="Psychology">Psychology</option>
                                                        <option value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                                                        <option value="Biology">Biology</option>
                                                        <option value="Chemistry">Chemistry</option>
                                                        <option value="Computer and Information Sciences">Computer and Information Sciences</option>
                                                        <option value="Mathematics">Mathematics</option>
                                                        <option value="Physics">Physics</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#safad">School of Architecture, Fine Arts and Design</label>
                                                    <div id="safad" class="collapse">
                                                      <select class="form-control">
                                                        <option>-- Select your Department --</option>
                                                        <option value="Architecture">Architecture</option>
                                                        <option value="Fine Arts">Fine Arts</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#soed">School of Education</label>
                                                    <div id="soed" class="collapse">
                                                      <select class="form-control">
                                                        <option>-- Select your Department --</option>
                                                        <option value="Teacher Education">Teacher Education</option>
                                                        <option value="Science and Mathematics">Science and Mathematics</option>
                                                        <option value="Physical Education">Physical Education</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#soe">School of Engineering</label>
                                                    <div id="soe" class="collapse">
                                                      <select class="form-control">
                                                        <option>-- Select your Department --</option>
                                                        <option value="Chemical Engineering">Chemical Engineering</option>
                                                        <option value="Civil Engineering">Civil Engineering</option>
                                                        <option value="Computer Engineering">Computer Engineering</option>
                                                        <option value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                                        <option value="Electrical Engineering">Electrical Engineering</option>
                                                        <option value="Industrial Engineering">Industrial Engineering</option>
                                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td> 
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" value=""data-toggle="collapse" data-target="#sbe">School of Business and Economics</label>
                                                    <div id="sbe" class="collapse">
                                                      <select class="form-control">
                                                        <option>-- Select your Department --</option>
                                                        <option value="Accountancy">Accountancy</option>
                                                        <option value="Business Administration">Business Administration</option>
                                                        <option value="Economics">Economics</option>
                                                        <option value="Hospitality Management">Hospitality Management</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td> 
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#shcp">School of Health Care Profession</label>
                                                    <div id="shcp" class="collapse">
                                                      <select class="form-control">
                                                        <option>Nursing</option>
                                                        <option>Pharmacy</option>
                                                        <option>Nutrition and Dietics</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#solg">School of Law and Governance</label>
                                                    <div id="solg" class="collapse">
                                                      <select class="form-control">
                                                        <option>-- Select your Department --</option>
                                                        <option value="Law">Law</option>
                                                        <option value="Political Science">Political Science</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td> 
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#su">Support Unit</label>
                                                    <div id="su" class="collapse">
                                                      <select class="form-control">
                                                        <option>-- Select your Office --</option>
                                                        <option value="Athletics Office">Athletics Office</option>
                                                        <option value="Campus Ministry, Talamban">Campus Ministry, Talamban</option>
                                                        <option value="Guidance Center">Guidance Center</option>
                                                        <option value="Director of Library">Director of Library</option>
                                                        <option value="OSA Downtown">OSA Downtown</option>
                                                        <option value="OSA Talamban">OSA Talamban</option>
                                                        <option value="Club Mega">Club Mega</option>
                                                        <option value="Pathways">Pathways</option>
                                                        <option value="USC - Supreme Student Council">USC - Supreme Student Council</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td> 
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                      <thead>
                                        <th class="bg-success">B. Time Frame (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" value="Short Term" data-toggle="collapse" id="shortterm" data-target="#short_term">Short Term</label>
                                                  </div>
                                                  <div id="short_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="sem" value="1 Semester">1 Semester</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="sem" value="2 Semesters">2 Semesters</label>
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" value="Medium Term"data-toggle="collapse" id="medterm" data-target="#medium_term">Medium Term</label>
                                                  </div>
                                                  <div id="medium_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="sem" value="3 Semesters">3 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="sem" value="4 Semesters">4 Semesters</label>
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" value="Long Term" data-toggle="collapse" id="longterm" data-target="#long_term">Long Term</label>
                                                  </div>
                                                  <div id="long_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="sem" value="5 Semesters">5 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" name="sem" value="6 Semesters">6 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio form-inline">
                                                            <label><input type="radio" name="sem" value="Others">Others:</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" placeholder="Count by Semesters">
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 3rd Part -->
                                      <thead>
                                        <th class="bg-success">C. Locus and Leadership (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus" value="Course-based (undergraduate)">Course-based (undergraduate)</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus" value="Course-based (graduate)">Course-based (graduate)</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus" value="Student Organization-led">Student Organization-led</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus" value="Department-led">Department-led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus" value="School-wide">School-wide</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus" value="Alumni-led">Alumni-led</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus" value="Support-unit Led">Support-unit Led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus" value="SVD-Led">SVD-Led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox form-inline">
                                                    <label><input type="checkbox" name="locus" value="Others">Others</label>
                                                    &nbsp
                                                    <input type="text" class="form-control" placeholder="Type Here..." name="lothers">
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 4th Part -->
                                      <thead>
                                        <th class="bg-success">D. Nature of the Program/Project/Activity (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Training Program <em><small>(non-degree and non-credited courses offered to the community)</small></em></label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="nature" value="Community Outreach">Community Outreach <em><small>(community-based and charity driven social services)</small></em></label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="nature" value="Technical Assistance">Technical Assistance <em><small>(for agencies, organization, civic groups)</small></em></label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="nature" value="Technology transfer and utilization">Technology transfer and utilization <em><small>(process of circulating, promoting and marketing or technologies to potential users)</small></em></label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="nature" value="Advisory Services">Advisory Services <em><small>(for agencies, organization, civic groups)</small></em></label>
                                                  </div>
                                                </td>
                                                <td rowspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="nature" value="others">Others, please specify...</label>
                                                    <textarea class="form-control" rows="3" placeholder="Type Here..." name="nothers"></textarea>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Information Services <em><small>(dissemination of knowledge/information through various means)</small></em></label>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                      <thead>
                                        <th class="bg-success">E. Program Area (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Productivity-Oriented Initiatives">Productivity-Oriented Initiatives</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Health Advocacy and Wellness Promotion">Health Advocacy and Wellness Promotion</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Literacy, Values Formation and Life-long Learning">Literacy, Values Formation and Life-long Learning</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Building Christian Communities">Building Christian Communities</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Social Welfare Services">Social Welfare Services</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Information Sharing">Information Sharing</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Environmental Sustainability">Environmental Sustainability</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Heritage Conservation">Heritage Conservation</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Issue Advocacy and Rights Promotion">Issue Advocacy and Rights Promotion</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="progarea" value="Rural and Urban Development">Rural and Urban Development</label>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>II. Significance/Relevance Matrix</h4>
                              </div>
                              <div class="panel-body">
                                <div class="alert alert-info" role="alert">
                                  <p><span class="glyphicon glyphicon-info-sign"></span>&nbsp <em>please <strong>check/tick</strong> the appropriate item</em></p>
                                </div>
                                <table class="table table-bordered" width="100%">

<!--STARRRRRRRTTTTTT HERE! radio buttons-->
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. Contextual Dimension: <em>establish responsive is the P/P/A to the local context:</em></th>
                                  </thead>
                                  <tbody>
              <!--START OF FIRST PART RADIO BUTTON-->
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="prelims" id="unitdone" data-toggle="collapse" data-target="#prelim1" value="unit have done preliminary needs assessment">unit have done preliminary needs assessment <span class="glyphicon glyphicon-asterisk"></span></label>
                                              </div>

                                          <!--COLLAPSE #prelim1-->
                                              <div id="prelim1" class="collapse">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Unit personnel involved in the needs assessment activity:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                          <label><input type="checkbox" name="unit" value="faculty members">faculty members</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit" value="student org./majors">student org./majors</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit" value="class instructor">class instructor</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit" value="course enrollees">course enrollees</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit" value="staff">staff</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit" value="student volunteers">student volunteers</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit" value="community/org partners">community/org partners</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit" value="employed enumerators">employed enumerators</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2">
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="unit" value="Others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="uothers" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <!--END COLLAPSE #prelim1-->
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" id="unitnotdone" name="prelims" value="unit have not done preliminary needs assessment">unit have not done preliminary needs assessment</label>
                                              </div>
                                            </td>
                                          </tr>
<!--END OF FIRST PART RADIO BUTTON-->

                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="data" id="withdata" data-toggle="collapse" data-target="#data1">with existing verifiable data from the field <span class="glyphicon glyphicon-asterisk"></span></label>
                                              </div>
                                              <div id="data1" class="collapse">
                                                <table class="table table-bordered" width="100%">
                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Data source/s:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                          <label><input type="checkbox" name="dsources" value="research (faculty/student)">research (faculty/student)</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="dsources" value="provided/expressed by the partner">provided/expressed by the partner</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="dsources" value="thesis/dissertation">thesis/dissertation</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="dsources" value="recommended by faculty/student/class">recommended by faculty/student/class</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="dsources" value="CES data gathering initiatives">CES data gathering initiatives</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="dsources" value="from Government agency">from Government agency</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="dsources" value="community meetings">community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="dsources" value="reflection notes/papers">reflection notes/papers</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="dsources" value="from secondary sources">from secondary sources</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="dsources" value="Others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="dsothers" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Tools used to gather data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools" value="survey/questionnare">survey/questionnare</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools" value="exposure/immersions">exposure/immersions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools" value="KII/FGDs">KII/FGDs</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools" value="validation sessions">validation sessions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools" value="ocular visit">ocular visit</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools" value="documents review">documents review</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools" value="community meetings">community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="tools" value="Others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="tothers" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Means employed to verify the data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means" value="survey/questionnare">survey/questionnare</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means" value="exposure/immersions">exposure/immersions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means" value="KII/FGDs">KII/FGDs</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means" value="validation sessions">validation sessions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means" value="ocular visit">ocular visit</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means" value="documents review">documents review</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means" value="community meetings">community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="means" value="Others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="meothers" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Who collected the data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="collector" value="faculty">faculty</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="collector" value="government agency">government agency</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="collector" value="undergraduate students">undergraduate students</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="collector" value="partner community/org./institution">partner community/org./institution</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="collector" value="graduate students">graduate students</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="collector" value="deloaded researcher">deloaded researcher</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2">
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="collector" value="Others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" name="cothers" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="data" id="withoutdata" data-toggle="collapse" data-target="#data2">without data from the field</label>
                                              </div>
                                              <div id="data2" class="collapse">
                                                <div class="panel">
                                                  <table class="table" width="100%">
                                                    <tr>
                                                      <td>
                                                        <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Enumerate bases for proposing the P/P/A:</th></label>
                                                        <textarea class="form-control" rows="10" name="bases" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp What are the means employed to ensure the responsiveness of the P/P/A to the local condition?</th></label>
                                                        <textarea class="form-control" rows="10" name="responsiveness" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                        <div class="alert alert-info" role="alert">
                                          <p><span class="glyphicon glyphicon-asterisk"></span>&nbsp <em>Please provide as attachment a copy of the needs assessment report or any available data as basis for this proposal</em></p>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
<!--ENDDDDD HERE! radio buttons-->


<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Productivity Dimension: <em>please <span class="text-danger">check/tick</span> the appropriate item if the P/P/A involves technology:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity" value="production of new technology">production of new technology</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity" value="transfer of existing technology">transfer of existing technology</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity" value="utilization of existing technology">utilization of existing technology</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity" value="refinement/modification of existing technology">refinement/modification of existing technology</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity" value="training or capacity-building for the use of Technology">training or capacity-building for the use of Technology</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="productivity" value="Others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="pothers" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 3rd Part -->
                                  <thead>
                                    <th class="bg-success">C. Economic Dimension: <em>please <span class="text-danger">check/tick</span> the appropriate item if the P/P/A has economic implications:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic" value="generation of new livelihood projects/opportunities">generation of new livelihood projects/opportunities</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic" value="enhancement of partner’s current livelihood">enhancement of partner’s current livelihood</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="economic" value="employability of partners at">employability of partners at</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="econ_emp" placeholder="Type Here...">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic" value="measurable increase in the income of partners">measurable increase in the income of partners</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="economic" value="Others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="ecothers" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 4th Part -->
                                  <thead>
                                    <th class="bg-success">
                                      D. Social Dimension: <em>please <span class="text-danger">check/tick</span> the appropriate item if the P/P/A will lead to or benefit: <small>PROVIDE THE ESTIMATED NUMBER OF BENEFICIARIES PER GROUP</small></em>
                                    </th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th class="text-center" colspan="2">The P/P/A will benefit:</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="households" data-toggle="collapse" data-target="#hh">households</label>
                                                </div>
                                                <div id="hh" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_hh" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="youth (male)" data-toggle="collapse" data-target="#youth_m">youth (male) <em>[13 to 30 years old]</em></label>
                                                </div>
                                                <div id="youth_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_ymale" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="Local Government Units" data-toggle="collapse" data-target="#2_lgu">Local Government Units</label>
                                                </div>
                                                <div id="2_lgu" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_lgu" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="youth (female)" data-toggle="collapse" data-target="#youth_f">youth (female) <em>[13 to 30 years old]</em></label>
                                                </div>
                                                <div id="youth_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_yfemale" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social"  value="Organizations/Associations" data-toggle="collapse" data-target="#oa">Organizations/Associations</label>
                                                </div>
                                                <div id="oa" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_orgs" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="children (boy)" data-toggle="collapse" data-target="#boy">children (boy) <em>[6 to 12 years old]</em></label>
                                                </div>
                                                <div id="boy" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_cboy" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="senior citizens (male)" data-toggle="collapse" data-target="#sr_m">senior citizens (male) <em>[at least 60 years old]</em></label>
                                                </div>
                                                <div id="sr_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_scmale" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="children (girl)" data-toggle="collapse" data-target="#girl">children (girl) <em>[6 to 12 years old]</em></label>
                                                </div>
                                                <div id="girl" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_cgirl" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="senior citizens (female)" data-toggle="collapse" data-target="#sr_f">senior citizens (female) <em>[at least 60 years old]</em></label>
                                                </div>
                                                <div id="sr_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_scfemale" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="infants (boy)" data-toggle="collapse" data-target="#infants_b">infants (boy) <em>[0 to 5 years old]</em></label>
                                                </div>
                                                <div id="infants_b" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_iboy" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="adults (male)" data-toggle="collapse" data-target="#adults_m">adults (male) <em>[31 to 59 years old]</em></label>
                                                </div>
                                                <div id="adults_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_amale" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social"  value="infants (girl)" data-toggle="collapse" data-target="#infants_g">infants (girl) <em>[0 to 5 years old]</em></label>
                                                </div>
                                                <div id="infants_g" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_igirl" placeholder="How many?">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social" value="adults (female)" data-toggle="collapse" data-target="#adults_f">adults (female) <em>[31 to 59 years old]</em></label>
                                                </div>
                                                <div id="adults_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="soc_afemale" placeholder="How many?">
                                                </div>
                                              </td>
                                              <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="social" value="others" data-toggle="collapse" data-target="#benefit_others">Others</label>
                                              </div>
                                              <div id="benefit_others" class="collapse form-inline">
                                                <input type="text" class="form-control" name="soc_others" placeholder="Type Here...">
                                                <input type="number" class="form-control" name="soc_othersnum" placeholder="How many?">
                                              </div>
                                            </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                  <thead>
                                    <th class="bg-success">E. Environmental  Dimension: <em>the P/P/A addresses the environmental needs of the community</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="envi" value="River Management">River Management</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="envi" value="Greening Initiatives">Greening Initiatives <small>(e.g. Tree Panting, forestation, etc.)</small></label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="envi" value="Mangrove Planting">Mangrove Planting</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="envi" value="Clean-up Drives">Clean-up Drives <small>(coastal, river, drainage, sewage, etc.)</small></label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="envi" value="Beautification Activities">Beautification Activities</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="envi" value="Others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="enothers" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 6th Part -->
                                  <thead>
                                    <th class="bg-success">F. Governance Dimension: <em>the program/project/activity will yield:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="govern" value="networking with LGUs and community leaders">networking with LGUs and community leaders</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="govern" value="funding support from LGUs">funding support from LGUs</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="govern" value="funding support from other partners">funding support from other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="govern" value="established counterparts from LGUs">established counterparts from LGUs</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="govern" value="established counterparts from other partners">established counterparts from other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="govern" value="MOA/MOU with LGUs">MOA/MOU with LGUs</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="govern" value="MOA/MOU with other partners">MOA/MOU with other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="govern" value="policy advocacy by USC faculty/students/staff">policy advocacy by USC faculty/students/staff</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="govern" value="policy change initiatives by LGUs">policy change initiatives by LGUs</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="govern" value="Others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="govothers" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>III. Implications to Work hours, Academic Program, and Research</h4>
                              </div>
                              <div class="panel-body">
                                <div class="alert alert-info" role="alert">
                                  <p sty;e="text:justify"><span class="glyphicon glyphicon-info-sign"></span>&nbsp <em>The following variables are identified as essentials in order to determine that your program/project/activities are aligned to your unit’s program offerings and research priorities. Please provide the required preliminary data. <strong>Also, do take note that these will be verified after the completion of the program/project/activity.</strong></em></p>
                                </div>
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. Practical Counts: <em>please provide below your estimated count per item:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="preparehr" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of man hours needed to prepare the P/P/A</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="completehr" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of man hours needed to complete the P/P/A</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="fmeminvolve" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of faculty members who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="cstudinvolve" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of course-based students who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="orgmeminvolve" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Student Organization members who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="staffinvolve" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of staff who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="cmatsproduce" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Information and Education Campaign materials to be produced</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="cmatsimprove" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Information and Education Campaign materials to be improved/enhanced</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="cprogdevelope" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of curricular programs to be developed</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="cprogimprove" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of curricular programs to be improved/enhanced</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="propdevelop" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of proposals to be developed</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="paperpresent" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of papers to be presented</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="paperpub" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of papers to be published</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="policyadvocate" class="form-control"></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of policies to be advocated</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Human Resource Implications: <em>please provide the specifics:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th colspan="3" class="text-center"><u>PREPARATION</u> OF THE PPA</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td width="30%"></td>
                                              <td class="text-center"><label>Faculty Members</label></td>
                                              <td class="text-center"><label>Students</label></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Expertise and/or specialization needed</td>
                                              <td><textarea class="form-control" rows="3" name="pfmexp"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="pstudexp"></textarea></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                              <td><textarea class="form-control" rows="3" name="pfmroles"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="pstudroles"></textarea></td>
                                            </tr>
                                          </tbody>
                                        </table>

                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th colspan="3" class="text-center">IMPLEMENTATION</u> OF THE PPA</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td width="30%"></td>
                                              <td class="text-center"><label>Faculty Members</label></td>
                                              <td class="text-center"><label>Students</label></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Expertise and/or specialization needed</td>
                                              <td><textarea class="form-control" rows="3" name="ifmexp"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="istudexp"></textarea></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                              <td><textarea class="form-control" rows="3" name="ifmroles"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="istudroles"></textarea></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>IV. Institutional and Policy Support Needs and Counterparts</h4>
                              </div>
                              <div class="panel-body">
                                <div class="alert alert-info" role="alert">
                                  <p sty;e="text:justify"><span class="glyphicon glyphicon-info-sign"></span>&nbsp <em>It is essential that all extension initiatives remain faithful to the mutual contributions from partners to avoid the development of the partner’s dependent behavior toward the USC/unit. Thus, all CES programs/projects/ activities must be built on co-ownership of the initiatives. Hence, please identify the various logistical support needs essential in pursuing the program/project/activity to be sourced from both the USC system as well as from partners/beneficiaries</em></p>
                                </div>
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. Support from the USC system: <em>please identify your specific needs from USC-CES:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="">collaboration with other units</label>
                                                &nbsp
                                                <input type="text" class="form-control" placeholder="Type Here...">
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="">resource speaker/s on</label>
                                                &nbsp
                                                <input type="text" class="form-control" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="">provision of meals and snacks for USC manpower</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="">provision of meals and snacks for partners</label>
                                              </div>
                                            </td>
                                          </tr>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="">transport for</label>
                                                &nbsp
                                                <input type="number" class="form-control" placeholder="How Many?">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="">venue or work station/s</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="">materials</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Support from partners/beneficiaries: <em>please specify the contributions/counterparts from partners:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th colspan="2">
                                              <div class="form-inline">
                                                <label>1. Partner/Beneficiaries:</label>
                                                &nbsp
                                                <input type="text" class="form-control" placeholder="Type Here..." style="width:80%">
                                              </div>
                                            </th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">collaboration with other units</label>
                                                  &nbsp
                                                  <input type="text" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">resource speaker/s on</label>
                                                  &nbsp
                                                  <input type="text" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">provision of meals and snacks for USC manpower</label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">provision of meals and snacks for partners</label>
                                                </div>
                                              </td>
                                            </tr>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">transport for</label>
                                                  &nbsp
                                                  <input type="number" class="form-control" placeholder="How Many?">
                                                </div>
                                              </td>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">registration fee/charge of</label>
                                                  &nbsp
                                                  <input type="number" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">venue or work station/s</label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">materials</label>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                            <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">Others</label>
                                                  &nbsp
                                                  <input type="text" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                          <thead>
                                            <th colspan="2">
                                              <div class="form-inline">
                                                <label>2. Partner/Beneficiaries:</label>
                                                &nbsp
                                                <input type="text" class="form-control" placeholder="Type Here..." style="width:80%">
                                              </div>
                                            </th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">collaboration with other units</label>
                                                  &nbsp
                                                  <input type="text" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">resource speaker/s on</label>
                                                  &nbsp
                                                  <input type="text" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">provision of meals and snacks for USC manpower</label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">provision of meals and snacks for partners</label>
                                                </div>
                                              </td>
                                            </tr>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">transport for</label>
                                                  &nbsp
                                                  <input type="number" class="form-control" placeholder="How Many?">
                                                </div>
                                              </td>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">registration fee/charge of</label>
                                                  &nbsp
                                                  <input type="number" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">venue or work station/s</label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="">materials</label>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                            <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="">Others</label>
                                                  &nbsp
                                                  <input type="text" class="form-control" placeholder="Type Here...">
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <div class="text-center">
                                          <button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp Add Row</button>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>V. Partnership and Linkage Profile</h4>
                              </div>
                              <div class="panel-body">
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. Partners and Collaborators: <em>please identify your partners/collaborators and provide their contribution/s:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th class="text-center" width="40%">WITHIN USC Partners and/or Beneficiaries</th>
                                            <th class="text-center">What is/are the contribution/s or counterpart of the partner?</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#dept">Academic Department:</label>
                                                </div>
                                                <div id="dept" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#co_cur">Co-Curricular SO:</label>
                                                </div>
                                                <div id="co_cur" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#extra_cur">Extra-Curricular SO:</label>
                                                </div>
                                                <div id="extra_cur" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#supp">Support Unit:</label>
                                                </div>
                                                <div id="supp" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#alum">Alumni:</label>
                                                </div>
                                                <div id="alum" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#bed">BED:</label>
                                                </div>
                                                <div id="bed" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#mont_acad">Montessori Academy:</label>
                                                </div>
                                                <div id="mont_acad" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#5a_others">Others:</label>
                                                </div>
                                                <div id="5a_others" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Type...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                          </tbody>

                                          <thead>
                                            <th class="text-center" width="40%">OUTSIDE of USC Partners and/or Beneficiaries</th>
                                            <th class="text-center">What is/are the contribution/s or counterpart of the partner?</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#marg_comm">Marginalized Community:</label>
                                                </div>
                                                <div id="marg_comm" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#5_lgu">LGU:</label>
                                                </div>
                                                <div id="5_lgu" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#pub">Public school:</label>
                                                </div>
                                                <div id="pub" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#civ_grp">Civic Group/Association:</label>
                                                </div>
                                                <div id="civ_grp" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#prof_org">Professional Org.:</label>
                                                </div>
                                                <div id="prof_org" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#gov_agency">Gov’t Agency:</label>
                                                </div>
                                                <div id="gov_agency" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#church">Church:</label>
                                                </div>
                                                <div id="church" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#ngo">Advocacy Group/NGO:</label>
                                                </div>
                                                <div id="ngo" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Specify...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <div class="checkbox form-inline">
                                                  <label><input type="checkbox" name="" data-toggle="collapse" data-target="#5b_others">Others:</label>
                                                </div>
                                                <div id="5b_others" class="collapse">
                                                  <input type="text" class="form-control" placeholder="Type...">
                                                </div>
                                              </td>
                                              <td><input type="text" class="form-control" placeholder="Type Here..."></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Nature of Linkage/Partnership: <em>please specify:</em></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="moa" id="withmoa" data-toggle="collapse" data-target="#with_moa">with MOU/MOA</label>
                                              </div>
                                              <div id="with_moa" class="collapse">
                                                <div class="panel">
                                                  <table width="100%">
                                                    <tr>
                                                      <td class="text-right"><label>Date Signed:</label></td>
                                                      <td width="2%"></td>
                                                      <td><input type="text" class="form-control datepicker"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Signatories for USC:</label></td>
                                                      <td></td>
                                                      <td><input type="text" class="form-control" placeholder="Type Here..."><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Signatories for Partner:</label></td>
                                                      <td></td>
                                                      <td><input type="text" class="form-control" placeholder="Type Here..."><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <hr>
                                                        <label>Enumerate the Major duties of USC/Unit:</label>
                                                        <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the Major duties of Partner/s:</label>
                                                        <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the opportunities identified:</label>
                                                        <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the challenges/problems encountered:</label>
                                                        <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="moa" id="withoutmoa" data-toggle="collapse" data-target="#without_moa">without MOU/MOA</label>
                                              </div>
                                              <div id="without_moa" class="collapse">
                                                <div class="panel">
                                                  <table width="100%">
                                                    <tr>
                                                      <td class="text-right"><label>Since when is the linkage:</label></td>
                                                      <td width="2%"></td>
                                                      <td><input type="text" class="form-control datepicker"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Who initiated the linkage:</label></td>
                                                      <td></td>
                                                      <td><input type="text" class="form-control" placeholder="Type Here..."><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <hr>
                                                        <label>Enumerate the activities already done:</label>
                                                        <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the opportunities identified:</label>
                                                        <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                     <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the challenges/problems encountered:</label>
                                                        <textarea class="form-control" rows="5" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-lg btn-success btn-block" name="submit" value="submit_b"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>

            <!-- Exit Modal -->
            <div class="modal fade" tabindex="-1" role="dialog" id="exit">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-warning"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp Warning!</h4>
                  </div>
                  <div class="modal-body">
                    Are you sure you want cancel creating the proposal? All progress will not be saved.
                  </div>
                  <div class="modal-footer">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <button type="button" class="btn btn-lg btn-danger btn-block" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp No</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                      <a href="<?php echo site_url('Representative/create_proposal');?>" style="text-decoration:none">
                        <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
                      </a>
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
    <!-- Bootstrap-Datepicker JavaScript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
    <!-- Custom Script -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/global.js"></script>
    <script src="<?php echo base_url();?>assets/js/proposals.js"></script>
    <script src="<?php echo base_url();?>assets/js/form_processing.js"></script>

</body>

</html>