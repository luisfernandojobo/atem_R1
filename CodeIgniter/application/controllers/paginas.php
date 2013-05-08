<?php

class Pages extends CI_Controller {

	public function view($page = 'principal')
	{
		$data['title']="probando";
		$this->load->view("templates/cabecera",$data);
		$this->load->view("pages/".$page,$data);
	}
}
