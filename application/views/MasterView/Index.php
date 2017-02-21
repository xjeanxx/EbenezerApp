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
					<?php $this->load->view($get_view);

					//$horaActual = date("h:i:s A")

					$strStart =  date("h:i:s A"); 
					$strEnd   = '11:47 PM'; 
					$dteStart = new DateTime($strStart); 
					$dteEnd   = new DateTime($strEnd); 
					$dteDiff  = $dteStart->diff($dteEnd); 
					print $dteDiff->format("%H:%I:%S"); 


					//echo $horaActual = date("h:i:s A");?>
				</div>
			</div>
			<!-- END CONTENT -->

		</div>
		<!-- END CONTAINER -->

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