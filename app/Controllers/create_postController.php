<?php

namespace App\Controllers;
use App\Models\create_postModel;
use App\Models\add_categoryModel;

class create_postController extends BaseController
{
    public function create_post()
    {
        $catmodel = new add_categoryModel();
        $data = $catmodel->where('parents', 0)->findAll();
       
        // return view('Admin_Template/add_category',['data'=>$data]);
        return view('Admin_Template/create_post',['data'=>$data]);
    }

    public function post_insertData ()
    {

        $validation = \Config\Services::validation();

        $rules = [
            'title' => 'required',
            'uri' => 'required',
            'content' => 'required',
            'media_id' => 'required',
            'media_type' => 'required',
            'source' => 'required',
            'source_link' => 'required',
            'tags' => 'required',
            // 'photos' => 'uploaded[flag]|mime_in[flag,image/png,image/jpg,image/jpeg]|max_size[flag,2048]',

        ];

        if (! $this->validate($rules)) {
            return view('Admin_Template/create_post',['data'=>$data]);
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
            'category'=> $this->request->getPost('category'),
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

        // session->setFlashData('success', $successMessage);
        return redirect()->to('/create_post',);

    }


    public  function edit_posts($id)
    {

        $updatpostModel = new create_postModel();
        $data= $updatpostModel->where('id', $id)->findAll();

        $updatpostModel = new add_categoryModel();
        $data2 = $updatpostModel ->where('parents', 0)->findAll();   
        

        return view('Admin_Template/edit_posts', ['data'=>$data,'data2'=>$data2,]);
    }

    
    public function update_posts($id)
    {
    $updatpostModel = new create_postModel();

    if ($this->request->getMethod() === 'put') {
    
       echo $title = $this->request->getPost('title');
        $URI = $this->request->getPost('uri');
        $type = $this->request->getPost('type');
        $content = $this->request->getPost('content');
        $media_id = $this->request->getPost('media_id');
        $media_type = $this->request->getPost('media_type');
        $media_artwork = $this->request->getPost('media_artwork');
        $category = $this->request->getPost('category');
        $featured = $this->request->getPost('featured');
        $source = $this->request->getPost('source');
        $source_link = $this->request->getPost('source_link');
        $tags = $this->request->getPost('tags');
        $photos = $this->request->getPost('photos');

       
            $data = [
                
                'title' => $title,
                'URI' => $URI,
                'type' => $type,
                'content' => $content,
                'media_id' => $media_id,
                'media_type' => $media_type,
                'media_artwork' => $media_artwork,
                'category' => $category,
                'featured' => $featured,
                'source' => $source,
                'source_link' => $source_link,
                'tags' => $tags,
                'photos' => $photos,
            ];

            $updatpostModel->update([$id], $data); 

        
    }

    $data2 = $updatpostModel->where('category')->findAll();
    $data = $updatpostModel->find([$id]);
    
    return view('Admin_Template/edit_posts', ['data' => $data,'data2' => $data2,]);

  }


}
