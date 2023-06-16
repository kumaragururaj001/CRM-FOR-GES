<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		
		if($this->input->post()){
			$email = $this->input->post('email_id');
			$password = sha1($this->input->post('password'));
			
			$data = $this->db->get_where('users',array('email_id'=>$email, 'password'=>$password,'account_status'=>1,'role'=>"SUADMIN"))->result_array();
			
			if (count($data)>=1){
				$uid 		= $data[0]['id']; 
				$first_name = $data[0]['first_name'];
				$last_name  = $data[0]['last_name'];
				$email 		= $data[0]['email_id'];

				$this->session->set_userdata('admin_uid',$uid);
				$this->session->set_userdata('admin_first_name', $first_name);
				$this->session->set_userdata('admin_last_name', $last_name);
				$this->session->set_userdata('admin_email',$email);
			}
		}
		if($this->session->userdata['admin_uid']){
			$page_data['page_title'] = 'Dashboard';
			$page_data['page'] = 'dashboard';
			$this->load->view('admin/index',$page_data);
		}else{
			$page_data['page_title'] = 'Login Admin';
			
			$this->load->view('admin/login',$page_data);
		}
	}
		
		
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}

}