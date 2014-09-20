<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ajax_model');
	}
	
	function index()
	{
		$halaman = $this->uri->segment(3,0);
		$data['user'] = $this->ajax_model->get_jumlah_user($halaman);
		$num = $this->ajax_model->get_jumlah_user('',true);
		//konfigurasi paging ajax
		if($halaman==0)
		{
			$data['no_prev'] = true;
		}
		if($halaman==$num-1 || $num==0)
		{
			$data['no_next'] = true;
		}
		$data['next'] = "<a href='javascript:void(0)' onclick='load_no_loading(\"ajax/index/".($halaman+1)."\",\"#content\")' >Next >></a>";
		$data['prev'] = "<a href='javascript:void(0)' onclick='load_no_loading(\"ajax/index/".($halaman-1)."\",\"#content\")' ><< Previous</a>";
		$this->load->view('home',$data);
	}
	function simpan()
	{
		$data['nim']=$this->input->post('nim');
		$data['nama_mhs']=$this->input->post('nama_mhs');
		$data['jurusan']=$this->input->post('jurusan');
		$data['angkatan']=$this->input->post('angkatan');
		$this->ajax_model->simpan($data);
		$this->index();
	}
	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->delete('tbl_mahasiswa', array('nim' => $id));
 	}
}

