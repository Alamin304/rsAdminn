<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class ServicePriceModel extends Model
{
    protected $table = 'services_pricing'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['methodName','status','services_id']; 
}
