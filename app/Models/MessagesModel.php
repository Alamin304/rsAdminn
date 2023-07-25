<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class MessagesModel extends Model
{
    protected $table = 'messages'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['message_subject','message','attachment','crm_id','date',]; 
}
