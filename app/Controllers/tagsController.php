<?php

namespace App\Controllers;
use App\Models\add_tagsModel;
use CodeIgniter\Database\Database;

class tagsController extends BaseController
{
    public function tags()
    {



        $tagmodel = new add_tagsModel();

        $data = $tagmodel->findAll();
 
         $db = db_connect();
         $totalCounttags = $db->table('tags')->countAll();
         $totalCountname = $db->table('tags')->where('name', '!=', '')->countAll();
 
         return view('Admin_Template/tags',['data'=>$data,'totalCounttags' => $totalCounttags,
         'totalCountname' => $totalCountname]);
        return view('Admin_Template/tags');
    }
}
