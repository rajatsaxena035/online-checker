<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checker extends CI_Controller {

	public function index()
	{
		$this->load->view('enter_choice');
	}

	public function insertdb()
	{
		$this->load->model('Dbinsert');
		$status = $this->Dbinsert->student();
		$this -> score($status);
	}

	public function score($status)
	{
		$this->load->view('final_result',$status);	
	}
}
