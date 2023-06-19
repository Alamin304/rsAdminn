<?php

namespace App\Controllers;

class postsController extends BaseController
{
    public function posts()
    {
        return view('Admin_Template/posts');
    }
}
