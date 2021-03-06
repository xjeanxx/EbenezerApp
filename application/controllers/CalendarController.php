<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once (dirname(__FILE__) . "/MasterController.php");

class CalendarController extends  MasterController{
 
/****************************************************************************************************/
	public function schedule_view()
	{
		switch ($this->session->userdata('login')) 
		{
			case FALSE:
				redirect(base_url());
				break;

			case TRUE:			
				$data= array(
				'get_view'=> 'CalendarView/Index',				
				'get_menu'=> $this->get_menu(19),
				'get_information_user'=> $this->get_information_user(),
				'get_script_page'=>'<script src="application/helpers/CalendarHelper.js" type="text/javascript"></script>');

				$this->load->view('MasterView/Index',$data);
				break;	;			
		}		
	}
/****************************************************************************************************/
	public function get_schedule_sunat()
	{
		$period = $this->input->post('period', TRUE);
		$list 	= $this->CalendarModel->get_schedule_sunat($period);
		$output = array("Data" => $list);
		echo json_encode($output);
	}
/****************************************************************************************************/
	public function get_schedule_year_sunat()
	{
		$period = $this->input->post('period', TRUE);
		$list 	= $this->CalendarModel->get_schedule_year_sunat($period);
		$output = array("Data" => $list);
		echo json_encode($output);
	}
/****************************************************************************************************/
	public function set_schedule_sunat()
	{
		$json 				= file_get_contents('php://input');
		$data 				= json_decode($json,TRUE);		
		$set_schedule_sunat = $this->CalendarModel->set_schedule_sunat($data);
		echo json_encode($set_schedule_sunat);
	}
/****************************************************************************************************/
	public function get_schedule_alert()
	{		
		$get_schedule_alert = $this->CalendarModel->get_schedule_alert();

		if($get_schedule_alert->AlertSeconds){
			$output = array(
			"Seconds" => $get_schedule_alert->AlertSeconds,
			"Period"  => $get_schedule_alert->_period,
			"Digit"   => $get_schedule_alert->_digit,
			"Life"    => $get_schedule_alert->_life);		
			echo json_encode($output);
		}
	}
/****************************************************************************************************/
	public function update_complete_schedule()
	{
		$json 				= file_get_contents('php://input');
		$data 				= json_decode($json,TRUE);		
		$update_complete_schedule = $this->CalendarModel->update_complete_schedule($data);
		
		if($update_complete_schedule){
			echo json_encode($update_complete_schedule);
		}
	}
/****************************************************************************************************/
	public function get_schedule_sunat_byperioddigit()
	{
		$json 				= file_get_contents('php://input');
		$data 				= json_decode($json,TRUE);		
		$output = $this->CalendarModel->get_schedule_sunat_byperioddigit($data);
		echo json_encode($output);
	}
/****************************************************************************************************/
	public function update_schedule_sunat()
	{
		$json 				= file_get_contents('php://input');
		$data 				= json_decode($json,TRUE);		
		$update_schedule_sunat = $this->CalendarModel->update_schedule_sunat($data);
		echo json_encode($update_schedule_sunat);
	}
/****************************************************************************************************/
	public function delete_schedule_sunat()
	{
		$json 				= file_get_contents('php://input');
		$data 				= json_decode($json,TRUE);		
		$delete_schedule_sunat = $this->CalendarModel->delete_schedule_sunat($data);
		echo json_encode($delete_schedule_sunat);
	}
/****************************************************************************************************/
}
