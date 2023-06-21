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
        $catmodel = new add_categoryModel();
        $data = $catmodel->where('parents', 0)->findAll();
        
        

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
            'photos' => 'required',
            
            
            
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

        return view('Admin_Template/edit_posts', ['data'=>$data,]);
    }
    
    public function update_posts($id)
        {
            
            $updatpostModel = new create_postModel();
        
            if ($this->request->getMethod() === 'put') {
                $title = $this->request->getPost('title');
                $URI = $this->request->getPost('uri');
                $type = $this->request->getPost('type');
                $content = $this->request->getPost('content');
                $media_id = $this->request->getPost('media_id');
                $media_type = $this->request->getPost('media_type');
                $media_artwork = $this->request->getPost('media_artwork');
                $category_id = $this->request->getPost('category_id');
                $source = $this->request->getPost('source');
                $source_link = $this->request->getPost('source_link');
                $views = $this->request->getPost('views');
                $tags = $this->request->getPost('tags');
                $photos = $this->request->getPost('photos[]');
                
        
                if ($title && $URI && $type && $content && $media_id && $media_type && $media_artwork && $category_id && $source && $source_link && $views && $tags && $photos) {
                    $data = [
                        'title' => $title,
                        'URI' => $URI,
                        'type' => $type,
                        'content' => $content,
                        'media_id' => $media_id,
                        'media_type' => $media_type,
                        'media_artwork' => $media_artwork,
                        'category_id' => $category_id,
                        'source' => $source,
                        'source_link' => $source_link,
                        'views' => $views,
                        'tags' => $tags,
                        'photos' => $photos,
                        

                    ];
                    
        
                    $updatpostModel->update($id, $data);
                }
            }
        
            $data =  $updatpostModel->find($id);
            var_dump($data);
        
            //  return view('Admin_Template/edit_categories', ['data' => $data]);
        }

}
