<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ProfessorLogin extends CI_Controller {

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

                redirect('professorhome', $data);
            }else{
                //If no session, redirect to login page
                $this->load->view('/template/professor/professor_header');
                $this->load->view('/template/professor/professor_login_navbar');     
            	$this->load->view('professor/professor_login');
            	$this->load->view('/template/professor/professor_footer');
            }
		}

	}

?>