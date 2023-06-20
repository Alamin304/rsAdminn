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
                $data = $addcatgModel->where('parents', 0)->findAll();

                return view('Admin_Template/add_category', [
                    'data' => $data,
                    'successMessage' => $successMessage,
                ]);
    }


        public function edit_categories($id)
        {
            $updatcatgModel = new add_categoryModel();

            
            
            $data= $updatcatgModel->where('id', $id)->findAll();
           
            


            return view('Admin_Template/edit_categories', ['data'=>$data,]);
        }

        


//         public function edit_categories($id)
// {
//     $updatcatgModel = new add_categoryModel();

//     // Fetch the existing data from the database
//     $data = $updatcatgModel->find($id);

//     $name = $this->request->getPost('name');
//     $URL = $this->request->getPost('uri');
//     $description = $this->request->getPost('description');
//     $order = $this->request->getPost('order');

//     if (is_array($data)) {
//         if ($name && $URL && $description && $order) {
//             $newData = [
//                 'name' => $name,
//                 'URL' => $URL,
//                 'description' => $description,
//                 'order' => $order,
//             ];

//             // Update the record
//             $result = $updatcatgModel->update($id, $newData);

//             if ($result) {
//                 // Update the existing data with the new values
//                 $data = array_merge($data, $newData);
//             } else {
//                 // Handle the case when the update fails
//                 // ...
//             }
//         }
//     } else {
//         // Handle the case when the data is not found or is not an array
//         // ...
//     }

//     return view('Admin_Template/edit_categories', ['data' => $data]);
// }




}
