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
			<script src="<?php echo base_url('assets/js/jquery-1.4.min.js') ?>" type="text/javascript"></script>
			<script src="<?php echo base_url('assets/js/jquery.sheepItPlugin.js') ?>" type="text/javascript"></script>
			<script src="<?php echo base_url('assets/datepicker/jquery.min.js') ?>" type="text/javascript"></script>
			<script type="text/javascript">



$(document).ready(function() {

     

    var sheepItForm = $('#sheepItForm').sheepIt({

        separator: '',

        allowRemoveLast: true,

        allowRemoveCurrent: true,

        allowRemoveAll: true,

        allowAdd: true,

        allowAddN: true,

        maxFormsCount: 10,

        minFormsCount: 0,

        iniFormsCount: 2

    });

 

});



</script>

<style>



a {

    text-decoration:underline;

    color:#00F;

    cursor:pointer;

}



#sheepItForm_controls div, #sheepItForm_controls div input {

    float:left;    

    margin-right: 10px;

}





</style>
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
            <div class="box box-primary">
	
			<div class="box-header with-border">
				   <form method="post" action="<?php echo site_URL('C_AplicationReport/target_produksi/add')?>" class="form-horizontal">
							<div class="form-body">
								<div class="form-group">
								<div class="col-xs-2">
												<label align="center">Production Date</label>
										</div>
										<div class="col-xs-2">
											      <input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="tanggal_produksi" placeholder="Start Date" required>
										</div>
								</div>
								<div class="form-group">
								<div class="col-xs-2">
												<label align="center">Shift</label>
										</div>
										<div class="col-xs-2">
												<select class="form-control" name="shift" required>
													<option value="1">Shift 1</option>
													<option value="2">Shift 2</option>
												</select>
										</div>
								</div>
								<div class="form-group">
											<div class="col-xs-2">
												<label align="center">Product Name</label>
										</div>
										
										<div class="col-xs-3">
												<input list="gudang" name="nama_barang" class="form-control" placeholder="type production warehouse">
												<datalist id="gudang">
														<?php foreach ($barang as $row){ ?>
															<option value="<?php echo $row->nama_brg ?>" class="form-control">
														<?php } ?>
												</datalist>
										</div>
								</div>
							</div>
			
					</div><!-- /.box-header -->
                <div class="box-body">
				
													<div class="box-header with-border" style="background:#3C8DBC;">
			<div class="col-md-6">
				<div class="wizard-header">
                        	<h4 style="color:white;">
                        	   <b>Perakitan C</b>-  CV. Karya Hidup Sentosa<br>
                        	</h4>
                    	</div>
			</div>
			<div class="col-md-6">
					<div class='text-right'>
					   <button data-toggle="modal" data-target="#myModal" class="btn btn-warning">Add new</button>
					   
						  </div>
			</div>
					</div><!-- /.box-header -->
							<!-- sheepIt Form -->

<div id="sheepItForm">

 

  <!-- Form template-->

  <div id="sheepItForm_template">

    <label for="sheepItForm_#index#_phone">Phone <span id="sheepItForm_label"></span></label>

    <input id="sheepItForm_#index#_phone" name="person[phones][#index#][phone]" type="text" size="15" maxlength="10" />

    <a id="sheepItForm_remove_current">

      <img class="delete" src="images/cross.png" width="16" height="16" border="0">

    </a>

  </div>

  <!-- /Form template-->

   

  <!-- No forms template -->

  <div id="sheepItForm_noforms_template">No phones</div>

  <!-- /No forms template-->

   

  <!-- Controls -->

  <div id="sheepItForm_controls">

    <div id="sheepItForm_add"><a><span>Add phone</span></a></div>

    <div id="sheepItForm_remove_last"><a><span>Remove</span></a></div>

    <div id="sheepItForm_remove_all"><a><span>Remove all</span></a></div>

    <div id="sheepItForm_add_n">

      <input id="sheepItForm_add_n_input" type="text" size="4" />

      <div id="sheepItForm_add_n_button"><a><span>Add</span></a></div></div>

  </div>

  <!-- /Controls -->

   

</div>

<!-- /sheepIt Form -->
								
								<table class="table">
										<thead>
											<th>Nama</th>
											<th>Noind</th>
											<th>Target</th>
											<th>Status TT/OTT</th>
											<th>Keterangan</th>
										</thead>
										<tbody>
										<tr>
											<td><input type="text" name="noind[]" class="form-control" placeholder="Type Noind"></input></td>
											<td><input type="text" name="nama[]" class="form-control" placeholder="Type Name Worker"></input></td>
											<td><input type="text" name="target[]" class="form-control" placeholder="Type Target Production"></input></td>
											<td>
											<select name="status[]" class="form-control" >
												<option value="OT">Targets</option>
												<option value="OTT">Tanpa Targets</option>
											</select>
											</td>
											<td><input type="text" name="keterangan[]" class="form-control" placeholder="Type Target Production"></input></td>
											
										</tr>
										<tr>
											<td><input type="text" name="noind[]" class="form-control" placeholder="Type Noind"></input></td>
											<td><input type="text" name="nama[]" class="form-control" placeholder="Type Name Worker"></input></td>
											<td><input type="text" name="target[]" class="form-control" placeholder="Type Target Production"></input></td>
											<td>
											<select name="status[]" class="form-control" >
												<option value="OT">Targets</option>
												<option value="OTT">Tanpa Targets</option>
											</select>
											</td>
											<td><input type="text" name="keterangan[]" class="form-control" placeholder="Type Target Production"></input></td>
											
										</tr>
										<tr>
											<td><input type="text" name="noind[]" class="form-control" placeholder="Type Noind"></input></td>
											<td><input type="text" name="nama[]" class="form-control" placeholder="Type Name Worker"></input></td>
											<td><input type="text" name="target[]" class="form-control" placeholder="Type Target Production"></input></td>
												<td>
											<select name="status[]" class="form-control">
												<option value="OT">Targets</option>
												<option value="OTT">Tanpa Targets</option>
											</select>
											</td>
											<td><input type="text" name="keterangan[]" class="form-control" placeholder="Type Target Production"></input></td>
										
										</tr>
										<tr>
											<td><input type="text" name="noind[]" class="form-control" placeholder="Type Noind"></input></td>
											<td><input type="text" name="nama[]" class="form-control" placeholder="Type Name Worker"></input></td>
											<td><input type="text" name="target[]" class="form-control" placeholder="Type Target Production"></input></td>
											<td>
											<select name="status[]" class="form-control" >
												<option value="OT">Targets</option>
												<option value="OTT">Tanpa Targets</option>
											</select>
											</td>
											<td><input type="text" name="keterangan[]" class="form-control" placeholder="Type Target Production"></input></td>
											
										</tr>
										<tr>
											<td><input type="text" name="noind[]" class="form-control" placeholder="Type Noind"></input></td>
											<td><input type="text" name="nama[]" class="form-control" placeholder="Type Name Worker"></input></td>
											<td><input type="text" name="target[]" class="form-control" placeholder="Type Target Production"></input></td>
											<td>
											<select name="status[]" class="form-control">
												<option value="OT">Targets</option>
												<option value="OTT">Tanpa Targets</option>
											</select>
											</td>
											<td><input type="text" name="keterangan[]" class="form-control" placeholder="Type Target Production"></input></td>
										</tr>
										</tbody>
								</table>
								    
                </div><!-- /.box-body -->
				
                <div class="box-footer clearfix">
				   <button type="submit" class="btn btn-warning btn-info btn-flat"><b>SAVE</b></button>
						</form>				
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