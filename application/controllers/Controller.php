<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model');
	}

	public function index()
	{
		$this->load->view('homepage');
	}

	public function locations()
	{
		$viewData['locations'] = $this->main_model->get_locations();
		$this->load->view('locations',$viewData);
	}

	public function insert()
	{
		$data = array(
		    'lat' => $this->input->post('lat'),
		    'lng' => $this->input->post('lng'),
		    'description' => $this->input->post('desc')
		);
		
		$this->main_model->insert($data);
	}

	public function delete($id = null)
	{
		if ($id == null) {
			redirect('');
		}

		$result = $this->main_model->delete(['id' => $id]);
		if ($result) {
			$this->session->set_flashdata('result', '<div class="alert alert-success mt-3" role="alert">Successful.</div>');
			redirect('locations');
		} else {
			$this->session->set_flashdata('result', '<div class="alert alert-success mt-3" role="alert">Failed.</div>');
			redirect('locations');
		}
	}

	public function edit($id = null)
	{
		if ($id == null) {
			redirect('');
		}

		$data['edit_page_data'] = $this->main_model->get_a_location(['id' => $id]);
		$this->load->view('homepage',$data);
	}

	public function edit_action()
	{
		$data = array(
		    'lat' => $this->input->post('lat'),
		    'lng' => $this->input->post('lng'),
		    'description' => $this->input->post('desc')
		);
		
		$result = $this->main_model->update($data,['id' => $this->input->post('id')]);

		if ($result) {
			$this->session->set_flashdata('result', '<div class="alert alert-success mt-3" role="alert">Successful.</div>');
			redirect('locations');
		} else {
			$this->session->set_flashdata('result', '<div class="alert alert-success mt-3" role="alert">Failed.</div>');
			redirect('locations');
		}
	}
}
