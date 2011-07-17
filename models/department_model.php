<?php
class Department_model extends CI_Model{
	var $department_id;
	var $department_name;
	var $employees = array();
	function __construct(){
		parent::__construct();
		$this->load->model('Employee_model');
		}
	function get_department_id(){
		return $this->department_id;
		}
	function get_department_name(){
		return $this->department_name;
		}
	function get_employees(){
		return $this->employees;
		}

	function set_department_id($department_id){
		$this->department_id=$department_id;
		}
	function set_department_name($department_name){
		$this->department_name=$department_name;
		}
	function add_employee($employee){
		array_push($this->employees,$employee);
		}
	}