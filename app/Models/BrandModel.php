<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class BrandModel extends Model
{
    protected $table = 'brandsettings'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['logo_dark','logo_light','favicon','title_text','footer_text','default_language','RTL','landing_page','signup_page','email_verification','sidebar_setting','layout_setting',]; 
}
