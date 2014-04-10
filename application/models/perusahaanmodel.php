<?php
class Perusahaanmodel extends CI_Model {

    function __construct() {
        parent::__construct();
		$this->load->database();
    }
	
	/*auth*/
	function authperusahaan() {
		 $query = $this->db->query("select * from perusahaan where email='".$this->input->post('email')."' AND password ='".md5($this->input->post('password'))."' LIMIT 1");
		 if ($query->num_rows() == 1) 
			{
            return TRUE; 
			}
        else
            {
            return FALSE; 
            }
    }
	
		function get_member_by_email($email) {
        $this->db->select('*');
        $this->db->where('email',$email);
		return $this->db->get('perusahaan');
    }
	
	function get_perusahaan_by_email($email) {
        $this->db->select('*');
        $this->db->where('email',$email);
		return $this->db->get('perusahaan')->row_array();
    }

	
	function findByEmail($email) {
        $this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get('perusahaan', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
    
	
	function get_lamaran_by_id($id) {
         $query = $this->db->query("select * from lowonganmember inner join member using (id_member) inner join lowongan using(id_lowongan) where id_perusahaan = '".$id."'");
        return $query;
    }
	
	function get_lowongan_by_id($id) {
        $this->db->select('*');
        $this->db->where('id_perusahaan',$id);
		return $this->db->get('lowongan');
    }

    function edit_profil($id_member){
		$data=array(
			'nama_member'=>$this->input->post('nama_member'),
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'nis_member'=>$this->input->post('nis_member')
			);

		$this->db->where('id_member', $this->session->userdata('id_member'));
		$query = $this->db->update('member', $data);
		redirect('frontend/home/home');
		
	}
	
	
	
	function update_profil($id){
		$data = array(
				'nama_member' => $this->input->post('nama'),
				'nis_member' => $this->input->post('nis'),
				'kelas_member' => $this->input->post('kelas'),
				'sekolah_member' => $this->input->post('sekolah'),
				'tentang_saya' => $this->input->post('about')
				);
		$this->db->where('id_member', $id);
		$this->db->update('member', $data);
		
	}
	
	function update_ava($ida, $ava) {
		$data = array(
				'avatar' => $ava
				);
		$this->db->where('id_member', $ida);
		$this->db->update('member', $data);
	}
	
	function tambah_user($aktivasi)
		{
			$nama		= $this->input->post('nama'); 
			$password	= md5($this->input->post('password'));
			$email		= $this->input->post('email');
			$alamat		= $this->input->post('alamat');
			$jenis		= $this->input->post('jenis');
			$phone		= $this->input->post('phone');
			
			$data_perusahaan = array(
				'id_perusahaan'		=> '',
				'nama_perusahaan'	=> $nama,
				'password'				=> $password,				
				'alamat_perusahaan'	=> $alamat,
				'no_telp'					=> $phone,
				'jenis'						=> $jenis,
				'email'					=> $email,
				'aktivasi'					=> $aktivasi,
				'status'					=> '0'
			);
			$this->db->insert('perusahaan',$data_perusahaan);
		}
		
		function tambah_lowongan()
		{
			$nama_pekerjaan		= $this->input->post('nama'); 
			$deskripsi_pekerjaan	= $this->input->post('deskripsi');
			$perkiraan_gaji		= $this->input->post('perkiraan_gaji');
			$kuota					= $this->input->post('kuota');
			$deadline					= $this->input->post('deadline');
			$status_lowongan		= 'tersedia';
			
			$data_lowongan = array(
				'id_perusahaan'		=> $this->session->userdata('id_perusahaan'),
				'nama_pekerjaan'		=> $nama_pekerjaan,
				'deskripsi_pekerjaan'	=> $deskripsi_pekerjaan,				
				'perkiraan_gaji'			=> $perkiraan_gaji,
				'kuota'					=> $kuota,
				'deadline'				=> $deadline,
				'status_lowongan'	=> $status_lowongan
			);
			$this->db->insert('lowongan',$data_lowongan);
		}
		
		function edit_detail($id, $file)
		{
			$nama		= $this->input->post('nama'); 
			$logo			= $id.'_'.$file;
			$deskripsi	= $this->input->post('deskripsi');
			$alamat		= $this->input->post('alamat');
			$jenis		= $this->input->post('bidang');
			$phone		= $this->input->post('telepon');
			
			$data_perusahaan = array(
				'nama_perusahaan'	=> $nama,			
				'logo'						=> $logo,
				'deskripsi_perusahaan'	=> $deskripsi,	
				'alamat_perusahaan'	=> $alamat,
				'no_telp'					=> $phone,
				'jenis'						=> $jenis
				);
				
		$this->db->where('id_perusahaan', $id);
		$this->db->update('perusahaan', $data_perusahaan);
		}
		
		function edit_detail2($id)
		{
			$nama		= $this->input->post('nama'); 
			$deskripsi	= $this->input->post('deskripsi');
			$alamat		= $this->input->post('alamat');
			$jenis		= $this->input->post('bidang');
			$phone		= $this->input->post('telepon');
			
			$data_perusahaan = array(
				'nama_perusahaan'	=> $nama,		
				'deskripsi_perusahaan'	=> $deskripsi,	
				'alamat_perusahaan'	=> $alamat,
				'no_telp'					=> $phone,
				'jenis'						=> $jenis
				);
				
		$this->db->where('id_perusahaan', $id);
		$this->db->update('perusahaan', $data_perusahaan);
		}
		
}