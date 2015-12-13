<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class AdminLogin extends CI_Controller {

		function __construct(){
		   parent::__construct();
		   $this->load->helper(array('form'));
		}

		function index(){
		   if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                redirect('adminhome', $data);
            }else{
                //If no session, redirect to login page
                $this->load->view('/template/admin/admin_header');
                $this->load->view('/template/admin/admin_login_navbar');     
            	$this->load->view('admin/admin_login');
            	$this->load->view('/template/admin/admin_footer');
            }
		}

	}

?>