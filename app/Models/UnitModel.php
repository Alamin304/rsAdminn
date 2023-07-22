<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class UnitModel extends Model
{
    protected $table = 'unit_pricing'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['unit_name','base_price','status','services_pricing_id',]; 
}
