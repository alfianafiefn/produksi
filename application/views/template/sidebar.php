<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
		   <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/Businessman-512.png') ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo $noind; ?> / <?php echo $jabatan; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
	   <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			  <li class="treeview">
                <a href="<?php echo site_url('C_AplicationReport/') ?>">
                    <i class="fa fa-power-off"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
			 <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i> <span>Production Targets</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
				<ul class="treeview-menu">
				<!--	<li><a href="<?php echo site_url('C_AplicationReport/target_harian') ?>"><i class="fa fa-circle-o text-aqua"></i>Daily Targets</a></li>  -->
					<li><a href="<?php echo site_url('C_AplicationReport/target_produksi') ?>"><i class="fa fa-circle-o text-aqua"></i>Quantity Production</a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="<?php echo site_url('C_AplicationReport/daily_report') ?>">
                    <i class="fa fa-paste"></i> <span>Daily Report</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
			  <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>Master Setup</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
				<ul class="treeview-menu">
					<li><a href="<?php echo site_url('C_AplicationReport/pembagian_kelompok') ?>"><i class="fa fa-circle-o text-aqua"></i>Group Setting</a></li>
					<li><a href="<?php echo site_url('C_AplicationReport/master_setup') ?>"><i class="fa fa-circle-o text-aqua"></i>Setup Form</a></li>
					<li><a href="<?php echo site_url('C_AplicationReport/setup_agreement') ?>"><i class="fa fa-circle-o text-aqua"></i>Agreement</a></li>
                </ul>
            </li>
			
        </ul>
		
		
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">