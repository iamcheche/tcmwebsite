<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class AccessCode extends CI_Controller {
        
        function __construct(){
            parent::__construct();
            $this->load->helper(array('form'));
            $this->load->library('session');
        }

        function sendtoprofessor(){  
            
        
                $config = array(
                    'protocol' => 'smtp',
                    'mailtype' => 'html',
                    'smtp_host' => 'smtp.gmail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'eblast.noreply@gmail.com',
                    'smtp_pass' => 'emailblast123'
                );
                
                $string =$this->access_code();

                $this->load->library('email', $config);
                $this->email->initialize($config);
                $this->email->set_newline("\r\n");

                $query = $this->db->query('SELECT professor_email FROM professors WHERE professor_username = ' . '\'' . $this->input->post('username') . '\';'); 
       
                $email = $query->row()->professor_email;
                
                

                $this->email->from('eblast.noreply@gmail.com', 'Access Code - NOREPLY');
                $this->email->to($email);
                $this->email->subject('Your Access Code to login');
                $this->email->message('Your access code is: ' . $string . '.');

                if ($this->email->send()){
                    $this->load->view('professor/access_code');
                }else{
                    show_error($this->email->print_debugger());
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

            return $string;
            //$this->load->view('professor/access_code', $data);
        }

    }
?>
