<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 *
	 * 
	 */
	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
	}
	public function index()
	{
		print_r($this->config->item('index_page'));
		$this->load->view('index');
	}
}
