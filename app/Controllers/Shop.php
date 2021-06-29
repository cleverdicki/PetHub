<?php

namespace App\Controllers;

class Shop extends BaseController
{
	public function animals()
	{
		return view('shop/animals');
	}

    public function supplies()
    {
        return view('shop/supplies');
    }

    public function successPayment()
    {
        return view('shop/successPayment');
    }
}
