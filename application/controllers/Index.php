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
			$this->load->library('session');
	}
	// 首页
	public function index($lang='') 
	{
		if($lang=='cn'){
			$this->session->set_userdata('language','chinese');
		}elseif($lang=='en'){
			$this->session->set_userdata('language','english');
		}
		if(!isset($_SESSION['language'])){
			$this->session->set_userdata('language','chinese');
		}

		$this->load->view('index');
	}

	// 简介
	public function about()
	{
		$this->load->view('about');
	}

	// 产品
	public function product()
	{
		$this->load->view('product');
	}
	// 产品detail
	public function product_detail($pn='')
	{
		$data['pn']=$pn;
		$this->load->view('product_detail',$data);
	}

	// 留言
	public function message()
	{
		$this->load->view('message');
	}

	// 联系
	public function contact()
	{
		$this->load->view('contact');
	}
}