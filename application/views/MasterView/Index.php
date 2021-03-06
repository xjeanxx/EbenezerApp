<!DOCTYPE html>

<!-- BEGIN HTML -->
<html lang="en">

	<!-- BEGIN HEADER -->	
	<?php  $this->load->view('MasterView/Header');?>
	<!-- END HEADER -->

	<!-- BEGIN BODY -->
	<body class="page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed">	

	<!-- BEGIN NAVBAR -->				
	<?php $this->load->view('MasterView/NavBar');?>
	<!-- END NAVBAR -->

		<div class="clearfix">
		</div>

		<!-- BEGIN CONTAINER -->
		<div class="page-container">

			<!-- BEGIN SIDEBAR -->
			<?php $this->load->view('MasterView/SideBar');?>
			<!-- END SIDEBAR -->

			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper">
				<div class="page-content">				  
					<?php $this->load->view($get_view);?>
				</div>
			</div>
			<!-- END CONTENT -->

		</div>
		<!-- END CONTAINER -->

	<!-- BEGIN SPINNER LOADING -->
	<div class="text-center" id="spinner-loading" hidden="hidden">
	<i class="fa fa-spinner fa-spin fa-3x color-spinner"></i>&nbsp;Cargando...
	</div>
	<!-- END SPINNER LOADING -->

	<!-- BEGIN FOOTER -->				
	<?php $this->load->view('MasterView/Footer');?>
	<!-- END FOOTER -->

	<!-- BEGIN Js PAGE -->				
	<?=isset($get_script_page)?$get_script_page:'';?>
	<!-- END JS PAGE -->

	</body>
	<!-- END BODY -->
	
</html>
<!-- END HTML -->