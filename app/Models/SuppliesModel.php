<?php

namespace App\Models;

use CodeIgniter\Model;

class SuppliesModel extends Model
{
    protected $table = 'supplies';
    protected $useTimestamps = true;
    protected $allowedFields = ['suppliesName', 'suppliesCategory', 'suppliesPrice', 'suppliesQuantity', 'suppliesDescription', 'suppliesImage'];
}