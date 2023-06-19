<?php

namespace App\Controllers;
use App\Models\add_categoryModel;

class add_categoryController extends BaseController
{
    public function add_categories()
    {
        $catmodel = new add_categoryModel();
        $data = $catmodel->findAll(); 
        return view('Admin_Template/add_category',['data'=>$data]);
    }

    public function category_insertData(){
        

        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required',
            'uri' => 'required',
            'description' =>'required',
        ];

        if (! $this->validate($rules)) {
            return view('Admin_Template/add_category');
        }
        
        $addcatgModel = new add_categoryModel();

        $data = [

            'name' => $this->request->getPost('name'),
            'URL' => $this->request->getPost('uri'),
            'description' => $this->request->getPost('description'),
            'order' => $this->request->getPost('order'),
            'parents' => $this->request->getPost('parent_id'),
            
        ];

        $addcatgModel->insert($data);
        $successMessage = "Category has been created successfully.";
        $data = $addcatgModel->findAll();

        return view('Admin_Template/add_category', [
            'data' => $data,
            'successMessage' => $successMessage
        ]);
    }
}
