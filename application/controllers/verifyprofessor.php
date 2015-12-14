<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class VerifyProfessor extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('professor','',TRUE);
        }

        function index(){
            //This method will have the credentials validation
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
            $this->form_validation->set_rules('code', 'Code', 'trim|required|xss_clean|callback_check_access_code');


            if($this->form_validation->run() == FALSE){
                //Field validation failed.  User redirected to login page
                $this->load->view('template/professor/professor_header');
                $this->load->view('template/professor/professor_login_navbar');
                $this->load->view('professor/professor_login');
                $this->load->view('template/professor/professor_footer');
            }else{
                //Go to private area
                redirect('professorhome', 'refresh');
            }

        }

        function check_access_code(){

            //Field validation succeeded.  Validate against database
            $code = $this->input->post('code');
            $string = $this->session->flashdata('string');
            if($code == $string ){
                return 1;
            }else{
                //$this->form_validation->set_message('check_access_code', 'Invalid Access Code');
                return 0;
            }
        }

        function check_database($password){
            //Field validation succeeded.  Validate against database
            $username = $this->input->post('username');
             echo $this->check_access_code();
            //query the database
            $result = $this->professor->login($username, $password);
            
            if($result && $this->check_access_code() == 1){
                $sess_array = array();
                foreach($result as $row){
                    $sess_array = array(
                        'id' => $row->professor_id,
                        'username' => $row->professor_username,
                        'fname' => $row->professor_fname,
                        'lname' => $row->professor_lname  
                    );
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                return TRUE;
            }else{
                
                $this->form_validation->set_message('check_database', 'Invalid Username/Password/Access Code');
                return false;
            }
        }
    }
?>