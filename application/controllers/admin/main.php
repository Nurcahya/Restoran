<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
			$this->load->library('email');
			$this->load->helper('text');
			$this->load->helper('url');	
			$this->load->library('grocery_CRUD');
			$this->output->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
			$this->output->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
			$this->output->set_header('Pragma: no-cache'); 
			/*if($this->session->userdata('name') == '' && $this->session->userdata('id_member') == '' && $this->session->userdata('status') == '')
			{ 
                 redirect('frontend/login'); 
			}
			if($this->session->userdata('status') == '1')
			{
				redirect('frontend/home');
			}*/
	}
	
	
	function index()
	{
		if($this->session->userdata('username_operator') == '' ){ 
		redirect('admin/login');
		}
		else {
		$this->load->view('backend/main');	
	}
	}
	
		
	function customer()
	{
	
		$crud = new grocery_CRUD();
		$crud->set_table('customer');
		//$crud->set_field_upload('file_pendukung','assets/uploads/file_pendukung');
		$crud->set_subject('Customer');
		$crud->unset_add();
		$output = $crud->render();
		$this->load->view('backend/grid',$output);
	
	}
	
	function pesanan()
	{
	
		$crud = new grocery_CRUD();
		$crud->set_table('pesanan');
		//$crud->set_field_upload('file_pendukung','assets/uploads/file_pendukung');
		
		$crud->set_relation('id_customer','customer','nama_customer');
		$crud->set_subject('Pesanan');
		$output = $crud->render();
		$this->load->view('backend/grid',$output);
	
	}
	
	function presensi()
	{
	
		$crud = new grocery_CRUD();
		$crud->set_table('presensi');
		//$crud->set_field_upload('file_pendukung','assets/uploads/file_pendukung');
		$crud->set_relation('id_pelayan','pelayan','nama_pelayan');
		$crud->columns('id_pelayan','status_presensi','tanggal_masuk','jam_masuk','jam_keluar', 'keterangan');
		$crud->field_type('id_operator', 'hidden', $this->session->userdata('id_operator'));
		$crud->set_subject('Presensi');
		$output = $crud->render();
		$this->load->view('backend/grid',$output);
	
	}
	
	function pelayan()
	{
	
		$crud = new grocery_CRUD();
		$crud->set_table('pelayan');
		//$crud->set_field_upload('file_pendukung','assets/uploads/file_pendukung');
		$crud->set_subject('Pelayan');
		$output = $crud->render();
		$this->load->view('backend/grid',$output);
	
	}
	
	function meja()
	{
	
		$crud = new grocery_CRUD();
		$crud->set_table('meja');
		//$crud->set_field_upload('file_pendukung','assets/uploads/file_pendukung');
		$crud->set_subject('Meja');
		$output = $crud->render();
		$this->load->view('backend/grid',$output);
	
	}
	
}