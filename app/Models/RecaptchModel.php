<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class RecaptchModel extends Model
{
    protected $table = 'recaptchsettings'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['google_key','google_secret',]; 
}
