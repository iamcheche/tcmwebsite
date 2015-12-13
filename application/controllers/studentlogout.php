<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class StudentLogout extends CI_Controller {

    	function __construct(){
            parent::__construct();
        }

        function index(){
        	$this->session->unset_userdata('logged_in');
            redirect('studentlogin', 'refresh');
        }
	}
?>
