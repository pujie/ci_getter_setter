<?php
class Employee extends CI_Controller{
	var $employee1;
	var $employee2;
	var $employee3;
	var $department1;
	
	function __construct(){
		parent::__construct();
		$this->load->model('employee_model');
		$this->init_data();
		}

	function index(){		
		echo $this->employee1->get_employee_name() . '<br>';
		echo 'has staff:<br>';
		foreach($this->employee1->get_down_lines() as $staff){
			echo $staff->get_employee_name() . '<br>';
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

		$this->employee3 = new Employee_model;
		$this->employee3->set_employee_id('3');
		$this->employee3->set_employee_name('Mafaaza');
		$this->employee3->set_dept_id('MIS');		

		$this->employee1->add_down_line($this->employee2);
		$this->employee1->add_down_line($this->employee3);
	}
}