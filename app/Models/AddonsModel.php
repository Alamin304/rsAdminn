<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class AddonsModel extends Model
{
    protected $table = 'addons_service'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['addon_title','duration','addons_service_image','icon','basic_price','max_qty','multiple_qty','status','services_id',]; 
}
