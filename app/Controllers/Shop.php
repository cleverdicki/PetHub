<?php

namespace App\Controllers;

use App\Models\SuppliesModel;

class Shop extends BaseController
{
    protected $suppliesModel;
	public function __construct()
	{
		$this->suppliesModel = new SuppliesModel();
	}

	public function animals()
	{
        $supplies = $this->suppliesModel->where(['suppliesCategory' => 'hewan'])->findAll();

		$data = [
			'supplies' => $supplies
		];

		return view('shop/animals', $data);
	}

    public function supplies()
    {
        $supplies = $this->suppliesModel->where(['suppliesCategory' => 'perlengkapan'])->findAll();

		$data = [
			'supplies' => $supplies
		];

        return view('shop/supplies', $data);
    }

    public function successPayment()
    {
        return view('shop/successPayment');
    }
}
