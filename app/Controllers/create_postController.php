<?php

namespace App\Controllers;
use App\Models\create_postModel;
use App\Models\add_categoryModel;
use App\Models\add_tagsModel;

class create_postController extends BaseController
{
    public function create_post()
    {
        $db = \Config\Database::connect();

        $catmodel = new add_categoryModel();
        $data = $catmodel->where('parents', 0)->findAll();

        $subquery = 'SELECT * FROM categorys where parents>0';
        $result1 = $db->query($subquery);
        $subdata1 = $result1->getResult();

        $tagsmodel = new add_tagsModel();
        $data1 = $tagsmodel->findAll();
       
        // return view('Admin_Template/add_category',['data'=>$data]);
        return view('Admin_Template/create_post',['data'=>$data,'data1'=>$data1,'subdata1' =>$subdata1,]);
    }

    public function post_insertData()
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
    
        if (!$this->validate($rules)) {
    
            if (!$this->validate($rules)) {
                $response = [
                    'title' => [
                        'status' => 'required',
                        'message' => $validation->getError('title'),
                    ],
                    'uri' => [
                        'status' => 'required',
                        'message' => $validation->getError('uri'),
                    ],
                    'content' => [
                        'status' => 'required',
                        'message' => $validation->getError('content'),
                    ],
                    'media_id' => [
                        'status' => 'required',
                        'message' => $validation->getError('media_id'),
                    ],
                    // 'media_type' => [
                    //     'status' => 'required',
                    //     'message' => $validation->getError('media_type'),
                    // ],
                    'source' => [
                        'status' => 'required',
                        'message' => $validation->getError('source'),
                    ],
                    'source_link' => [
                        'status' => 'required',
                        'message' => $validation->getError('source_link'),
                    ],
                    'tags' => [
                        'status' => 'required',
                        'message' => $validation->getError('tags'),
                    ],
                    // 'photos' => [
                    //     'status' => 'required',
                    //     'message' => $validation->getError('photos'),
                    // ]
                ];
    
                return json_encode($response);
            }
    
    
            return redirect()->to('/create_post')->withInput()->with('errors', $validation->getErrors());
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
            'category' => $this->request->getPost('category'),
            'source' => $this->request->getPost('source'),
            'source_link' => $this->request->getPost('source_link'),
            'tags' => $this->request->getPost('tags'),
            'photos' => $this->request->getFile('photos')->getName(),
        ];
    
        $createpostModel->insert($data);

        $response = [
            'success' => true,
            'message' => 'Post updated successfully.'
        ];

        return $this->response->setJSON($response);

    
        $photos = $this->request->getFile('photos');
        if ($photos->isValid() && !$photos->hasMoved()) {
            $photos->move(ROOTPATH . 'public/uploads');
        }
    
        $successMessage = "Thank you, your blog post has been updated successfully.";
    
        return redirect()->to('/create_post')->with('successMessage', $successMessage);
    }
    

    public  function edit_posts($id)
    {

        $updatpostModel = new create_postModel();
        $data= $updatpostModel->where('id', $id)->findAll();

        $updatpostModel = new add_categoryModel();
        $data2 = $updatpostModel ->where('parents', 0)->findAll();  
        
        $tagsmodel = new add_tagsModel();
        $data1 = $tagsmodel->findAll();
        

        return view('Admin_Template/edit_posts', ['data'=>$data,'data2'=>$data2,'data1'=>$data1,]);
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
        $category = $this->request->getPost('category');
        $featured = $this->request->getPost('featured');
        $source = $this->request->getPost('source');
        $source_link = $this->request->getPost('source_link');
        $tags = $this->request->getPost('tags');
        $photos = $this->request->getfile('photos')->getName();

       
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

            $response = [
                'success' => true,
                'message' => 'Post updated successfully.'
            ];
    
            return $this->response->setJSON($response);

        
    }

    $data2 = $updatpostModel->where('category')->findAll();
    $data = $updatpostModel->find([$id]);
    
    return view('Admin_Template/edit_posts', ['data' => $data,'data2' => $data2,]);

  }


}
