<?php
class Reminder extends CI_Model
{
	function getReminder($id)
	{

		
		$this->db->where('project_id',$id);
		$this->db->order_by("rem_date", "desc");
		$q=$this->db->get('reminder');
		return $q->result_array();
		
	}
	function addData($data)
	{
		$this->db->insert('reminder',$data);
		header('location:'.base_url().'index.php/home/reminder');
	}
	function delData($data)
	{
		$this->db->delete('reminder',$data);
		header('location:'.base_url().'index.php/home/reminder');
	}
}
?>