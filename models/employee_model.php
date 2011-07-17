<?php
class Employee_model extends CI_Model{
	var $employee_id;
	var $employee_name;
	var $dept_id;
	var $down_lines = array();
	function __construct(){
		parent::__construct();
		}
	function get_employee_id(){
		return $this->employee_id;
		}
	function get_employee_name(){
		return $this->employee_name;
		}
	function get_dept_id(){
		return $this->dept_id;
		}
	function get_down_lines(){
		return $this->down_lines;
		}
	function set_employee_id($employee_id){
		$this->employee_id=$employee_id;
		}
	function set_employee_name($employee_name){
		$this->employee_name=$employee_name;
		}
	function set_dept_id($dept_id){
		$this->dept_id=$dept_id;
		}
	function set_down_lines($down_lines){
		$this->down_lines = $down_lines;
		}
	function add_down_line($down_line){
		array_push($this->down_lines,$down_line);
		}
	}