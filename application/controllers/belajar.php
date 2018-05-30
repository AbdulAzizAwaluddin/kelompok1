<?php

function index(){
	$submit = $this->input->post('submit');

	if (isset($submit)) {
		$data = array(
		'npm' => $this->input->post('npm'),
		'nama' => $this->input->post('nama'),
		$this->m_database->insertData('mhs', $data),
		redirect($this->uri->uri_string())
            
		);
		}
		
	}
	$edit = $this->input->post('edit-write');

	if (isset($edit)) {
		$data = array(
		'npm' => $this->input->post('npm'),
		'nama' => $this->input->post('nama'),

		$where = array('npm' => $this->input->post('npm'))
		$this->m_database->updateData('mhs', $data, $where),
		redirect($this->uri->uri_string())
            
		);




?>