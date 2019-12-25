<?php
class Project extends CI_Model{
	public function add_project($data)
	{
		
		 $this->db->insert('project',$data);

	}
	public function fetch($user_id)
	{
		$this->db->where('user_id',$user_id);
		$q=$this->db->get('project');
		return $q->result_array();
	}
	public function delete_project($data)
	{
		$this->db->delete('project',$data);
		$this->db->delete('cost',$data);
        $this->db->delete('reminder',$data);
        $this->db->delete('logs',$data);
		//data related to the current project
		//add other tables as well
	}
}
?>