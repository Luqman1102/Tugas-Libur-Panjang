<?php 
	class M_siswa extends CI_Controller{
		public function tampil_data(){
			return $this->db->get('data_siswa');
		}

		public function input_data($data){
			$this->db->insert('data_siswa',$data);
		}

		public function hapus_data($where){
			$this->db->delete('data_siswa',$where);
		}

		public function edit_data($where){
			return $this->db->get_where('data_siswa',$where);
		}

		public function update_data($where,$data){
			$this->db->where($where);
			$this->db->update('data_siswa',$data);
		}

	}
 ?>