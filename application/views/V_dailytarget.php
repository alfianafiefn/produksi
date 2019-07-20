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
					<form>
							<div class="form-body">
								<div class="form-group">
										<div class="col-xs-3">
												<label align="center">Date</label>
										</div>
								</div>
							<br>
							<br>
								<div class="form-group">
										<div class="col-xs-3">
												<input list="gudang" name="gudang" class="form-control" placeholder="type production warehouse">
												<datalist id="gudang">
														<?php foreach ($gudang as $row){ ?>
															<option value="<?php echo $row->nama_gud ?>" class="form-control">
														<?php } ?>
												</datalist>
										</div>
										<div class="col-xs-3">
												<input list="gudang" name="gudang" class="form-control" placeholder="type production warehouse">
												<datalist id="gudang">
														<?php foreach ($gudang as $row){ ?>
															<option value="<?php echo $row->nama_gud ?>" class="form-control">
														<?php } ?>
												</datalist>
										</div>
								</div>
							</div>
					</form>
					</div><!-- /.box-header -->
                <div class="box-body">
               
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
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

    <script>
     $(document).ready(function() {
		 
		  $('#example2 tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );

	$('#example2 tfoot th').each( function () {
        var title = $('#example2 thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
   
        var table = $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
		  "scrollX": true,
		  "deferRender" : true,
		  "scroller": true,
		  "autoWidth":true
        });
		
		table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
	
	
});
    </script>
	<!-- Fungsi datepickier yang digunakan -->
  <script type="text/javascript">
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