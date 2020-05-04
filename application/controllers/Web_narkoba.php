<?php

class Web_narkoba extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Seputar Narkoba | HOMEPAGE';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('homepage_3');
		$this->load->view('tampilan/footer');
	}
	public function ain()
	{
		$data['title'] = 'Seputar Narkoba | Apa Itu Narkoba';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('ain');
		$this->load->view('tampilan/footer');
	}

	public function jenis()
	{
		$data['title'] = 'Seputar Narkoba | Jenis-Jenis Narkoba';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('jenis');
		$this->load->view('tampilan/footer');
	}

		public function ganja()
	{
		$data['title'] = 'Seputar Narkoba | Ganja';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('ganja');
		$this->load->view('tampilan/footer');
	}
			public function sabu()
	{
		$data['title'] = 'Seputar Narkoba | Sabu';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('sabu');
		$this->load->view('tampilan/footer');
	}

	public function coming_soon()
	{
		$data['title'] = 'Seputar Narkoba | Comingsoon';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('coming_soon');
		$this->load->view('tampilan/footer');
	}

			public function ppn()
	{
		$data['title'] = 'Seputar Narkoba | Pencegahan Penyalahagunaan Narkoba';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('ppn');
		$this->load->view('tampilan/footer');
	}
			public function bn()
	{
		$data['title'] = 'Seputar Narkoba | Bahaya Narkoba';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('bn');
		$this->load->view('tampilan/footer');
	}
				public function cerita()
	{
		$data['title'] = 'Seputar Narkoba | Cerita Inspiratif';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('cerita');
		$this->load->view('tampilan/footer');
	}
						public function video()
	{
		$data['title'] = 'Seputar Narkoba | Video Inspiratif';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('video');
		$this->load->view('tampilan/footer');
	}
					public function tweb()
	{
		$data['title'] = 'Seputar Narkoba | Tentang Web';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('tentangweb');
		$this->load->view('tampilan/footer');
	}
					public function contact()
	{
		$data['title'] = 'Seputar Narkoba | Tentang Kami';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('contact');
		$this->load->view('tampilan/footer');
	}
	public function login()
	{
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run()==false){
		$data['title'] = 'Seputar Narkoba | LOGIN';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('login');
		$this->load->view('tampilan/footer');
		}else{
			$this->_login();
		}
	}

	private function _login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('pengguna', ['username' => $username])->row_array();
		
		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'username' => $user['username']
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('message','<h3>Berhasil masuk!</h3>');
				redirect('Web_narkoba/berhasil');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					  Wrong Password!
					</div>');
			redirect('Web_narkoba/login');
			}
		}else{
			$this->session->set_flashdata('message','
				<div class="alert alert-danger" role="alert">
					  Username is not registered!
					</div>');
			redirect('Web_narkoba/login');
		}

	}

	public function berhasil(){
		$data['title'] = 'Seputar Narkoba | SUCCESS';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('berhasil');
		$this->load->view('tampilan/footer');
	}


	public function registrasi(){

		$this->form_validation->set_rules('username','Username','required|trim|is_unique[pengguna.username]',[
				'is_unique' => 'This Username has already registered!'
		]);
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[pengguna.email]',[
				'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[password2]',[
				'matches' => 'Password dont match!',
				'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2','Password2','required|trim|matches[password]');

		if($this->form_validation->run()==false){
			$data['title'] = 'Seputar Narkoba | Register';
		$this->load->view('tampilan/sidebar', $data);
		$this->load->view('tampilan/header');
		$this->load->view('registrasi');
		$this->load->view('tampilan/footer');
		}else{
			$data=[
				'username' => htmlspecialchars($this->input->post('username',true)),
				'email' => htmlspecialchars($this->input->post('email',true)),
				'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT)
			];
			$this->m_pengguna->tambah_register($data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				  Registrasi Berhasil! Silahkan Login
				</div>');
			redirect('web_narkoba/login');
		}
	}

	public function logout(){
		$this->session->set_flashdata('message','<h3>Registrasi Berhasil! Silahkan Login</h3>');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message','<h3>Telah Logout</h3>');
		redirect('Web_narkoba/login');
	}


}
