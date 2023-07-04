<?php

namespace App\Controllers;
use App\Models\create_postModel;
use CodeIgniter\Pager\PagerRenderer;
use App\Models\add_categoryModel;
use App\Models\add_tagsModel;

class UserController extends BaseController
{
    public function userhome()
    {
$db = \Config\Database::connect();
        $catmodel = new add_categoryModel();
        $catData = $catmodel->where('parents', 0)->findAll();

        $tagsmodel = new add_tagsModel();
        $tagData = $tagsmodel->findAll();

        $postmodel = new create_postModel();
        $search = $this->request->getGet('search');

        if ($search) {
            $data = $postmodel->like('title', $search)->findAll();
            $totalCount = count($data);
            $pager = null;
        } else {
            $perPage = 3;
            $data = $postmodel->paginate($perPage);
            $pager = $postmodel->pager;
            $totalCount = $postmodel->pager->getTotal();
        }

        foreach($catData as $value){
            $id =  $value['id'];
            $query = 'SELECT * FROM categorys
            LEFT JOIN posts ON categorys.id = posts.category
            WHERE categorys.id = ' .$id;
            $result = $db->query($query);
            $data1 = $result->getResult();
            
        }

        foreach($tagData as $value2){
                $id =  $value2['id'];
                $query = 'SELECT * FROM tags
                LEFT JOIN posts ON tags.id = posts.tags
                WHERE tags.id = ' . $id;
                $result = $db->query($query);
                $data2 = $result->getResult();
            }

            return view('User_Side/userhome', [
            'data' => $data,
            'data1' => $data1,
            'data2' => $data2,
            'pager' => $pager,
            'totalCount' => $totalCount,
        ]);

        
        // return view('User_Side/userhome');
    }


    public function readmore(){

        $postmodel = new create_postModel();
       

        $search = $this->request->getGet('search');

        if ($search) {
            $data = $postmodel->like('title', $search)->findAll();
            $totalCount = count($data);
            $pager = null;
        } else {
            $perPage = 3;
            $data = $postmodel->paginate($perPage);
            $pager = $postmodel->pager;
            $totalCount = $postmodel->pager->getTotal();
        }
        $data = $postmodel->findAll();

        return view('User_Side/readmore_content',[
            'data' => $data,
            'pager' => $pager,
            'totalCount' => $totalCount,
        ]);
    }
}
