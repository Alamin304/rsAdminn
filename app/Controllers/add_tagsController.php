<?php

namespace App\Controllers;
use App\Models\add_tagsModel;

class add_tagsController extends BaseController
{
    public function add_tags()
    {
        return view('Admin_Template/add_tags');
    }

    public function tags_insertData()
    {

        
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
    
    public  function edit_tags($id)
    {


        $updattagModel = new add_tagsModel();
            
        $data= $updattagModel->where('id', $id)->findAll();
                    // echo "<pre>";
                    // var_dump($data);
                    // die();
        return view('Admin_Template/edit_tags',['data'=>$data,]);
    }

    public function update_tags($id)
    {
        
        $updattagModel = new add_tagsModel();
        if ($this->request->getMethod() === 'put') {
            $name = $this->request->getPost('name');
            $URL = $this->request->getPost('uri');
        
            if ($name && $URL) {
                $data = [
                    'name' => $name,
                    'URL' => $URL,
                ];
        
                $updattagModel->update([$id], $data); // Wrap $id in an array
            }
        }
        
        $data = $updattagModel->find([$id]); // Wrap $id in an array
        var_dump($data);
    
          return view('Admin_Template/edit_tags',['data'=>$data]);
    }
}
