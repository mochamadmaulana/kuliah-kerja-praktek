<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index()
	{

		$this->form_validation->set_rules('nama_pengguna', 'Nama Lengkap', 'required|trim', [
			'required' => '%s harus diisi!'
		]);
		$this->form_validation->set_rules('nip_pengguna', 'No.induk Pegawai', 'required|trim|numeric', [
			'required' => '%s harus diisi!',
			'numeric' => '%s harus angka/nomor!'
		]);
		$this->form_validation->set_rules('username_pengguna', 'Username', 'required|trim|is_unique[pengguna.username_pengguna]', [
			'required' => '%s harus diisi!',
			'is_unique' => '%s sudah terdaftar, silahkan masukkan username lain!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password_konfirm]', [
			'required' => '%s harus diisi!',
			'matches' => '%s tidak sama'
		]); 
		$this->form_validation->set_rules('password_konfirm', 'Konfirmasi Password', 'required|trim|matches[password]', [
			'required' => '%s harus diisi!',
			'matches' => '%s tidak sama!'
		]);
		$this->form_validation->set_rules('email_pengguna', 'Email', 'required|trim|valid_email', [
			'required' => '%s harus diisi!',
			'valid_email' => '%s tidak valid!'
		]);
		$this->form_validation->set_rules('telepon_pengguna', 'No.Telepon', 'required|trim|numeric', [
			'required' => '%s harus diisi!',
			'numeric' => '%s harus angka/nomor!'
		]);
		// $this->form_validation->set_rules('jabatan_pengguna', 'Jabatan', 'required|trim', [
		// 	'required' => '%s harus diisi!',
		// ]);
		

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = "Registrasi";
			$this->load->view('pages/registrasiview', $data);
		}else {
			$data = [
				'nip_pengguna' => $this->input->post('nip_pengguna', TRUE),
				'nama_pengguna' => $this->input->post('nama_pengguna', TRUE),
				'username_pengguna' => $this->input->post('username_pengguna', TRUE),
				'password_pengguna' => $this->input->post('password', TRUE),
				'email_pengguna' => $this->input->post('email_pengguna', TRUE),
				'telepon_pengguna' => $this->input->post('telepon_pengguna', TRUE),
				'jabatan_pengguna' => $this->input->post('jabatan_pengguna', TRUE),
				'level' => 'admin'
			];
			$this->db->insert('pengguna', $data);
			
			redirect('login');
		}
	}
}

