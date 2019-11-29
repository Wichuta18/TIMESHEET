<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url("theme-assets/vendors/js/vendors.min.js") ?>" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo base_url("theme-assets/vendors/js/charts/chart.min.js") ?>" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN CHAMELEON  JS-->
<script src="<?php echo base_url("theme-assets/js/core/app-menu-lite.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("theme-assets/js/core/app-lite.js") ?>" type="text/javascript"></script>
<!-- END CHAMELEON  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?php echo base_url("theme-assets/js/scripts/charts/chartjs/bar/column.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("theme-assets/js/scripts/charts/chartjs/bar/bar.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("theme-assets/js/scripts/charts/chartjs/line/line.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("theme-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js") ?>" type="text/javascript"></script>
<script src="<?php echo base_url("theme-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js") ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

</body>

</html>

<script type="text/javascript">
  <?php if ($this->session->flashdata('save_success')) : ?>
    swal("", "Add Data Complete!", "success");
  <?php endif; ?>

  <?php if ($this->session->flashdata('un_success')) : ?>
    swal("", "Data Duplicate!!", "error");
  <?php endif; ?>

  <?php if ($this->session->flashdata('del_success')) : ?>
  swal("","Delete Data Success", "success");
  <?php endif; ?>
  
//   function deletedata() 
//   {
//     Swal({
//       title: 'Are you sure?',
//       text: "You won't be able to revert this!",
//       icon: 'warning',
//       showCancelButton: true,
//       confirmButtonColor: '#3085d6',
//       cancelButtonColor: '#d33',
//       confirmButtonText: 'Yes, delete it!',
//       closeOnConfirm: false
//     },
//     function(idProject){
//       $.ajax({
//             url: "<?php echo base_url('project_ctrl/delete_data')?>",
//             type: "post",
//             data: {idProject:idProject},
//             success:function(){
//               swal('Data Delete Success', 'delect_success');
//             },
//             error:function(){
//               swal('Data Delete Unsuccess', 'delete_error');
//             }
//       });
//     });
// }
 
</script>