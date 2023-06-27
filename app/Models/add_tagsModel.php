<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class add_tagsModel extends Model
{
    protected $table = 'tags'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','URL','future']; 
}
