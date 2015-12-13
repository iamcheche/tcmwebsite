<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Student_model extends CI_Model {

		public function __construct(){
			$this->load->database();
			$this->load->library('session');		
		}

		function view($data){
          	$this->db->select('a.student_username, b.course_code, b.course_desc, b.credit_unit, d.professor_fname, d.professor_lname, e.days, e.time_start, e.time_end, e.room');
			$this->db->from('students_courses a');
			$this->db->join('courses b', 'a.course_code = b.course_code');
			$this->db->join('profs_courses c', 'b.course_code = c.course_code');
			$this->db->join('professors d', 'c.professor_username = d.professor_username');
			$this->db->join('schedules e', 'b.course_code = e.course_code');
			$this->db->where('a.student_username', $data['username']);
			$query = $this->db->get();

			$result = $query->result();
			return $result;
		}

		function get_query($data, $table_name){
			$this->db->select('*');
			$this->db->from($table_name);
			$this->db->where('student_username',  $data['username']);
			$this->db->where('course_code', $this->uri->segment(3));			

			$query = $this->db->get();

			$result = $query->result();
			return $result;
		}


		function profile($data){
			$this->db->select('*');
			$this->db->from('students');
			$this->db->where('student_username', $data['username']);
			$query = $this->db->get();

			$result = $query->result();
			return $result;
		}

		function view_grade($data){
			$this->db->where('course_code', $data, $this->uri->segment(3));
		}

		function view_student($data){
          	$this->db->select('*');
			$this->db->from('students');
			$this->db->where('student_username', $data['username']);
			$query = $this->db->get();

			$result = $query->result();
			return $result;	
		}

		function account($data){
			$this->db->select('*');
			$this->db->from('students');
			$this->db->where('student_username', $data['username']);

			$query = $this->db->get();

			$result = $query->result();
			return $result;
		}
		
		function update_student($data){
			$this->db->where('student_username', $data['student_username']);
			$this->db->update('students', $data);
		}
	}
?>