<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doc extends CI_Controller {

	public function tech($fname='index')
	{
		$data['fname'] = $fname;

		$this->load->view('header');
		$this->load->view('doc/tech',$data);
		$this->load->view('footer');

	}

	public function news($fname='index')
	{
		$data['fname'] = $fname;

		$this->load->view('header');
		$this->load->view('doc/news',$data);
		$this->load->view('footer');
	}

	public function office($fname='index')
	{
		$data['fname'] = $fname;

		$this->load->view('header');
		$this->load->view('doc/office',$data);
		$this->load->view('footer');
	}

	public function opera($fname='index')
	{
		$data['fname'] = $fname;
		
		$this->load->view('header');
		$this->load->view('doc/opera',$data);
		$this->load->view('footer');
	}

}