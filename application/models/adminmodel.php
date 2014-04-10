<?php
class Adminmodel extends CI_Model {

    function __construct() {
        parent::__construct();
		$this->load->database();
    }
	
	/*auth*/
	function authmember() {
		 $query = $this->db->query("select * from operator where username_operator='".$this->input->post('uname')."' AND password_operator ='".md5($this->input->post('password'))."' LIMIT 1");
		 if ($query->num_rows() == 1) 
			{
            return TRUE; 
			}
        else
            {
            return FALSE; 
            }
    }
	
		function get_member_by_uname($uname) {
        $this->db->where('username_operator',$uname);
		return $this->db->get('operator')->row_array();
    }
	
	function findByEmail($email) {
        $this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get('member', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
    
	
	function get_member_by_id($id) {
        $this->db->where('id_member',$id);
		return $this->db->get('member')->row_array();
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
			$phone		= $this->input->post('phone');
			
			$data_member = array(
				'id_member'				=> '',
				'nama_member'		=> $nama,
				'password'				=> $password,
				'no_telp1'				=> $phone,
				'email'					=> $email,
				'status_bio'				=> '0',
				'status_test'			=> '0',
				'gender'					=> 'laki-laki',
				'status_marital'		=> 'lajang',
				'aktivasi'					=> $aktivasi,
				'status'					=> '0'
			);
			$this->db->insert('member',$data_member);
		}
}