<?php

namespace App\Controllers;
use App\Models\add_categoryModel;

class CategoriesController extends BaseController
{
    public function categories()
    {
        
        $catmodel = new add_categoryModel();
        $data = $catmodel->where('parents', 0)->findAll();

        $totalCountParents = count($data);

        

        return view('Admin_Template/categories', [
            'data' => $data,
            'totalCountParents' => $totalCountParents
        ]);
    }
}