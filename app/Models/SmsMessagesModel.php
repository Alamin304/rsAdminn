<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class SmsMessagesModel extends Model
{
    protected $table = 'sms_messages'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['messages','date',]; 
}
