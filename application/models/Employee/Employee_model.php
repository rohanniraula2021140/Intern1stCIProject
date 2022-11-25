<?php

class Employee_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getEmployee($id = null)
	{
		if (is_null($id)) {

			return $this->db->get('employee')->result_object();
		} else {
			return $this->db->where('employeeId', $id)->get('employee')->row_object();
		}
	}

	public function edit($data)
	{

		if (isset($data['employeeId'])) {
			$id = $data['employeeId'];

			unset($data['employeeId']);
			return $this->db->where('employeeId', $id)->update('employee', $data);

		} else {
			$result = $this->db->select_max('employeeId', 'id')->get('employee')->row_object()->id ;
			$data['employeeId'] = ++$result;
			$this->db->insert('employee', $data);
			return $this->db->affected_rows() > 0;
		}
	}

	public function delete($id) {
		$this->db->where('employeeId', $id)->delete('employee');
		return $this->db->affected_rows() > 0;
	}


}
