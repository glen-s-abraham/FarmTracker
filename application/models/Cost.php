<?php
class Cost extends CI_Model
{
	function getCosts($id)
	{
		
		$this->db->where('project_id',$id);
		$q=$this->db->get('cost');
		return $q->result_array();
		
	}
	function addData($data)
	{
		$this->db->insert('Cost',$data);
		header('location:'.base_url().'index.php/home/cost_entry');
	}
	function delData($data)
	{
		$this->db->delete('Cost',$data);
		header('location:'.base_url().'index.php/home/cost_entry');
	}
}
?>