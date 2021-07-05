<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
	protected $usersModel;
	public function __construct()
	{
		$this->usersModel = new UsersModel();
	}

	public function index()
	{
		return view('home/landing');
	}

	public function login()
	{
		return view('account/login');
	}

	public function loginAttemp()
	{
		$email = $this->request->getVar('emailUser');
		$password = $this->request->getVar('passwordUser');

		$user = $this->usersModel->where(['emailUser' => $email])->first();
		
		if ($user) {
			if (password_verify($password, $user['passwordUser'])) {
				$data = [
					'nama' => $user['firstNameUser'],
					'email' => $user['emailUser'],
				];
				$this->session->set_userdata($data);
				redirect('shop/animals');
			}
			else {
				return redirect()->to('/login');
			}
		}
		
		else {
		}
		return redirect()->to('/login');
	}

	public function register()
	{
		return view('account/register');
	}

	public function registerCreate()
	{
		$this->usersModel->save([
			'firstNameUser' => $this->request->getVar('firstNameUser'),
			'lastNameUser' => $this->request->getVar('lastNameUser'),
			'emailUser' => $this->request->getVar('emailUser'),
			'passwordUser' => password_hash($this->request->getVar('passwordUser'), PASSWORD_DEFAULT),
			'roleId' => 'member',
		]);

		return redirect()->to('/login');
	}
}
