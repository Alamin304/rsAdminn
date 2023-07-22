<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class AllStaffModel extends Model
{
    protected $table = 'all_staff'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['Name','Email','password','description','phone','address','city','zip','Booking','service',]; 
}
