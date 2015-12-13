<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class StudentLogin extends CI_Controller {

		function __construct(){
		   parent::__construct();
		   $this->load->helper(array('form'));
		}

		function index(){
		   if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['fname'] = $session_data['fname'];
                $data['lname'] = $session_data['lname'];
                redirect('studenthome', $data);
            }else{
                //If no session, redirect to login page
                //$this->load->view('/template/login_header');
                //$this->load->view('/template/login_navbar');     
            	$this->load->view('student/student_login_view');
            	//$this->load->view('/template/login_footer');
            }
		}

	}

?>