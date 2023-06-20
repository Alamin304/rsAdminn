<?php

namespace App\Controllers;
use App\Models\create_postModel;

class create_postController extends BaseController
{
    public function create_post()
    {
        return view('Admin_Template/create_post');
    }

    public function post_insertData ()
    {

        
        $validation = \Config\Services::validation();

        $rules = [
            'title' => 'required',
            'uri' => 'required',
            
        ];

        if (! $this->validate($rules)) {
            return view('Admin_Template/create_post');
        }

        $createpostModel = new create_postModel();

       
        $data = [

            
            'title' => $this->request->getPost('title'),
            'URI' => $this->request->getPost('uri'),
            'type' => $this->request->getPost('type'),
            'content' => $this->request->getPost('content'),
            'media_id' => $this->request->getPost('media_id'),
            'media_type' => $this->request->getPost('media_type'),
            'media_artwork' => $this->request->getPost('media_artwork'),
            'source' => $this->request->getPost('source'),
            'source_link' => $this->request->getPost('source_link'),
            'tags' => $this->request->getPost('tags'),
            'photos' => $this->request->getfile('photos')->getName(),
            
            
        ];

        $createpostModel->insert($data);

         $photos = $this->request->getFile('photos');
        if ($photos->isValid() && !$photos->hasMoved()) {
         $photos->move(ROOTPATH . 'public/uploads');
        }
        $successMessage = "Thank you, your blog post has been updated successfully..";
        $data = $createpostModel->findAll();

        return view('Admin_Template/create_post', [
            'data' => $data,
            'successMessage' => $successMessage
        ]);


     

    }
    public  function edit_posts($id)
    {

        $updatpostModel = new create_postModel();

            
            
        $data= $updatpostModel->where('id', $id)->findAll();
                    echo "<pre>";
                    var_dump($data);
                    die();
        


        return view('Admin_Template/edit_posts', ['data'=>$data,]);
    }

}
