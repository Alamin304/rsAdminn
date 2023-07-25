<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class ServiceDetailsModel extends Model
{
    protected $table = 'services_details'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['Name','Email','password','description','phone','address','city','zip','Booking','service',]; 
}
