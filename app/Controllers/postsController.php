<?php

namespace App\Controllers;
use App\Models\create_postModel;

class postsController extends BaseController
{
    public function posts()
    {

        $postmodel = new create_postModel();
        $data = $postmodel->findAll();
        $totalCount = count($data);

        

        return view('Admin_Template/posts', [
            'data' => $data,
            'totalCount' => $totalCount,
            
        ]);
        // return view('Admin_Template/posts');
    }
}
