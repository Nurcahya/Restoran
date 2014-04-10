<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->model('customermodel');
		$this->output->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
		$this->output->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
		$this->output->set_header('Pragma: no-cache'); 
		/*
		if($this->session->userdata('name') == '' && $this->session->userdata('id_member') == '' && $this->session->userdata('status') == '')
			{ 
                 redirect('frontend/login'); 
			}
			if($this->session->userdata('status') == '0')
			{
				redirect('backend/main');
		}
		*/
	}
	
	public function index()
	{
		$data['meja'] = $this->customermodel->jum_meja();
		$this->load->view('frontend/main',$data);
	}
	
	public function pesan()
	{
		if($this->input->post('nama')==""){
		redirect('home/page404');
		}
		else {
		$data['current'] = 1;
		$kode = md5($this->input->post('email').time());
		$this->customermodel->customer($kode);
		$row = $this->customermodel->get_customer($kode);
		$row2 =  $this->customermodel->kode_reservasi();
		$this->customermodel->pesan($row['id_customer'], $row2);
		$data['reservasi'] = $this->customermodel->getreservasi($row2);
		$this->load->view('frontend/detailpesanan',$data);
		}
	}
	
	public function pesanmakanjuga()
	{
		if($this->input->post('nama')==""){
		redirect('home/page404');
		}
		else {
		$data['current'] = 1;
		$kode = md5($this->input->post('email').time());
		$this->customermodel->customer($kode);
		$row = $this->customermodel->get_customer($kode);
		$row2 =  $this->customermodel->kode_reservasi();
		$this->customermodel->pesan($row['id_customer'], $row2);
		$this->customermodel->pesanmakan($row['id_customer'], $row2);
		$data['reservasi'] = $this->customermodel->getreservasi($row2);
		$this->load->view('frontend/detailpesanan',$data);
		}
	}
	
	public function detailpesanan()
	{
		$data['current'] = 1;
		$kode = $this->session->userdata('kode_reservasi') ;
		echo "ini kode".$kode;
		$data['reservasi'] = $this->customermodel->getreservasi($kode);
		$this->load->view('frontend/detailpesanan',$data);
	}
	
		public function pesanan()
	{
		$data['current'] = 1;
		$data['pesanan'] = $this->customermodel->get_pesanan();
		$this->load->view('frontend/pesanan',$data);
	}
	
		public function menu()
	{
		
		$data['jumMeja']	= $this->input->post('jumMeja');
		$data['nama'] 		= $this->input->post('nama'); 
		$data['alamat'] 	= $this->input->post('alamat');
		$data['email'] 		= $this->input->post('email');
		$data['telepon'] 	= $this->input->post('telepon');
		$data['jam_mulai']			= $this->input->post('jam_mulai');
		$data['jam_selesai']		= $this->input->post('jam_selesai');
		$data['meja'] 		= $this->input->post('meja');
		$data['meja2'] 		= $this->input->post('meja');
		$data['current'] = 1;
		if (!empty($data['meja'])){
		$data['menu'] = $this->customermodel->get_menu();
		$this->load->view('frontend/menu',$data);
		}
		else {			
		redirect('home');
		}
	}
	
	public function reservasi_saya()
	{
		$data['current'] = 1;
		$data['list'] = 0;
		$this->load->view('frontend/reservasisaya',$data);
	}
	
	public function cek_kode()
	{
		$data['current'] = 1;
		
		$cek= $this->customermodel->findBykode($this->input->post('kode'));
		
		if (!empty($cek)){
		$data['cek'] = $this->customermodel->cek_kode($this->input->post('kode'));
		$data['list'] = 1;
		}
		else {
		$data['list'] = 2;
		}
		
		$this->load->view('frontend/reservasisaya',$data);
	}
	
	function bantuan(){
		$this->load->view('frontend/bantuan');	
	}	
	
	public function page404()
	{
		$this->load->view('frontend/page404');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */