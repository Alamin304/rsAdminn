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

            $response = [
                'name' => [
                    'status' => 'required',
                    'message' => 'Please enter a name',
                ],
                'uri' => [
                    'status' => 'required',
                    'message' => 'Please enter a uri',
                ],
                'description' => [
                    'status' => 'required',
                    'message' => 'Please enter a description',
                ],
                'order' => [
                    'status' => 'required',
                    'message' => 'Please enter a order',
                ]
                
            ];
            return json_encode($response);
            // return view('Admin_Template/add_category',['data'=>$data]);
        }
        
        $addcatgModel = new add_categoryModel();
        $data = [

            'name' => $this->request->getPost('name'),
            'URL' => $this->request->getPost('uri'),
            'description' => $this->request->getPost('description'),
            'order' => $this->request->getPost('order'),
            'parents' => $this->request->getPost('parent_id'),
            'others' => $this->request->getPost('site')=== 'oth' ? $this->request->getPost('othersField') : $this->request->getPost('site'),
            
            
        ];

                 $addcatgModel->insert($data);
                
                // $successMessage = "Category has been created successfully.";
                $data = $addcatgModel->findAll();
                $data = $addcatgModel->where('parents', 0)->findAll();

                $response = [
                    'success' => [
                        'status' => 'ok',
                        'message' => 'Data inserted successfully.',
                    ],
                ];
                return json_encode($response);

                return view('Admin_Template/add_category', [
                    'data' => $data,
                    'successMessage' => $successMessage,
                ]);
    }


        public function edit_categories($id)
        {
            $db = \Config\Database::connect();
            $updatcatgModel = new add_categoryModel();

        
            $data2 = $updatcatgModel->where('parents', 0)->findAll();
            $data= $updatcatgModel->where('id', $id)->findAll();

            $query = 'SELECT * FROM categorys
            LEFT JOIN posts ON categorys.id = posts.category
            WHERE categorys.id = ' . $id;

           $res = db_connect()->query($query)->getResult();
           $data1 = $res;
            
            

            return view('Admin_Template/edit_categories', ['data'=>$data,'data2'=>$data2,'data1'=>$data1,]);
        }

        
        public function update_categories($id)
        {
            
            $updatcatgModel = new add_categoryModel();


            $query = 'SELECT * FROM categorys
            LEFT JOIN posts ON categorys.id = posts.category
            WHERE categorys.id = ' . $id;

           $res = db_connect()->query($query)->getResult();
           $data1 = $res;

            if ($this->request->getMethod() === 'put') {
                $categoryId = $this->request->getPost('categoryId');
                $name = $this->request->getPost('name');
                $URL = $this->request->getPost('uri');
                $description = $this->request->getPost('description');
                $order = $this->request->getPost('order');
                $parents = $this->request->getPost('parent_id');
                $others = $this->request->getPost('site');

                $data = [
                    'name' => $name,
                    'URL' => $URL,
                    'description' => $description,
                    'order' => $order,
                    'parents' => $parents,
                    'others' => $others,
                ];


                $updatcatgModel->update($categoryId, $data);

                $response = [
                    'success' => true,
                    'message' => 'Data updated successfully.'
                ];

                return $this->response->setJSON($response);

            }
            $data2 = $updatcatgModel->where('parents', 0)->findAll();
            $data = $updatcatgModel->find([$id]); 
            // var_dump($data);
        
             return view('Admin_Template/edit_categories', ['data' => $data,'data2' => $data2,'data1'=>$data1,]);
            // return redirect()->to('/update_categories');
        }
        




}
