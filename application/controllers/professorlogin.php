<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ProfessorLogin extends CI_Controller {

		function __construct(){
		   parent::__construct();
		   $this->load->helper(array('form'));
           $this->load->library('session');
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


        function access_code(){
            $chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            $string =''; // define variable with empty value
            // we generate a random integer first, then we are getting corresponding character , then append the character to $string variable. we are repeating this cycle until it reaches the given length 
            for($i=0;$i<5; $i++) {
                $string .= $chars[rand(0,strlen($chars)-1)];
 
            }
            $data['string'] = $string;
            $this->session->set_flashdata('string', $string);

            $this->load->view('professor/access_code', $data);
        }

	}

?>