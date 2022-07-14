<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
	public function __construct()

	{
		parent::__construct();

		$status = $this->session->userdata('role');
    	if(!isset($status)){
      redirect(base_url("Login"));
    }
		$this->load->model('Faskes_model');
		$this->load->model('Kecamatan_model');
		$this->load->model('Jenis_faskes_model');
		$this->load->model('Komentar_model');
		$this->load->model('Users_model');
		$this->load->model('Rating_model');
	}


	public function faskes()
	{
		$data['title'] = 'Data Faskes';

		$data['dataFaskes'] = $this->Faskes_model->getAllDataFaskes();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/faskes', $data);
		$this->load->view('_partials/footer');
	}

	// CREATE 
	public function faskes_create()
	{
		$data['title'] = 'Form Faskes';
		$data['kecamatan'] = $this->Faskes_model->getKecamatan();
		$data['jenis_faskes'] = $this->Faskes_model->getJenisFaskes();
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/faskes_create');
		$this->load->view('_partials/footer');
	}

	// CREATE SAVE
	public function faskes_save()
	{
		// $id = uniqid();
		$nama_faskes = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kecamatan = $this->input->post('kecamatan_id');
		$latlong = $this->input->post('latlong');
		$deskripsi = $this->input->post('deskripsi');
		$rating = $this->input->post('skor_rating');
		$foto = $this->input->post('foto');

		$website = $this->input->post('website');
		$jumlah_dokter = $this->input->post('jumlah_dokter');
		$jumlah_pegagwai = $this->input->post('jumlah_pegawai');
		$jenis_faskes = $this->input->post('jenis_faskes_id');

		$config['upload_path']		= FCPATH . './uploads/';
		$config['allowed_types']	= '*';
		$config['file_name']			= $nama_faskes;

		$config['max_size']        = 10024;
		$config['max_width']       = 6000;
		$config['max_height']      = 6000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')) {
			$data['error'] = $this->upload->display_errors();
			echo $data['error'];
		} else {
			$fix_upload = $this->upload->data();

			$new_data = array(
				'foto' => $fix_upload['file_name'],
			);

			$data_foto = $new_data['foto'];

			$data = array(
				'nama'				=> $nama_faskes,
				'alamat'				=> $alamat,
				'kecamatan_id'		=> $kecamatan,
				'latlong'			=> $latlong,
				'deskripsi'			=> $deskripsi,
				'skor_rating'		=> $rating,
				'foto'				=> $data_foto,
				'website'			=> $website,
				'jumlah_dokter'	=> $jumlah_dokter,
				'jumlah_pegawai'	=> $jumlah_pegagwai,
				'jenis_id'			=> $jenis_faskes
			);
		}

		$this->Faskes_model->input_data($data, 'faskes');
		$this->session->set_flashdata('input-data', ' ');
		redirect(base_url() . 'master/faskes');
	}


	// READ
	public function faskes_detail()
	{
		$data['title'] = 'Faskes Detail';

		$id = $this->input->get('id');
		$data['faskes'] = $this->Faskes_model->findFaskesById($id);

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/faskes_detail', $data);
		$this->load->view('_partials/footer');
	}

	// UPDATE
	public function faskes_edit()
	{
		$id = $this->input->get('id');
		$data['faskes'] = $this->Faskes_model->findFaskesById($id);
		$data['kecamatan'] = $this->Faskes_model->getKecamatan();
		$data['jenis_faskes'] = $this->Faskes_model->getJenisFaskes();

		$where = array('id' => $id);
		$data['faskes_edit'] = $this->Faskes_model->edit_data($where, 'faskes')->result();
		$data['title'] = 'Faskes Edit';

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/faskes_edit', $data);
		$this->load->view('_partials/footer');
	}

	public function faskes_update()
	{
		$id = $this->input->post('id');
		$nama_faskes = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kecamatan = $this->input->post('kecamatan_id');
		$latlong = $this->input->post('latlong');
		$deskripsi = $this->input->post('deskripsi');
		$rating = $this->input->post('skor_rating');
		$foto = $this->input->post('foto');
		// $foto2 = $this->input->post('foto2');
		// $foto3 = $this->input->post('foto3');
		$website = $this->input->post('website');
		$jumlah_dokter = $this->input->post('jumlah_dokter');
		$jumlah_pegagwai = $this->input->post('jumlah_pegawai');
		$jenis_faskes = $this->input->post('jenis_faskes_id');

		$config['upload_path']		= './uploads/';
		$config['allowed_types']	= '*';
		$config['file_name']			= $foto;
		// $config['file_name']			= $foto2;
		// $config['file_name']			= $foto3;
		$config['max_size']        = 10024;
		$config['max_width']       = 6000;
		$config['max_height']      = 6000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto_faskes')) {
			$data['error'] = $this->upload->display_errors();
			echo $data['error'];
		} else {
			$fix_upload = $this->upload->data();
			$where = [
				'foto' 	=> $foto,
				// 'foto2' 	=> $foto2,
				// 'foto3'	=> $foto3,
			];
			$new_data = array(
				'foto' => $fix_upload['file_name'],
				// 'foto2' => $fix_upload['file_name'],
				// 'foto3' => $fix_upload['file_name'],
			);
			$data_foto = $new_data['foto'];
			// $data_foto2 = $new_data['foto2'];
			// $data_foto3 = $new_data['foto3'];

			$data = array(
				'nama'				=> $nama_faskes,
				'alamat'				=> $alamat,
				'kecamatan_id'		=> $kecamatan,
				'latlong'			=> $latlong,
				'deskripsi'			=> $deskripsi,
				'skor_rating'		=> $rating,
				'foto'				=> $data_foto,
				// 'foto2'				=> $data_foto2,
				// 'foto3'				=> $data_foto3,
				'website'			=> $website,
				'jumlah_dokter'	=> $jumlah_dokter,
				'jumlah_pegawai'	=> $jumlah_pegagwai,
				'jenis_id'			=> $jenis_faskes
			);
		}

		$where = array('id' => $id);

		$this->Faskes_model->update_data($where, $data, 'faskes');
		$this->session->set_flashdata('update-data', ' ');
		redirect(base_url() . 'master/faskes');
	}

	// DELETE
	public function faskes_delete()
	{
		$id = $this->input->get('id');
		$this->Faskes_model->deleteFaskes($id);
		$this->session->set_flashdata('delete-data', ' ');
		redirect(base_url() . 'master/faskes', 'refresh');
	}

	public function kecamatan()
	{
		$data['title'] = 'Data Kecamatan';

		$data['dataKecamatan'] = $this->Kecamatan_model->getAllDataKecamatan();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/kecamatan', $data);
		$this->load->view('_partials/footer');
	}

	// CREATE
	public function kecamatan_create()
	{
		$data['title'] = 'Form Kecamatan';

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/kecamatan_create');
		$this->load->view('_partials/footer');
	}

	// CREATE SAVE
	public function kecamatan_save()
	{
		$nama = $this->input->post('nama_kecamatan');
		$data = array(
			'nama_kecamatan' => $nama
		);

		$this->Kecamatan_model->input_data($data, 'kecamatan');
		$this->session->set_flashdata('input-data', ' ');
		redirect(base_url() . 'master/kecamatan');
	}

	public function kecamatan_delete()
	{
		$id = $this->input->get('id');
		$this->Kecamatan_model->deleteKecamatan($id);
		$this->session->set_flashdata('delete-data', ' ');
		redirect(base_url() . 'master/kecamatan', 'refresh');
	}

	public function delete_user()
	{
		$id = $this->input->get('id');
		$this->Users_model->deleteUser($id);
		$this->session->set_flashdata('delete-data', ' ');
		redirect(base_url() . 'Master/users', 'refresh');
	}

	public function jenis_faskes()
	{
		$data['title'] = 'Data Jenis Faskes';
		$data['dataJenisFaskes'] = $this->Jenis_faskes_model->getAllDataJenisFaskes();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/jenis_faskes', $data);
		$this->load->view('_partials/footer');
	}

	// CREATE
	public function jenis_faskes_create()
	{
		$data['title'] = 'Tambah Jenis Faskes';

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/jenis_faskes_create', $data);
		$this->load->view('_partials/footer');
	}

	// CREATE SAVE
	public function jenis_faskes_save()
	{
		$nama_faskes = $this->input->post('nama_faskes');
		$data = array(
			'nama_faskes' => $nama_faskes
		);

		$this->Jenis_faskes_model->input_data($data, 'jenis_faskes');
		redirect(base_url() . 'master/jenis_faskes?id=' . $nama_faskes, 'refresh');
	}

	// DELETE
	public function jenis_faskes_delete($id)
	{
		$id = array('id_faskes' => $id);
		$this->Jenis_faskes_model->deleteJenisFaskes($id, 'jenis_faskes');
		$this->session->set_flashdata('delete-data', ' ');
		redirect(base_url() . 'master/jenis_faskes', 'refresh');
	}

	public function users()
	{
		$data['title'] = 'Data Users';


		$data['dataUsers'] = $this->Users_model->getAllDataUsers();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/users', $data);
		$this->load->view('_partials/footer');
	}

	// READ
	public function users_detail()
	{
		$data['title'] = 'Users Detail';

		$id = $this->input->get('id');
		$data['users'] = $this->Users_model->findUsersById($id);

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/users_detail', $data);
		$this->load->view('_partials/footer');
	}

	public function nilai_rating()
	{
		$data['title'] = 'Ketentuan Rating';

		$data['dataRating'] = $this->Rating_model->getAllDataRating();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/nilai_rating', $data);
		$this->load->view('_partials/footer');
	}

	public function komentar()
	{
		$data['title'] = 'Data Komentar';

		$data['dataKomentar'] = $this->Komentar_model->getAllDataKomentarAdmin();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/komentar', $data);
		$this->load->view('_partials/footer');
	}

	// DELETE
	public function komentar_delete()
	{
		$id = $this->input->get('id_komentar');
		$this->Komentar_model->deleteKomentar($id);
		$this->session->set_flashdata('delete-data', ' ');
		redirect(base_url() . 'master/komentar', 'refresh');
	}

	// CREATE
	public function komentar_create()
	{
		$data['title'] = 'Form Komentar';

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/komentar_create');
		$this->load->view('_partials/footer');
	}

	public function upload()
	{
		$config['upload_path']      = './uploads/';
		$config['allowed_types']    = '*';
		$config['max_size']         = 10024;
		$config['max_width']        = 6000;
		$config['max_height']       = 6000;

		$nama = $this->input->post('nama');
		$array = explode('.', $_FILES['fotofaskes']['name']);
		$extension = end($array);
		$new_name = $nama . '.' . $extension;
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('fotofaskes')) {
			$error = array('error' => $this->upload->display_errors());
			echo $error;
		} else {
			$array_data[] = $new_name; // ? ke 1
			$array_data[] = $nama; // ? ke 2
			
			$this->Faskes_model->upload_foto($array_data);
		}
		redirect(base_url() . 'Master/faskes_detail?id=' . $nama);
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */