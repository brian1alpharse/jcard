<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Master extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('uname')==""){
			redirect('Login');
		}
		// parent::__construct();
		// //setting helper
		$this->load->helper(array('form', 'url'));
		// //setting model (database)
		// $this->load->model('modelnya');
		// //setting library
		// //'googleplus' library yang diambil dari folder "application/libraries"
		// $this->load->library(array('session'));
		// if($this->modelnya->isNotLogin()) redirect(site_url('Login'));
	}

	public function error(){
		$this->load->view('index.html');
	}

	public function index()
	{
		redirect(base_url());

	}

	public function jenisfoil()
	{
		$data['content'] = 'userview/jenisfoil';
		$this->load->view('_layouts/main_v',$data);
	}
	public function undangan()
	{
		$data['produk'] = $this->db->get("fifo");
		$data['content'] = 'undangan/undangan';
		$this->load->view('_layouts/main_v',$data);
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////
//data barang
	public function datasupply()
	{
		$data['gudang'] = $this->db->get("tbl_supply");
		$data['content'] = 'supply/v_supply';
		$this->load->view('_layouts/main_v',$data);
	}
///////////////////////////////////////////////////////////////////////
//profill//
	public function profile()
	{
		//$data['user'] = $this->db->get("tbl_user");
		$data['content'] = 'profile';
		$this->load->view('_layouts/main_v',$data);
	}
////////////////////////////////////////////////////////////////////////
	public function inputsupply(){
		echo show_my_modal("supply/modal_add","md_add");
	}

	public function simpandatasupply(){
		$config['upload_path'] = './asset/img/undg/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']             = 2000;
	    $config['max_width']            = 4000;
	    $config['max_height']           = 6000;
	  
	    $this->load->library('upload', $config); // Load konfigurasi uploadnya
	    if (!$this->upload->do_upload('Foto')) {
			$data['error'] = $this->upload->display_errors();
		} else {
			$uploaded_data = $this->upload->data();

			$Kode = $this->input->post("kode_brg");
			$cek = $this->db->query("select * from tbl_supply where kode_brg = '$Kode'");
			$hasil = $cek->num_rows();
			if($hasil > 0)
			{
				$this->session->set_flashdata("msg","<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a>	<strong> Simpan Data Barang Gagal (Kode Barang Sudah Ada !!)</strong></div>");
				header('location:'.base_url().'Master/datasupply');
			}
			else
			{
				$data = array(
				'kode_brg'=> $this->input->post('Kode'),
				'nama_brg'=>$this->input->post('Nama'),
				'loka_brg'=>$this->input->post('Loka'),
				'tanggal_msk'=>$this->input->post('masuk'),
				'tanggal_keluar'=>$this->input->post('keluar'),
				'stok_brg'=>$this->input->post('Stok'),
				'foto_brg'=>$uploaded_data['file_name'],
				);

				$this->db->insert("tbl_supply",$data);

				$this->session->set_flashdata("msg","<div class='alert alert-success fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a>	<strong> Simpan Data Barang Berhasil</strong></div>");
				
				header('location:'.base_url().'Master/datasupply');
			}
			
		}
	}

	public function hapussupply(){
		if(isset($_POST) && !empty($_POST))
		{
			$where['kode_brg'] = $this->input->post('id');
			$this->db->delete("tbl_supply",$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
			<h4><i class='icon fa fa-check'></i> Success!</h4>
			Berhasil Menghapus Data Barang
			</div>");
			header('location:'.base_url().'Master/datasupply');
		}else
		$this->error();
	}
	public function ubahsupply(){
		$where['kode_brg'] = $this->input->post('id');
		$data['supply']=$this->db->get_where("tbl_supply",$where);
		echo show_my_modal("supply/modal_update","md_updt",$data);
	}

	public function updatesupply(){
		if(isset($_POST) && !empty($_POST)){
			$where['kode_brg'] = $this->input->post('Kode');
			$data = array(
				'nama_brg' => $this->input->post('Nama'),
				'loka_brg' => $this->input->post('Loka'),
				'stok_brg' => $this->input->post('Stok'),

			);
			$this->db->update("tbl_supply",$data,$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Merubah Data Barang
				</div>");
			header('location:'.base_url().'Master/datasupply');
		}else $this->error();
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//barang masuk//
	public function brg_msk()
	{
		$data['masuk'] = $this->db->get("tbl_supply");
		$data['content'] = 'barang/v_bmasuk';
		$this->load->view('_layouts/main_v',$data);
	}

	public function hapusmasuk(){
		if(isset($_POST) && !empty($_POST))
		{
			$where['kode_brg'] = $this->input->post('id');
			$this->db->delete("tbl_supply",$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Menghapus Data Barang masuk
				</div>");
			header('location:'.base_url().'Master/brg_msk');

		}else
		$this->error();
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//data pelanggan//
	public function id_plg()
	{
		$data['pelanggan'] = $this->db->get("data_pelanggan");
		$data['content'] = 'pelanggan/v_pelanggan';
		$this->load->view('_layouts/main_v',$data);
	}
	public function hapuspelanggan(){
		if(isset($_POST) && !empty($_POST))
		{
			$where['id_plg'] = $this->input->post('id');
			$this->db->delete("data_pelanggan",$where);
			$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible>
				<h4><i class='icon fa fa-check'></i> Success!</h4>
				Berhasil Menghapus Data pelanggan
				</div>");
			header('location:'.base_url().'Master/id_plg');

		}else
		$this->error();
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////
	//barang keluar//
	public function brg_keluar()
	{
		$data['keluar'] = $this->db->get("tbl_supply");
		$data['content'] = 'barang keluar/v_bkeluar';
		$this->load->view('_layouts/main_v',$data);
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////
	//barang expired//
	public function brg_exspired()
	{
		$data['expired'] = $this->db->get("tbl_supply");
		$data['content'] = 'expired/v_bexspired';
		$this->load->view('_layouts/main_v',$data);
	}
////////////////////////////////////////////////////////////////////////////////////////////////////
	//barang transaksi//
	public function brg_transaksi()
	{
		$data['transaksi'] = $this->db->get("tbl_transaksi");
		$data['content'] = 'transaksi/v_transaksi';
		$this->load->view('_layouts/main_v',$data);
	}
////////////////////////////////////////////////////////////////////////////////////////////////////
	public function tentang()
	{
		$data['content'] = 'tentang/tentang';
		$this->load->view('_layouts/main_v',$data);
	}

	public function jeniskertas()
	{
		$data['content'] = 'userview/jeniskertas';
		$this->load->view('_layouts/main_v',$data);
	}

	public function detailkertas()
	{
		$data['content'] = 'userview/detailkertas';
		$this->load->view('_layouts/main_v',$data);
	}

	
}
