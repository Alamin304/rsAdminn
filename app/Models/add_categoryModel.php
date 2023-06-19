<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class add_categoryModel extends Model
{
    protected $table = 'categorys'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','URL','description','order','parents']; 
}
