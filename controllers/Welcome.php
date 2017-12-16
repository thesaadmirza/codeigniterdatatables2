<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function get_tweets()
	{
		$this->load->library('Datatables');
	   $this->datatables->select('id,tweet')->from('tweets');
	   $this->datatables->add_column('edit', '<a class="btn btn-primary" href="profiles/edit/$1">EDIT</a>', 'id');
	   $this->datatables->add_column('delete', '<a class="btn btn-danger" href="profiles/delete/$1">Delete</a>', 'id');
	   echo $this->datatables->generate();
	}
}
