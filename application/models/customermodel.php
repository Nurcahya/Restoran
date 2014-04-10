<?php
class Customermodel extends CI_Model {

    function __construct() {
        parent::__construct();
		$this->load->database();
    }
	
	function jum_meja() {
        $query = $this->db->get('meja');
        return $query;
    }
	
		function get_pesanan() {
		$date = date("Y-m-d H:i:s");
        $query = $this->db->query("select * from pesanan inner join customer USING (id_customer) inner join meja USING (id_meja) where jam_mulai > '".$date."' group by kode_reservasi");
		//$query = $this->db->query("select * from pesanan");
		return $query;
    }
	
	function get_menu() {
        $query = $this->db->query("select * from makanan");
		//$query = $this->db->query("select * from pesanan");
		return $query;
    }
	
	function findByEmail($email) {
        $this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get('member', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
    
	function findBykode($kode) {
        $this->db->select('*');
        $this->db->where('kode_reservasi', $kode);
        $query = $this->db->get('pesanan', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
	
	function get_member_by_id($id) {
        $this->db->where('id_member',$id);
		return $this->db->get('member')->row_array();
    }
	
	function cek_kode($kode) {		
		$query = $this->db->query("select * from pesanan inner join customer USING (id_customer) inner join meja USING (id_meja) where kode_reservasi = '".$kode."' ");
		//$query = $this->db->query("select * from pesanan");
		return $query;
    }
	
	

    function kode_reservasi() { 

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

	} 
	
	function customer($kode)
		{
			$nama		= $this->input->post('nama'); 
			$alamat		= $this->input->post('alamat');
			$email		= $this->input->post('email');
			$telepon		= $this->input->post('telepon');
			$kode_unik = $kode;
			
			$data_customer = array(
				'id_customer'				=> '',
				'nama_customer'			=> $nama,
				'alamat_customer'		=> $alamat,
				'telepon_customer'		=> $telepon,
				'email_customer'			=> $email,
				'kode_unik'					=> $kode_unik
			);
			$this->db->insert('customer',$data_customer);
		}
		
	function get_customer($kode) {
        $this->db->where('kode_unik',$kode);
		return $this->db->get('customer')->row_array();
    }	
	
	function pesan($id, $kode)
		{

			for($i = 0; $i <= $this->input->post('jumMeja'); $i++)
				{
					$meja = $_POST['meja'];
					if (!empty($meja[$i]))
					{
						$jam_mulai			= $this->input->post('jam_mulai');
						$jam_selesai		= $this->input->post('jam_selesai');
						$kode_reservasi	= $kode;
						
						$data_pesanan = array(
							'id_pesanan'				=> '',
							'id_customer'				=> $id,
							'id_meja'						=> $meja[$i],
							'jam_mulai'					=> $jam_mulai,
							'jam_selesai'				=> $jam_selesai,
							'kode_reservasi'				=> $kode_reservasi
						);
						$this->db->insert('pesanan',$data_pesanan);
					}
				}	
		}
		
	function pesanmakan($id, $kode)
		{

			for($i = 0; $i <= $this->input->post('jumMenu'); $i++)
				{
					$makanan = $_POST['makanan'];
					$jumlah = $_POST['jumlah'];
					if (!empty($makanan[$i]))
					{
						$kode_reservasi	= $kode;
						$data_pesanan = array(
							'id_pesanan_makanan'		=> '',
							'id_makanan'					=> $makanan[$i],
							'kode_reservasi'				=> $kode_reservasi,
							'jumlah'							=> $jumlah[$i]
						);
						$this->db->insert('pesananmakanan',$data_pesanan);
					}
				}	
		}	

	function getreservasi($kode){	
		$query = $this->db->query("select * from pesanan inner join customer USING (id_customer) inner join meja USING (id_meja) where kode_reservasi = '".$kode."' LIMIT 1");
		//$query = $this->db->query("select * from pesanan");
		return $query;
	}
}