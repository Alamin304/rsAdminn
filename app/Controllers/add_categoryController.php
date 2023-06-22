<?php

namespace App\Controllers;
use App\Models\add_categoryModel;

class add_categoryController extends BaseController
{
    public function add_categories()
    {
        $catmodel = new add_categoryModel();
        $data = $catmodel->where('parents', 0)->findAll();
       
        return view('Admin_Template/add_category',['data'=>$data]);
    }

    public function category_insertData(){

        $catmodel = new add_categoryModel();
        $data = $catmodel->where('parents', 0)->findAll();

        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required',
            'uri' => 'required',
            'description' =>'required',
            'order' =>'required',
        ];

        if (! $this->validate($rules)) {
            return view('Admin_Template/add_category',['data'=>$data]);
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
                $data = $addcatgModel->where('parents', 0)->findAll();

                return view('Admin_Template/add_category', [
                    'data' => $data,
                    'successMessage' => $successMessage,
                ]);
    }


        public function edit_categories($id)
        {
            $updatcatgModel = new add_categoryModel();

            // $catmodel = new add_categoryModel();
        $data2 = $updatcatgModel->where('parents', 0)->findAll();
        print_r($data2);
            // $data2 = $catmodel->where('parents', 0)->findAll();
            $data= $updatcatgModel->where('id', $id)->findAll();
            print_r($data);
            

            return view('Admin_Template/edit_categories', ['data'=>$data,'data2'=>$data2,]);
        }

        
        public function update_categories($id)
        {
            
            $updatcatgModel = new add_categoryModel();
            if ($this->request->getMethod() === 'put') {
                $name = $this->request->getPost('name');
                $URL = $this->request->getPost('uri');
                $description = $this->request->getPost('description');
                $order = $this->request->getPost('order');
                $parents = $this->request->getPost('parent_id');

                if ($name && $URL && $description && $order && $parents) {
                    $data = [
                        'name' => $name,
                        'URL' => $URL,
                        'description' => $description,
                        'order' => $order,
                        'parents' => 0,
                    ];
                    

                    $updatcatgModel->update([$id], $data); 
                }
            }
              $data2 = $updatcatgModel->where('parents', 0)->findAll();
            $data = $updatcatgModel->find([$id]); 
            var_dump($data);
        
             return view('Admin_Template/edit_categories', ['data' => $data,'data2' => $data2]);
        }
        




}
