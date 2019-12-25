<?php
class Logs extends CI_Model
{
	function getReminder($id)
	{

		
		$this->db->where('project_id',$id);
		$this->db->order_by("log_date", "desc");
		$q=$this->db->get('logs');
		return $q->result_array();
		
	}
	function addData($data)
	{
		$this->db->insert('logs',$data);
		header('location:'.base_url().'index.php/home/logs');
	}
	function delData($data)
	{
		$this->db->delete('logs',$data);
		header('location:'.base_url().'index.php/home/logs');
	}
}
?>