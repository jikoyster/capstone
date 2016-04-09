<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CESDMS - Fill Out Form C</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.css"> 

</head>

<body>

    <div id="wrapper">

        <!-- form_sidebar -->
        <?php include('form_sidebar.php'); ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default btn-xs pull-right" id="menu-toggle">
                <strong>Toggle Sidebar</strong> &nbsp
                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </a>
            <div class="container-fluid">
                <div class="row tab-content">
                    <div>
                        <h1>Filling Out Form C <small>CES Program/Project/Activity Proposal (<em>For Requests</em>)</small></h1>
                        <hr>
                        <!-- <form> -->
                        <?php echo form_open('Proposals/process_forms')?>
                            <?php include('form_header.php'); ?>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>I. Program/Project/Activity Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                      <thead>
                                        <th class="bg-success">A. Requester (<em>please <span class="text-danger">check/tick</span> the appropriate item and <span class="text-danger">include</span> the specific name of partner or requester</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table width="100%">
                                              <tr>
                                                <td width="15%">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" data-toggle="collapse" data-target="#1_comm">Community</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1_comm" class="collapse">
                                                    <input type="text" class="form-control" placeholder="Please Specify..."></td>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" data-toggle="collapse" data-target="#1_org">Organization</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1_org" class="collapse">
                                                    <input type="text" class="form-control" placeholder="Please Specify..."></td>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" data-toggle="collapse" data-target="#1_inst">Institution</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1_inst" class="collapse">
                                                    <input type="text" class="form-control" placeholder="Please Specify..."></td>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" data-toggle="collapse" data-target="#1_units">Unit/s from within USC, please specify</label>
                                                  </div>
                                                  <div id="1_units" class="collapse">
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
                                                                <option>Languages and Literature</option>
                                                                <option>Philosophy and Religious Studies</option>
                                                                <option>Psychology</option>
                                                                <option>Anthropology, Sociology and History</option>
                                                                <option>Biology</option>
                                                                <option>Chemistry</option>
                                                                <option>Computer and Information Sciences</option>
                                                                <option>Mathematics</option>
                                                                <option>Phsyics</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#safad">School of Architecture, Fine Arts and Design</label>
                                                            <div id="safad" class="collapse">
                                                              <select class="form-control">
                                                                <option>Architecture</option>
                                                                <option>Fine Arts</option>
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
                                                                <option>Teacher Education</option>
                                                                <option>Science and Mathematics</option>
                                                                <option>Physical Education</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#soe">School of Engineering</label>
                                                            <div id="soe" class="collapse">
                                                              <select class="form-control">
                                                                <option>Chemical Engineering</option>
                                                                <option>Civil Engineering</option>
                                                                <option>Computer Engineering</option>
                                                                <option>ECE</option>
                                                                <option>EE</option>
                                                                <option>Industrial Engineering</option>
                                                                <option>Mechanical Engineering</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="" value=""data-toggle="collapse" data-target="#sbe">School of Business and Economics</label>
                                                            <div id="sbe" class="collapse">
                                                              <select class="form-control">
                                                                <option>Accountancy</option>
                                                                <option>Business Administration</option>
                                                                <option>Economics</option>
                                                                <option>Hospitality Management</option>
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
                                                                <option>Law</option>
                                                                <option>Political Science</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                        <td>
                                                          <div class="checkbox">
                                                            <label><input type="checkbox" name="" value="" data-toggle="collapse" data-target="#su">Support Unit</label>
                                                            <div id="su" class="collapse">
                                                              <select class="form-control">
                                                                <option>Athletics Office</option>
                                                                <option>Campus Ministry, Talamban</option>
                                                                <option>Guidance Center</option>
                                                                <option>Director of Library</option>
                                                                <option>OSA Downtown</option>
                                                                <option>OSA Talamban</option>
                                                                <option>Club Mega</option>
                                                                <option>Pathways</option>
                                                                <option>USC-Supreme Student Council</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </td> 
                                                      </tr>
                                                    </table>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                      <thead>
                                        <th class="bg-success">B. Mode of request (<em>please <span class="text-danger">check/tick</span> the appropriate item and <span class="text-danger">attach</span> said communication to this proposal</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table width="100%">
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">letter, please attach</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">email, please attach</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">verbal, please provide evidence</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td colspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">SMS, please provide evidence</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="" data-toggle="collapse" data-target="#1b_others">Others</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div id="1b_others" class="collapse">
                                                    <input type="text" class="form-control" placeholder="Please Specify..."></td>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 3rd Part -->
                                      <thead>
                                        <th class="bg-success">C. Nature of the Program/Project/Activity (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
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
                                                    <label><input type="checkbox" name="">Community Outreach <em><small>(community-based and charity driven social services)</small></em></label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Technical Assistance <em><small>(for agencies, organization, civic groups)</small></em></label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Technology transfer and utilization <em><small>(process of circulating, promoting and marketing or technologies to potential users)</small></em></label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Advisory Services <em><small>(for agencies, organization, civic groups)</small></em></label>
                                                  </div>
                                                </td>
                                                <td rowspan="2">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Others, please specify...</label>
                                                    <textarea class="form-control" rows="3" placeholder="Type Here..."></textarea>
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
                                        <th class="bg-success"> D. Program Area (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)</th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Productivity-Oriented Initiatives</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Health Advocacy and Wellness Promotion</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Literacy, Values Formation and Life-long Learning</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Building Christian Communities</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Social Welfare Services</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Information Sharing</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Environmental Sustainability</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Heritage Conservation</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Issue Advocacy and Rights Promotion</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="">Rural and Urban Development</label>
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
                                    <h4>
                                      II. Rationale and Contextualization &nbsp&nbsp&nbsp&nbsp
                                      <span class="glyphicon glyphicon-question-sign pull-right" data-toggle="collapse" data-target="#info_1"></span>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div id="info_1" class="collapse">
                                      <div class="well well-sm">
                                        <p>
                                          This portion will serve as the justification for your proposal. Please provide the following minimum information for the rationale and introduction of your program/project/activity:
                                          <ol>
                                            <li>Current condition of the community</li>
                                            <li>Problem/need identified by the unit that you intend to address</li>
                                            <li>Data source as well as the process underwent to generate the data</li>
                                            <li>How will the unit respond to the condition? What expertise and competencies from the unit or in collaboration with others will be useful to address the identified condition?</li>
                                          </ol>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" name="rationale" placeholder="Type Here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>
                                      III. Goal, Objectives, and Outcomes &nbsp&nbsp&nbsp
                                      <span class="glyphicon glyphicon-question-sign pull-right" data-toggle="collapse" data-target="#info_2"></span>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div id="info_2" class="collapse">
                                      <div class="well well-sm">
                                        <p>
                                          This section must enumerate the following items:
                                          <ol>
                                            <li>Over-all goal of the proposed program/project/activity</li>
                                            <li>The specific objectives that will be useful in achieving the goal (be sure they are SMART)</li>
                                            <li>What are the expected outcomes after implementing the program/project/activity</li>
                                          </ol>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" name="goal" placeholder="Type Here..."></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>
                                      VI. Participants, Partners and Beneficiaries &nbsp&nbsp
                                      <span class="glyphicon glyphicon-question-sign pull-right" data-toggle="collapse" data-target="#info_3"></span>
                                    </h4>
                                </div>
                                <div class="panel-body">
                                    <div id="info_3" class="collapse">
                                      <div class="well well-sm">
                                        <p>
                                          This part must explicitly provide the specific roles/responsibilities or deliverables as well as benefits of the following:
                                          <ol>
                                            <li>Implementing team from USC/Unit</li>
                                            <li>Internal and external partners</li>
                                            <li>Beneficiaries and/or partner community/organization/institutionWhat are the expected outcomes after implementing the program/project/activity</li>
                                          </ol>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" rows="5" name="partners" placeholder="Type Here..."></textarea>  
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>V. Outline of Activities</h4>
                                </div>
                                <div class="panel-body">
                                    <table id="activity-outline" class="table table-bordered">
                                      <thead>
                                          <th class="text-center">Tentative Date</th>
                                          <th class="text-center">Activities</th>
                                          <th class="text-center">Participants Needed</th>
                                          <th class="text-center">Person/s In-charge</th>
                                          <th class="text-center"><button type="button" id="add-activity-outline-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button></th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><input type="text" name="tentative[]" class="form-control datepicker" ></td>
                                          <td><input type="text" name="activity[]" class="form-control" ></td>
                                          <td><input type="number" name="participants[]" min="1" class="form-control" ></td>
                                          <td><input type="text" name="persons[]" class="form-control" ></td>
                                          <td></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>VI. Budgetary Requirements</h4>
                                </div>
                                <div class="panel-body">
                                    <table id="budgetary" class="table table-bordered">
                                      <thead>
                                          <th class="text-center" width="20%">Particulars</th>
                                          <th class="text-center" width="20%">Frequency</th>
                                          <th class="text-center" width="20%">Quantity</th>
                                          <th class="text-center" width="20%">Amount</th>
                                          <th class="text-center" width="20%">Subtotal</th>
                                          <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                                      </thead>
                                      <thead>
                                          <th colspan="6" class="bg-success">
                                            A. Meals and Snacks
                                            <button type="button" id="add-meals-row" class="pull-right btn btn-success btn-sm"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                                          </th>
                                      </thead>
                                      <tbody>
                                        <div class="mealsNsnacks">
                                          <tr>
                                            <td><input type="text" name="a_particulars[]" id="a_particulars" class="particulars form-control" ></td>
                                            <td><input type="number" name="a_frequency[]" id="a_frequency" class="frequency form-control" min="1" ></td>
                                             <td><input type="number" name="a_quantity[]" id="a_quantity" class="quantity form-control" min="1" ></td>
                                            <td>
                                              <div class="input-group">
                                                <div class="input-group-addon">₱</div>
                                                <input type="number" name="a_amount[]" id="a_amount" class="amount form-control" step="0.01" min="0.25" >
                                              </div>
                                            </td>
                                            <td>
                                              <div class="input-group">
                                                <div class="input-group-addon">₱</div>
                                                <input type="number" name="a_total[]" id="a_product" class="subtotal form-control" step="0.01" readonly>
                                              </div>
                                            </td>
                                            <td>
                                              <button type="button" class="rm-meals-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                            </td>
                                          </tr>
                                        </div>
                                      </tbody>
                                      <thead>
                                          <th colspan="6" class="bg-success">
                                            B. Transportation
                                            <button type="button" id="add-transpo-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                                          </th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><input type="text" name="b_particulars[]" class="particulars form-control" ></td>
                                          <td><input type="number" name="b_frequency[]" class="frequency form-control" min="1" ></td>
                                          <td><input type="number" name="b_quantity[]" class="quantity form-control" min="1" ></td>
                                          <td>
                                            <div class="input-group">
                                              <div class="input-group-addon">₱</div>
                                              <input type="number" name="b_amount[]" class="amount form-control" step="0.01" min="0.25" >
                                            </div>
                                          </td>
                                          <td>
                                            <div class="input-group">
                                              <div class="input-group-addon">₱</div>
                                              <input type="number" name="b_total[]" id="b_product" class="subtotal form-control" step="0.01" readonly>
                                            </div>
                                          </td>
                                          <td>
                                            <button type="button" class="rm-transpo-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                          </td>
                                        </tr>
                                      </tbody>
                                      <thead>
                                          <th colspan="6" class="bg-success">
                                            C. Materials
                                            <button type="button" id="add-materials-row" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp Add Row</button>
                                          </th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><input type="text" name="c_particulars[]" class="particulars form-control" ></td>
                                          <td><input type="number" name="c_frequency[]" class="frequency form-control" min="1" ></td>
                                          <td><input type="number" name="c_quantity[]" class="quantity form-control" min="1" ></td>
                                          <td>
                                            <div class="input-group">
                                              <div class="input-group-addon">₱</div>
                                              <input type="number" name="c_amount[]" class="amount form-control" step="0.01" min="0.25" >
                                            </div>
                                          </td>
                                          <td>
                                            <div class="input-group">
                                              <div class="input-group-addon">₱</div>
                                              <input type="number" name="c_total[]" id="c_product" class="subtotal form-control" step="0.01" readonly>
                                            </div>
                                          </td>
                                          <td>
                                            <button type="button" class="rm-materials-row btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus-sign"></span></button>
                                          </td>
                                        </tr>
                                      </tbody>
                                      <tfoot>
                                        <tr>
                                          <td colspan="4">
                                            <button type="button" id="calc" class="pull-left btn btn-default"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp Calculate Total</button>
                                            <h4 class="text-right">Grand Total:</h4>
                                          </td>
                                          <td colspan="2" class="calculation">
                                            <div class="input-group">
                                            <div class="input-group-addon">₱</div>
                                             <input type="number" id="grand-total" class="grand_total form-control text-center" name="grandtotal" readonly>
                                            </div>
                                          </td>
                                        </tr>
                                      </tfoot>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="button" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div>
                        <!-- </form> -->
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
                        <button type="submit" class="btn btn-lg btn-success btn-block" name="submit" value="submit_c"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp Yes</button>
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