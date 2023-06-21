<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class create_postModel extends Model
{
    protected $table = 'posts'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','URI','type','content','media_id','media_type','media_artwork','category','source','source_link','tags','photos','categories_id']; 
}
