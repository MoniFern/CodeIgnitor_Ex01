<?php
	class Student extends CI_Controller{

		public function show(){

			$result = $this->Student_model->show_students(); //model file name/model func name
			$this->load->view('student_record',$result); //student_record => view file name
			var_dump($result); 
		}
	}