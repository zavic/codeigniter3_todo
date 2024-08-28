<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Todos extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Todo_model');
		$this->load->helper(array('url', 'form'));
	}

	public function index()
	{
		$data['todos'] = $this->Todo_model->get_todos();
		$this->load->view('todos/index', $data);
	}

	public function view($id)
	{
		$data['todo'] = $this->Todo_model->get_todos($id);
		if (empty($data['todo'])) {
			show_404();
		}
		$this->load->view('todos/view', $data);
	}

	public function create()
	{
		if ($this->input->post()) {
			$data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description')
			);
			$this->Todo_model->create_todo($data);
			redirect('/todos');
		}
		$this->load->view('todos/create');
	}

	public function edit($id)
	{
		$data['todo'] = $this->Todo_model->get_todos($id);
		if ($this->input->post()) {
			$update_data = array(
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'is_completed' => $this->input->post('is_completed') ? 1 : 0
			);
			$this->Todo_model->update_todo($id, $update_data);
			redirect('/todos');
		}
		$this->load->view('todos/edit', $data);
	}

	public function delete($id)
	{
		$this->Todo_model->delete_todo($id);
		redirect('/todos');
	}
}
