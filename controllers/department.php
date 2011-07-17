<?php
class Department extends CI_Controller{
	var $employee1;
	var $employee2;
	var $department1;
	
	function __construct(){
		parent::__construct();
		$this->load->model('department_model');
		$this->init_data();
		}
	function index(){
		echo $this->department1->get_department_name() . '<p>';
		$employees = $this->department1->get_employees();
		foreach($employees as $emp){
			echo $emp->get_employee_name() . '<br>';
			}
		}

	function get_all(){
		$employees = array($this->employee1,$this->employee2);
		foreach($employees as $emp){
			echo $emp->get_employee_name() . '<br>';
			}
		}
		function init_data(){
			$this->employee1 = new Employee_model;
			$this->employee1->set_employee_id('1');
			$this->employee1->set_employee_name('Puji');
			$this->employee1->set_dept_id('MIS');		

			$this->employee2 = new Employee_model;
			$this->employee2->set_employee_id('2');
			$this->employee2->set_employee_name('Najiyah');
			$this->employee2->set_dept_id('MIS');		

			$this->department1 = new Department_model;
			$this->department1->set_department_id('1');
			$this->department1->set_department_name('Department 1');
			$this->department1->add_employee($this->employee1);		
			$this->department1->add_employee($this->employee2);		
			}
	}