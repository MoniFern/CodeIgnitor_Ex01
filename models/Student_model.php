<?php
class Student_model extends CI_Model{

	public function show_students(){

		$sql = "SELECT * FROM `student`";
		$query = $this->db->query($sql);
		return $query->result();
	}
}