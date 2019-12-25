<?php
class Livestock extends CI_Model
{
	function getStock($id)
	{
		
		$this->db->where('project_id',$id);
		$q=$this->db->get('livestock');
		return $q->result_array();
		
	}
	function addData($data)
	{
		$this->db->insert('livestock',$data);
		header('location:'.base_url().'index.php/home/live_stock');
	}
	function updateData($id,$data)
	{
		$this->db->where('stock_id',$id);
		$this->db->update('livestock',$data);
		header('location:'.base_url().'index.php/home/live_stock');
	}
	function delData($data)
	{

		$this->db->delete('livestock',array('stock_id'=>$data));
		header('location:'.base_url().'index.php/home/live_stock');
	}
}
?>