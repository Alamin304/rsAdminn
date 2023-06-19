<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\add_categoryModel;


class form_add_categoryController extends Controller
{
    
    public function category_insertData(){
        

        // $validation = \Config\Services::validation();

        // $rules = [
        //     'name' => 'required',
        //     'email' => 'required',
            
        // ];

        // if (! $this->validate($rules)) {
        //     return view('welcome_message');
        // }
        $addcatgModel = new add_categoryModel();

       
        $data = [

            
            'name' => $this->request->getPost('name'),
            'URL' => $this->request->getPost('url'),
            'desc' => $this->request->getPost('description'),
            'order' => $this->request->getPost('order'),
            'parents' => $this->request->getPost('parent_id'),
            
        ];

        $addcatgModel->insert($data);

        return 'Success';
    }
}
