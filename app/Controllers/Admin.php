<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		return view('admin/adminDashboard');
	}
	public function riwayat()
	{
		return view('admin/adminRiwayat');
	}
	public function detailRiwayat()
	{
		return view('admin/adminDetailRiwayat');
	}
	public function kelola()
	{
		return view('admin/adminKelola');
	}

}
