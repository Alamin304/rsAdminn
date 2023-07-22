<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class AddServiceModel extends Model
{
    protected $table = 'services'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['color_tag','service_title','service_description','service_image','status',]; 
}
