<?php

class Data_siswa extends CI_Controller {
	public function index()
	{
		$data['data_siswa'] = $this->m_siswa->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('siswa',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$nis 			= $this->input->post('nis');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$jurusan 		= $this->input->post('jurusan');
		$sekolah 		= $this->input->post('sekolah');
		$alamat 		= $this->input->post('alamat');

		$data = array(
			'nis' 			=> $nis,
			'nama_siswa'	=> $nama_siswa,
			'jenis_kelamin' => $jenis_kelamin,
			'jurusan' 		=> $jurusan,
			'sekolah' 		=> $sekolah,
			'alamat' 		=> $alamat,
		);

		$this->m_siswa->input_data($data);
		redirect('data_siswa/index');
	}

	public function hapus($id){
		$where = array('id' => $id);
		$this->m_siswa->hapus_data($where);
		redirect('data_siswa/index');
	}

	public function edit($id){
		$where = array('id' => $id);
		$data['data_siswa'] = $this->m_siswa->edit_data($where)->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit',$data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$id 			= $this->input->post('id');
		$nis 			= $this->input->post('nis');
		$nama_siswa 	= $this->input->post('nama_siswa');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$jurusan 		= $this->input->post('jurusan');
		$sekolah 		= $this->input->post('sekolah');
		$alamat 		= $this->input->post('alamat');

		$where = array('id' => $id);
		$data = array(
			'nis' 			=> $nis,
			'nama_siswa'	=> $nama_siswa,
			'jenis_kelamin' => $jenis_kelamin,
			'jurusan' 		=> $jurusan,
			'sekolah' 		=> $sekolah,
			'alamat' 		=> $alamat,
		);
		$this->m_siswa->update_data($where,$data);
		redirect('data_siswa/index');
	}


}
