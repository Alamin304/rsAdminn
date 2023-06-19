<?php

namespace App\Controllers;
use App\Models\add_tagsModel;

class add_tagsController extends BaseController
{
    public function add_tags()
    {
        return view('Admin_Template/add_tags');
    }

    public function tags_insertData(){

        
        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required',
            'uri' => 'required',
            
        ];

        if (! $this->validate($rules)) {
            return view('Admin_Template/add_tags');
        }

        $addtagsModel = new add_tagsModel();

       
        $data = [

            
            'name' => $this->request->getPost('name'),
            'URL' => $this->request->getPost('uri'),
            
            
        ];

        $addtagsModel->insert($data);
        $successMessage = "Category has been created successfully.";
        $data = $addtagsModel->findAll();

        return view('Admin_Template/add_tags', [
            'data' => $data,
            'successMessage' => $successMessage
        ]);


    }
}
