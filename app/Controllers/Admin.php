<?php

namespace App\Controllers;

use App\Models\SuppliesModel;

class Admin extends BaseController
{
	protected $suppliesModel;
	public function __construct()
	{
		$this->suppliesModel = new SuppliesModel();
	}

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
	
	public function inventory()
	{
		return view('admin/adminInventory');
	}
	
	public function inventoryStuff()
	{
		return view('admin/adminInventoryStuff');
	}
	
	public function addInventory()
	{
		return view('admin/adminAddInventory');
	}
	
	public function createInventory()
	{
		$file = $this->request->getFile('suppliesImage');
		$imageName = $file->getRandomName();
		$file->move('img', $imageName);

		$this->suppliesModel->save([
			'suppliesName' => $this->request->getVar('suppliesName'),
			'suppliesCategory' => $this->request->getVar('suppliesCategory'),
			'suppliesPrice' => $this->request->getVar('suppliesPrice'),
			'suppliesQuantity' => $this->request->getVar('suppliesQuantity'),
			'suppliesDescription' => $this->request->getVar('suppliesDescription'),
			'suppliesImage' => $imageName
		]);

		return redirect()->to('/admin/inventory');
	}

}
