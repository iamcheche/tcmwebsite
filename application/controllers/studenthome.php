<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    session_start(); //we need to call PHP's session object to access it through CI
    class StudentHome extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('student_model');
            $this->load->helper('url');
        }


        function index(){            
            if($this->session->userdata('logged_in')){
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['fname'] = $session_data['fname'];
                $data['lname'] = $session_data['lname'];
                $data['title'] = 'Tablet Class Manager';
                

                
                $this->load->view('template/student/student_header', $data);
                $this->load->view('template/student/student_navbar', $data);
                $this->load->view('template/student/student_footer');
                $data['profile'] = $this->student_model->profile($data);
                $data['account'] = $this->student_model->account($data);

                
                if ($query = $this->student_model->profile($data)){
                    $data['profile'] = $query;
                }

                if ($query = $this->student_model->view($data)){
                    $data['records'] = $query;
                }

                $this->load->view('student/student_home_view', $data);
                
            }else{
                //If no session, redirect to login page
                redirect('studentlogin', 'refresh');
            }
        } 

        function show_view_grade(){
            if($this->session->userdata('logged_in')){

                $course = $this->uri->segment(3);

                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['fname'] = $session_data['fname'];
                $data['lname'] = $session_data['lname'];
                $data['title'] = 'Tablet Class Manager';
                $data['course_code'] = $course;

                $data['assignments'] = $this->student_model->get_query($data, 'assignments');
                $data['seatworks'] = $this->student_model->get_query($data, 'seatworks');
                $data['quizzes'] = $this->student_model->get_query($data, 'quizzes');
                $data['attendance'] = $this->student_model->get_query($data, 'attendance');
                $data['lab_activities'] = $this->student_model->get_query($data, 'lab_activities');
                $data['recitations'] = $this->student_model->get_query($data, 'recitations');
                $data['exams'] = $this->student_model->get_query($data, 'exams');



                $this->load->view('template/student/student_header', $data);
                $this->load->view('template/student/student_navbar', $data);
                $this->load->view('template/student/student_footer');
                $this->load->view('student/grade_view', $data);

                if ($query = $this->student_model->get_query($data, 'assignments')){
                        $data['assignments'] = $query;
                } 

            }else{
                redirect('studentlogin', 'refresh');
            }
        }

        function show_student(){
           
            if($this->session->userdata('logged_in')){

                $username = $this->uri->segment(3);

                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['fname'] = $session_data['fname'];
                $data['lname'] = $session_data['lname'];
                $data['title'] = 'Tablet Class Manager';
                $data['username'] = $username;



                $data['students'] =$this->student_model->view_student($data);
                $this->student_model->account($data);
                
                $this->load->view('template/student/student_header', $data);
                $this->load->view('template/student/student_navbar', $data);
                $this->load->view('template/student/student_footer');
                $this->load->view('student/update_account', $data);
             }else{
                //If no session, redirect to login page
                 redirect('studentlogin', 'refresh');
            } 
            
        }

        function account_update(){
            $data['username'] = $this->input->post('student_username');
            $data = array(
                    'student_number' => $this->input->post('student_number'),
                    'student_fname' => $this->input->post('student_fname'),
                    'student_mi' => $this->input->post('student_mi'),
                    'student_lname' => $this->input->post('student_lname'),
                    'student_program' => $this->input->post('student_program'),
                    'student_yrlvl' => $this->input->post('student_year'),
                    'student_email' => $this->input->post('student_email'),
                    'student_contact' => $this->input->post('student_contact'),
                    'student_address' => $this->input->post('student_address'),
                    'student_username' => $this->input->post('student_username'),
                    'student_password' => $this->input->post('student_password')
                );
            $this->student_model->update_student($data);
            $this->show_student($data['student_username']);
            redirect('studenthome', 'refresh');

        }
    }

?>