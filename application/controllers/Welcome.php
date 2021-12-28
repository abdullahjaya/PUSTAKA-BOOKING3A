<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		echo "<h1>Perkenalan</h1>
		<h3>Nama : Abdullah Jaya Sampurna <br>
		Tanggal Lahir : 21 September 2002<br>
		Tempat Tinggal : Bekasi<br>
		Motivasi Kuliah : Untuk menimba ilmu dengan Pendidikan yang lebih tinggi dan menambah koneksi antar 
		teman</h3>";
	}
}
