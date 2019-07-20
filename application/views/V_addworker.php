<?php
$this->load->view('template/head');
?>
<!-- Datepicker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/datepicker/date_picker_bootstrap/bootstrap-datetimepicker.min.css')?>" rel="stylesheet" media="screen"/>
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap-select.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/wizard/css/gsdk-base.css') ?>" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url() ?>assets/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.form.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/custom.js" type="text/javascript"></script>
<style type="text/css">
.back-to-top {
cursor: pointer;
position: fixed;
bottom: 0;
right: 20px;
display:none;
}
</style>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
			<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.4.min.js') ?>" type="text/javascript"></script>
			<script src="<?php echo base_url('assets/datepicker/jquery.min.js') ?>" type="text/javascript"></script>

			<script type="text/javascript">
    $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');
});
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="row"> 
	<div class="col-md-10">
			<h3>
				<img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/gear.png') ?>" style="border:solid #ababab;"class="img-circle" alt="User Image"/> <b>Individual Production</b> Targets
			</h3>
	</div>
</div>
 </section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
  
    <div >
            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
			<div class="box-header with-border">
				   <form method="post" action="<?php echo site_URL('C_AplicationReport/target_produksi/add')?>" class="form-horizontal">
							<div class="form-body">
								<?php foreach ($view as $row) {?>
										<div class="form-group">
											<label>Tanggal Produksi :</label><?php echo $row->tanggal_produksi ?>
										</div>
								<?php } ?>
							</div>
					</form>
					</div><!-- /.box-header -->
                <div class="box-body">
							    <h3>Emergency Contacts</h3>

<hr />
<div class="addcon">
    <form name="add_contact">
							
	
	
        <label for="EmergeContactType">Affilation</label>
        <select name="properties[EmergContactType]">
            <option value="1">Primary</option>
            <option value="2">Secondary</option>
            <option value="3">Doctor</option>
            <option value="4">Aunt</option>
            <option value="5">Uncle</option>
            <option value="1">Babysitter</option>
            <option value="2">Caregiver</option>
            <option value="3">Grandmother</option>
            <option value="4">Grandfather</option>
            <option value="5">Step-mother</option>
            <option value="5">Step-father</option>
        </select>
        <br />
        <label for="EmergeContactType">Name</label>
        <input type="text" size="20" class="emerg" name="properties[EmergencyName]" align="right" />
        <br />
        <label for="EmergeContactType">Number</label>
        <input type="text" width="15" maxlength="15" class="emerg" name="properties[EmergContactNum]" pattern="[789][0-9]{9}" align="right" />
    </form>
</div>
<a href="#" class="addContact">Add Contact</a>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
								
                </div><!-- /.box-footer -->
          
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" 
  role="button"  data-toggle="tooltip" data-placement="top">
  <span class="glyphicon glyphicon-chevron-up"></span>
</a>
<?php
$this->load->view('template/js');
?>

<!--- modal --->
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

<!--  <script src="<?php echo base_url('assets/datepicker/bootstrap.min.js'); ?>"></script>  bikin modal nggak aktif-->
	 
<script type="text/javascript" src="<?php echo base_url('assets/datepicker/date_picker_bootstrap/js/bootstrap-datetimepicker.js')?>" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datepicker/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js')?>" charset="UTF-8"></script>

<script type="text/javascript">
$('.addContact').click(function(e) {
    e.preventDefault();
    var clonedForm = $('form[name="add_contact"]:first').clone(); // clone the form
    $('.addcon').append(clonedForm); // append the form to the div
    var removeLink = '<a href="#" class="removeContact">Remove Contact</a>'; // create a remove link
    $('form[name="add_contact"]:last').append(removeLink);
});
$('.addcon').on('click', '.removeContact', function(e) { // use on() to delegate
    e.preventDefault();
    $(this).closest('form').remove();
});
</script>

  <script type="text/javascript">
  <!-- End Bootstrap modal -->
	 $('.datepicker').datetimepicker({
	        language:  'id',
	        weekStart: 1,
	        todayBtn:  1,
	  autoclose: 1,
	  todayHighlight: 1,
	  startView: 2,
	  minView: 2,
	  forceParse: 0
	    });
	</script> 
<?php
$this->load->view('template/foot');
?>