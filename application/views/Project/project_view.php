
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="<?php echo base_url("/theme-assets/images/backgrounds/01.jpg") ?>">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="<?php echo base_url("/theme-assets/images/logo/future.png") ?>" />
          <h3 class="brand-text">Time sheet</h3>
        </a></li>
      <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
    </ul>
  </div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
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

<!-- ############################################################################################################### -->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
      <a href="<?php echo base_url('Project_ctrl/create_project/'); ?>"><button type="button" class="btn btn-danger add-new"><i class="fa fa-plus"></i> Add New Project</button></a>
      </div>
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
                      <th scope="col">Budget/THB</th>
                      <th scope="col">Team</th>
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
                        <td><?php echo $row->budget; ?>.00</td>
                        <td><?php echo $row->team; ?></td>
                        <td><?php echo $row->startDate; ?></td>
                        <td><?php echo $row->endDate; ?></td>
                        <td>
                          <a href="<?php echo base_url('Project_ctrl/update_project/'.$row->idProject); ?>" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
                          <a href="<?php echo base_url('Project_ctrl/delete_project/'.$row->idProject); ?>" onclick="return confirm('confirm delete?');" data-toggle="tooltip" class="remove" data-toggle="modal"><i class="material-icons" title="Delete">&#xE872;</i></a>
                        </td>
                      </tr>
                    <?php
                    }
                  } else {
                    ?>
                    <tr>
                      <td colspan="5">No Data</td>
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
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->