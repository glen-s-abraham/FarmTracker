<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index($msg="")
    {

        $message["msg"]=$msg;
        $this->load->view("login/Headers");
        $this->load->view("login/Login",$message);
        $this->load->view("login/Footer");
    }
    public function register()
    {
        $this->load->view("login/Headers");
        $this->load->view("login/Register");
        $this->load->view("login/Footer");
    }
    public function login_check()
    {
    	$this->load->model('Users');
        $data["email"]=$this->input->post("email");
        $data["password"]=$this->input->post("password");
        $res=$this->Users->check_user($data);
        $r=$res->num_rows();
        if($r==0)
        {
            $msg="Invalid user";
            $this->index($msg);
        }
        else
        {
        	$r=$res->row();
        	session_start();
            $_SESSION['user']=$r->name;
	 		$_SESSION['user_id']=$r->id;
	 		header('location:'.base_url().'index.php/home/landing');
            
            
            
        }
            
            
        
    }
    public function register_user()
    {
    	$this->load->model('Users');
         $data["name"]=$this->input->post("name");
        $data["email"]=$this->input->post("email");
        $data["password"]=$this->input->post("password");
        $res=$this->Users->add_user($data);
        $message["msg"]=$res;
        $this->load->view("login/Headers");
        $this->load->view("login/Register",$message);
        $this->load->view("login/Footer");
        
    
     }
     public function logout()
     {
     	session_destroy();
     	header('location:'.base_url());
     }
	 public function start_session()
	 {
	 		 
	 }

	public function landing()
	{
		session_start();
		$this->load->model('Project');
		
		$res['data']=$this->Project->fetch($_SESSION['user_id']);
		$this->load->view('landing',$res);
		$this->load->view("footer");

		
				
	}
	public function add_project()
	{
		session_start();
		$data=$this->input->post();
		$data['user_id']=$_SESSION['user_id'];
		$this->load->model('Project');
		$this->Project->add_project($data);
		header('location:'.base_url().'index.php/home/landing');
	}
	public function del_project()
	{

		$data['project_id']=$this->input->get('id');
		//print_r($data);
		$this->load->model('Project');
		$this->Project->delete_project($data);
		header('location:'.base_url().'index.php/home/landing');
	}
	public function dash_board()
	{
		$this->load->view('header');
		$_SESSION['project_id']=$this->input->get('id');
		$this->load->view("footer");

	}
	public function cost_entry()
	{
		$this->load->view('header');
		$this->load->model('Cost');
		$res['data']=$this->Cost->getCosts($_SESSION['project_id']);
			
		$this->load->view('cost_entry',$res);
		$this->load->view("footer");

	}
	public function add_item_cost()
	{
		$this->load->view('header');
		$this->load->model('Cost');
		$this->load->view('add_item_cost');
		$this->load->view("footer");
	}
	public function del_item_cost()
	{
		$item_id=$this->input->get('id');
		$this->load->model('Cost');
		$this->Cost->delData(array("item_id"=>$item_id));
		
	}
	public function add_item_cost_db()
	{
		
		$this->load->model('Cost');
		$data=$this->input->post();
		$data['item_tot_cost']=$data['item_qty']*$data['item_cost'];
		$this->Cost->addData($data);

	}
	public function reminder()
	{
		$this->load->view('header');
		$this->load->model('Reminder');
		$res['data']=$this->Reminder->getReminder($_SESSION['project_id']);

			
		$this->load->view('reminder_entry',$res);
		$this->load->view("footer");
	}
	public function del_reminder()
	{
		$item_id=$this->input->get('id');
		$this->load->model('Reminder');
		$this->Reminder->delData(array("rem_id"=>$item_id));
		
	}
	public function add_reminder()
	{
		session_start();
		$this->load->model('Reminder');
		$data=$this->input->post();
		$data['project_id']=$_SESSION['project_id'];
		$this->Reminder->addData($data);

	}
	public function logs()
	{
		$this->load->view('header');
		$this->load->model('Logs');
		$res['data']=$this->Logs->getReminder($_SESSION['project_id']);
			
		$this->load->view('log_entry',$res);
		$this->load->view("footer");
	}
	public function del_log()
	{
		$item_id=$this->input->get('id');
		$this->load->model('Logs');
		$this->Logs->delData(array("log_id"=>$item_id));
		
	}
	public function add_log()
	{
		session_start();
		$this->load->model('Logs');
		$data=$this->input->post();
		$data['project_id']=$_SESSION['project_id'];
		$this->Logs->addData($data);

	}
	public function live_stock()
	{
		$this->load->view('header');
		
		$this->load->model('Livestock');
		$res['data']=$this->Livestock->getStock($_SESSION['project_id']);
		$this->load->view('live_stock_view',$res);
		$this->load->view("footer");
	}
	public function add_livestock()
	{
		$this->load->view('header');
		$this->load->view('add_livestock');
		$this->load->view("footer");
	}
	public function add_livestock_cost_db()
	{
		$data=$this->input->post();
		
		$date=$data['stock_add_date'];
		$date = strtotime(date("Y-m-d", strtotime($date)) . " +".$data ['stock_harvest_time']." month");
		$date = date("Y-m-d",$date);
		$data['stock_harvest_date']=$date;
		$this->load->model('Livestock');
		$this->Livestock->adddata($data);
	}
	public function update_live_stock()
	{
		$post=$this->input->post();
		$data['stock_qty']=$post['stock_qty']-$post['stock_mortality'];
		$this->load->model('Livestock');
		$this->Livestock->updateData($post['stock_id'],$data);
		//print_r($data);

	}
	public function del_live_stock()
	{
		$id=$this->input->get('id');
		$this->load->model('Livestock');
		$this->Livestock->delData($id);
		
	}

}
