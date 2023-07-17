<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class EmailModel extends Model
{
    protected $table = 'emailsettings'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['mail_driver','mailhost','mailport','mailuser_name','mail_password','mail_encryption','mail_address','mail_name',]; 
}
