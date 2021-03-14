<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class AdminMrk extends CI_Controller 
{
	public function index()
	{
		$data['title']="Tabel MRK";
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/mrk/index',$data);
		$this->load->view('admin/footer_admin',$data);
	}

	public function tambah_mrk()
	{
		$data['title']="Tabel MRK";
		$this->load->view('admin/header_admin',$data);
		$this->load->view('admin/mrk/tambah_mrk',$data);
		$this->load->view('admin/footer_admin',$data);
	}
}

?>