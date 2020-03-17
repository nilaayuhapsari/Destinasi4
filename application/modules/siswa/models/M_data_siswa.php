<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_siswa extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_siswa')->result();
	}

	function tambah()
	{
		$nama_siswa 		= $this->input->post('nama_siswa');
		$jurusan			= $this->input->post('jurusan');
		$alamat				= $this->input->post('alamat');
		$hobi				= $this->input->post('hobi');
		$no_telp			= $this->input->post('no_telp');

		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/gambar/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
		{
        	if ($this->upload->do_upload('gambar'))
     		{

		$gambar = $this->upload->data();
		$data = array(
		'nama_siswa'	=> $nama_siswa,
		'jurusan'		=> $jurusan,
		'alamat'		=> $alamat,
		'hobi'			=> $hobi,
		'no_telp'		=> $no_telp,
		'gambar' 		=> $gambar['file_name']
					
					
			);
			$this->db->insert('data_siswa', $data);
		}	 
	}
	else{
			$data = array(
				'nama_siswa'		=> $nama_siswa,
				'jurusan'			=> $jurusan,
				'alamat'			=> $alamat,
				'hobi'				=> $hobi,
				'no_telp'			=> $no_telp,
				'gambar' 			=> 'logo.gif'
			);
			$this->db->insert('sekolah', $data);
		}

	}
	function edit()
	{
		$id_siswa 	= $this->input->post('id_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$jurusan    = $this->input->post('jurusan');
		$alamat    	= $this->input->post('alamat');
		$hobi    	= $this->input->post('hobi');
		$no_telp    = $this->input->post('no_telp');




		$data = array(
			'nama_siswa'  =>$nama_siswa,
			'jurusan' 	 =>$jurusan,
			'alamat' 	 =>$alamat,
			'hobi'  	=>$hobi,
			'no_telp'  	=>$no_telp



		);

		$this->db->where('id_siswa',$id_siswa)->update('data_siswa',$data);
	}
	function hapus($id_siswa)
	{
		$this->db->where('id_siswa', $id_siswa)->delete('data_siswa');
	}

}
	?>
			
			