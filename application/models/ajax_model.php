<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
Class ajax_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function get_jumlah_user($halaman,$num=false)
	{
		$batas = 5;
		$this->db->from('tbl_mahasiswa');
		if($num)
		{
			$r = $this->db->get();
			$n = $r->num_rows();
			return ceil($n/$batas);
		}
		$this->db->limit($batas,$halaman*$batas);
		$this->db->order_by('nim','desc');
		return $this->db->get();
	}
	function simpan($data)
	{
		if($data['nim'] != '')
		{
			$this->db->where('nim',$data['nim']);
			$this->db->update('tbl_mahasiswa',$data);
		}
		else
		{
			$this->db->insert('tbl_mahasiswa',$data);
		}
	}
}
