<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class AddUserModel extends Model
{
    protected $table = 'manageuser'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','email','password','plan_id',]; 
}
