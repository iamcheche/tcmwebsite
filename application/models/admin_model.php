<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin_model extends CI_Model {

		public function __construct(){
			$this->load->database();
			$this->load->library('session');
			$this->load->helper('text');		
		}


		function get_table($table_name){
			$this->db->select('*');
			$this->db->from($table_name);

			$query = $this->db->get();

			$result = $query->result();
			return $result;
		}


		function create_student(){
			$student_username = substr($this->input->post('student_fname'), 0, 1) . $this->input->post('student_lname');
			
			$data = array(
				'student_number' =>$this->input->post('student_number'),
				'student_fname' =>$this->input->post('student_fname'),
				'student_mi' =>$this->input->post('student_mi'),
				'student_lname' =>$this->input->post('student_lname'),
				'student_program' =>$this->input->post('student_program'),
				'student_yrlvl' =>$this->input->post('student_year'),
				'student_address' =>$this->input->post('student_address'),
				'student_email' =>$this->input->post('student_email'),
				'student_contact' =>$this->input->post('student_contact'),
				'student_username' => $student_username,
				'student_password' => '123456'
			);
			$this->db->insert('students', $data);
		}

		function create_professor(){
			$professor_username = substr($this->input->post('professor_fname'), 0, 1) . $this->input->post('professor_lname');
			
			$data = array(
				'professor_number' =>$this->input->post('professor_number'),
				'professor_fname' =>$this->input->post('professor_fname'),
				'professor_lname' =>$this->input->post('professor_lname'),
				'professor_dept' =>$this->input->post('professor_dept'),
				'professor_email' =>$this->input->post('professor_email'),
				'professor_contact' =>$this->input->post('professor_contact'),
				'professor_username' => $professor_username,
				'professor_password' => '123456'
			);
			$this->db->insert('professors', $data);
		}

		function create_schedule(){
			$data = array(
				'days' =>$this->input->post('days'),
				'time_start' =>$this->input->post('time_start'),
				'time_end' =>$this->input->post('time_end'),
				'room' =>$this->input->post('room'),
				'professor_username' =>$this->input->post('professor'),
				'course_code' =>$this->input->post('course_code')
			);
			$this->db->insert('schedules', $data);
		}

		function get_professors() {
	        $data = array();
	        $this->db->select('professor_username');
			$this->db->from('professors');
	        $query = $this->db->get();
		        if ($query->num_rows() > 0) {
		            foreach ($query->result_array() as $row){
		                    $data[] = $row;
		                }
		        }
	        $query->free_result();
	        return $data;
    	}

    	function get_course() {
	        $data = array();
	        $this->db->select('course_code');
			$this->db->from('courses');
	        $query = $this->db->get();
		        if ($query->num_rows() > 0) {
		            foreach ($query->result_array() as $row){
		                    $data[] = $row;
		                }
		        }
	        $query->free_result();
	        return $data;
    	}

    	function get_student() {
	        $data = array();
	        $this->db->select('student_username');
			$this->db->from('students');
	        $query = $this->db->get();
		        if ($query->num_rows() > 0) {
		            foreach ($query->result_array() as $row){
		                    $data[] = $row;
		                }
		        }
	        $query->free_result();
	        return $data;
    	}

    	function create_course(){
			$data = array(
				'course_code' =>$this->input->post('course_code'),
				'course_desc' =>$this->input->post('course_desc'),
				'credit_unit' =>$this->input->post('credit_unit')
			);
			$this->db->insert('courses', $data);
		}

		function create_student_course(){
			$data = array(
				'course_code' =>$this->input->post('course_code'),
				'student_username' =>$this->input->post('student_username'),
			);
			$this->db->insert('students_courses', $data);
		}
	}
?>
		