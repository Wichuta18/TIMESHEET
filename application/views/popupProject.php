
<div class="container">
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
                  <div class="row">
                    <div class="col-sm-6">
                      <label for="budget">Budget:</label>
                      <div class="input-group-append">
                        <input type="text" class="form-control" id="budget" placeholder="Enter Budget" name="budget" required>
                        <span class="input-group-text">.00 THB</span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label for="budget">Team:</label>
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
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label" for="datepicker-start">Start Date</label>
                        <input data-format="dd/MM/yyyy" type="text" class="form-control" id="startD">
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                          </i>
                        </span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label" for="datepicker-end">End Date</label>
                        <input data-format="dd/MM/yyyy" type="text" class="form-control" id="endD">
                        <span class="add-on">
                          <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                          </i>
                        </span>
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
      <!-- ////////////////////////////////////////////////////////////////////////////-->
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.1.1/css/datepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
     $(function () {
        $('#startD').datetimepicker();
        $('#endD').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#startD").on("dp.change", function (e) {
            $('#endD').data("DateTimePicker").minDate(e.date);
        });
        $("#endD").on("dp.change", function (e) {
            $('#startD').data("DateTimePicker").maxDate(e.date);
        });
    });
  </script>