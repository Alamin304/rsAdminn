<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class AddPlanModel extends Model
{
    protected $table = 'addplan'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['planname','price','duration','mxusers','mxcustomer','mxvendor','mxclient','storlimit','description','CRM','project','HRM','account','POS','chatGPT',]; 
}
