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
		$supplies = $this->suppliesModel->where(['suppliesCategory' => 'hewan'])->findAll();

		$data = [
			'supplies' => $supplies
		];

		return view('admin/adminInventory', $data);
	}
	
	public function inventoryStuff()
	{
		$supplies = $this->suppliesModel->where(['suppliesCategory' => 'perlengkapan'])->findAll();

		$data = [
			'supplies' => $supplies
		];

		return view('admin/adminInventoryStuff', $data);
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

	public function deleteData($id)
	{
		$data = $this->suppliesModel->find($id);
		unlink('img/' . $data['suppliesImage']);
		$this->suppliesModel->delete($id);
		return redirect()->to('/admin/inventory');
	}

	public function deleteDataStuff($id)
	{
		$data = $this->suppliesModel->find($id);
		unlink('img/' . $data['suppliesImage']);
		$this->suppliesModel->delete($id);
		return redirect()->to('/admin/inventoryStuff');
	}

	public function editData($id)
	{
		$supplies = $this->suppliesModel->where(['id' => $id])->first();

		$data = [
			'supplies' => $supplies
		];

		return view('admin/adminEditInventory', $data);
	}

	public function updateData($id)
	{
		$file = $this->request->getFile('suppliesImage');
		if($file->getError() == 4) {
			$imageName = $this->request->getVar('suppliesImageOld');
		} else {
			$imageName = $file->getRandomName();
			$file->move('img', $imageName);
			unlink('img/' . $this->request->getVar('suppliesImageOld'));
		}

		$this->suppliesModel->save([
			'id' => $id,
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
