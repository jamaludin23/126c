<?php
class Belajar extends CI_Controller{
	function __construct(){
parent :: __construct();
	}
	public function index(){
		echo "ini method index pada controller belajar | cara membuat controller pada codeignier";
	}
	public function halo(){
		$data['nama_web'] = 'Codeignier.com';
		$this->load->view('view_belajar', $data);
	}
	function pemograman(){
		echo "Menghilangkan index.php pada codeignier | RentalBuku";
	}
}