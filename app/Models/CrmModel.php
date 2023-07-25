<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class CrmModel extends Model
{
    protected $table = 'crm'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['preferred_email_address','preferred_password','first_name','last_name','phone','street_address','zip_code','city','state','notes','date',]; 
}
