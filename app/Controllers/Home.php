<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/landing');
	}

	public function login()
	{
		return view('account/login');
	}
}
