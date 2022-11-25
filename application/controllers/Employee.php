<?php

class Employee extends CI_Controller
{
	public function lists()
	{
		$this->load->model('Employee/Employee_model', 'em_model');
		$this->load->library('session');

		$data = array();
		$data['employees'] = $this->em_model->getEmployee();
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
			echo json_encode($data['employees']);
		} else {

			$this->load->view('Employee/lists', $data);
		}
	}

	public function edit()
	{
		$this->load->library('form_validation');
		$this->load->model('Employee/Employee_model', 'em_model');
		$this->form_validation->set_rules('employee[employeeName]', 'Employee Name', 'required',
			array('required' => 'You must enter employee name')
		);
		$this->form_validation->set_rules('employee[employeeEmail]', 'Employee Email', 'trim|required|valid_email',
			array('required' => 'You must enter employee email',
				'valid_email' => 'You must enter valid email',
				'trim' => 'Extra spaces should be removed')
		);
		$data = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (!$this->form_validation->run()) {
				if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
					echo json_encode(['errors' => validation_errors()]);
				} else {
					$this->load->view('Employee/edit', $data);
				}
			} else {

				$saved = $this->em_model->edit($_POST['employee']);
				$this->load->library('session');
				if ($saved) {
					$_SESSION['error_message'] = 'Employee saved Successfully';
					if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')) {
						header('location: lists');
					}
				} else {
					$_SESSION['error_message'] = 'Error occurred';
				}
				$this->session->mark_as_flash('error_message');
			}
		} else {
			if (isset($_GET['id'])) {
				$data['employee'] = $this->em_model->getEmployee($_GET['id']);
				if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
					echo json_encode($data['employee']);
				} else {
					$this->load->view('Employee/edit', $data);
				}
			} else {
				$this->load->view('Employee/edit', $data);
			}
		}
	}

	public function delete()
	{
		$this->load->model('Employee/Employee_model', 'em_model');
		$this->load->library('session');
		if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
			if ($this->em_model->delete($_GET['id'])) {
				$_SESSION['error_message'] = 'Employee Deleted Successfully.';

			} else {
				$_SESSION['error_message'] = 'Error occurred.';
			}
			$this->session->mark_as_flash('error_message');
			header('location: lists');
		}
		$this->input->get();
	}


}
