
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


    <!-- กดปฎิธินไม่ได้-->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

  <!-- กดไม่ได้-->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script> -->

  <!-- ปฏิธินไม่ขึ้น-->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"> -->

<!-- jquery JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Bootstrap js -->
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Propeller textfield js --> 
<script type="text/javascript" src="dist/js/propeller.min.js"></script>

<!-- Datepicker moment with locales -->
<script type="text/javascript" language="javascript" src="datetimepicker/js/moment-with-locales.js"></script>

<!-- Propeller Bootstrap datetimepicker -->
<script type="text/javascript" language="javascript" src="datetimepicker/js/bootstrap-datetimepicker.js"></script>
<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons"> 

<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="<?php echo base_url("/theme-assets/images/backgrounds/01.jpg") ?>">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="<?php echo base_url("/theme-assets/images/logo/calendar.png") ?>" />
          <h3 class="brand-text">Time sheet</h3>
        </a></li>
      <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
    </ul>
  </div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li><a href="<?php echo base_url("welcome/index") ?>"><i class="la la-dashboard"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
      </li>
      <li class=" nav-item"><a href="icons.html"><i class="la la-calendar-check-o"></i><span class="menu-title" data-i18n="">Time Tracker</span></a>
      </li>
      <li class="active"><a href="<?php echo base_url("project_ctrl/project") ?>"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="">Projects</span></a>
      </li>
      <li class=" nav-item"><a href="icons.html"><i class="la la-group"></i><span class="menu-title" data-i18n="">Members</span></a>
      </li>
    </ul>
    <div class="colorlib-footer">
    </div>
  </div><a class="btn btn-dark btn-block btn-glow btn-upgrade-pro mx-1" href="">Admin</a>
  <div class="navigation-background"></div>
</div>

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <button type="button" data-toggle="modal" data-target="#userModal" class="btn btn-danger add-new"><i class="fa fa-plus"></i> Add New Project</button>
      </div>
      <div id="userModal" class="modal fade">
        <div class="modal-dialog">
          <form id="user_form" method="Post" action="<?php echo base_url() ?>project_ctrl/insert_project">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Create Project</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" id="frm_create">
                  <label for="projectCode">ProjectCode:</label>
                  <input type="text" class="form-control" id="projectCode" placeholder="Enter Project Code" name="projectCode" required>
                  <br>
                  <label for="projectName">ProjectName:</label>
                  <input type="text" class="form-control" id="projectName" placeholder="Enter Project Name" name="projectName" required>
                  <br>
                  <label for="budget">Budget:</label>
                  <div class="input-group-append">
                    <input type="text" class="form-control" id="budget" placeholder="Enter Budget" name="budget" required>
                    <span class="input-group-text">.00 THB</span>
                  </div>
                  
                  <label for="recipient-name" class="col-form-label">Team:</label>
                  <fieldset class="form-group">
                  <select class="custom-select" name="team" id="team">
                    <option value="">Choose...</option>
                    <?php
                    foreach ($getTeam as $row) {
                      echo '<option value="' . $row->idMember . '">' . $row->NameTeam
                        . '</option>';
                    }
                    ?>
                  </select>
                  </fieldset>
                  
                  <div class="row">
	<div class="col-sm-6"> 
		<div class="form-group pmd-textfield pmd-textfield-floating-label">
			<label class="control-label" for="datepicker-start">Start Date</label>
			<input type="text" class="form-control" id="datepicker-start">
		</div>
	</div>
	<div class="col-sm-6"> 
		<div class="form-group pmd-textfield pmd-textfield-floating-label">
			<label class="control-label" for="datepicker-end">End Date</label>
			<input type="text" class="form-control" id="datepicker-end">
		</div>
	</div>
</div>

                </form>
              </div>
              <div class="modal-footer">
                <input type="submit" name="action" class="btn btn-info btn-lg" id="btn_create" value="Add" />
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Delete Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                  </div>
                </form>
              </div>
            </div>
          </div>
    <!-- End Delete Modal HTML -->

    <div class="content-body">
      <!-- Basic Tables start -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Project Tables</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
					    <ul class="list-inline mb-0">
              <ul class="pagination">
                  <?php echo $pagination; ?>
                </ul>
					</ul>
				</div>
            </div>
            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-hover">
              <thead class=”thead-light”>
                <tr>
                  <th>#</th>
                  <th scope="col">ProjectCode</th>
                  <th scope="col">ProjectName</th>
                  <th scope="col">Budget</th>
                  <th scope="col">Start Date</th>
                  <th scope="col">Finish Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
                <?php
                if ($select_data->num_rows() > 0) {
                  foreach ($select_data->result() as $row) {
                    ?>
                    <tr>
                      <td><?php echo $row->idProject; ?></td>
                      <td><?php echo $row->projectCode; ?></td>
                      <td><?php echo $row->projectName; ?></td>
                      <td><?php echo $row->budget; ?></td>
                      <td><?php echo $row->startDate; ?></td>
                      <td><?php echo $row->endDate; ?></td>
                      <td><a href="#editProject" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                    </tr>
                  <?php
                    }
                  } else {
                    ?>
                  <tr>
                    <td colspan="3">No Data</td>
                  </tr>
                <?php
                }
                ?>
              </table>
              <!--  Tables end -->

              <!--  Next page -->
              <!-- <div class="row">
        <div class="col-12"> -->
          <!-- <div class="card"> -->
            <div class="card-header">
              Showing <b>5</b> entries
             
              </div>
             
              </div>
            </div>
         
              
              <!-- End Next page  -->

            </div>
          </div>
        </div>
      </div>
      <!-- ////////////////////////////////////////////////////////////////////////////-->
      <script type="text/javascript">
        $(function() {
          $('#startD').datetimepicker();
          $('#endD').datetimepicker({
            useCurrent: false //Important! See issue #1075
          });
          $("#startD").on("dp.change", function(e) {
            $('#endD').data("DateTimePicker").minDate(e.date);
          });
          $("#endD").on("dp.change", function(e) {
            $('#startD').data("DateTimePicker").maxDate(e.date);
          });
        });
      </script>

      