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
        'name.*' => 'required',
        'uri.*' => 'required',
    ];

    if (! $this->validate($rules)) {
        $response = [
            'name' => [
                'status' => 'required',
                'message' => 'Please enter a name..',
            ],
            'uri' => [
                'status' => 'required',
                'message' => 'Please enter a uri..',
            ],
        ];
        return json_encode($response);
    }

    $addtagsModel = new add_tagsModel();

    $nameArray = $this->request->getPost('name');
    $uriArray = $this->request->getPost('uri');

    $data = [];
    foreach ($nameArray as $index => $name) {
        $uri = $uriArray[$index];

        $data[] = [
            'name' => $name,
            'URL' => $uri,
        ];
    }

    if (!empty($data)) {
        $addtagsModel->insertBatch($data);
    }

    $data = $addtagsModel->findAll();
    $response = [
        'success' => [
            'status' => 'ok',
            'message' => 'Data inserted successfully.',
        ],
    ];
    return json_encode($response);


        return view('Admin_Template/add_tags', [
            'data' => $data,
            'successMessage' => $successMessage
        ]);

    }
    
    public  function edit_tags($id)
    {

        $db = \Config\Database::connect();
        $updattagModel = new add_tagsModel();
        $data= $updattagModel->where('id', $id)->findAll();

         $query = 'SELECT * FROM tags
            LEFT JOIN posts ON tags.id = posts.tags
            WHERE tags.id = ' . $id;

       $res = db_connect()->query($query)->getResult();
       $data1 = $res;
                    // echo "<pre>";
                    // var_dump($data);
                    // die();
        return view('Admin_Template/edit_tags',['data'=>$data,'data1'=>$data1,]);
    }


    public function update_tags($id)
    {
        
        $updattagModel = new add_tagsModel();

        $data= $updattagModel->where('id', $id)->findAll();

        $query = 'SELECT * FROM tags
           LEFT JOIN posts ON tags.id = posts.tags
           WHERE tags.id = ' . $id;

      $res = db_connect()->query($query)->getResult();
      $data1 = $res;

      if ($this->request->getMethod() === 'put') {
        $name = $this->request->getPost('name');
        $URL = $this->request->getPost('uri');
        // $checkbox = $this->request->getPost('checkbox');
        // $checkbox = isset($checkbox) ? 1 : 0;

        if ($name && $URL) {
            $data = [
                'name' => $name,
                'URL' => $URL,
                // 'future' => $checkbox,
            ];
            
                $updattagModel->update([$id], $data); 
                
                $response = [
                    'success' => true,
                    'message' => 'tags updated successfully.'
                ];

                return $this->response->setJSON($response);

            }
        
        }
        
        $data = $updattagModel->find([$id]); 
        // var_dump($data);
    
          return view('Admin_Template/edit_tags',['data'=>$data,'data1'=>$data1,]);
    }
}
