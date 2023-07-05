<?php
    namespace App\Controllers;

    use App\Models\create_postModel;
    use CodeIgniter\Pager\PagerRenderer;
    use App\Models\add_categoryModel;
    use App\Models\add_tagsModel;

    
    class postsController extends BaseController{
      public function posts()
      {
        $db = \Config\Database::connect();
        $catmodel = new add_categoryModel();
        $catData = $catmodel->where('parents', 0)->findAll();

        $pcatData = $catmodel->findAll();

        $photoData = [];
        foreach($pcatData as $photodata){
            $photodata['category_photo'] = $db->table('categorys')
            ->where('id', $photodata['photos'])
            ->get()
            ->getResult();
            
            $photoData[]=$photodata;
        }
        // echo '<pre>';
        // print_r($pcatData);
        // die();
        

        $tagsmodel = new add_tagsModel();
        $tagData = $tagsmodel->findAll();
        

        $postmodel = new create_postModel();
        $data = $postmodel->findAll();
        
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

        $myData = [];

        foreach ($data as $allvalue) {
            $allvalue['category_into'] = $db->table('categorys')
                ->where('id', $allvalue['category'])
                ->get()
                ->getResult();
        
            $allvalue['tag_into'] = $db->table('tags')
                ->where('id', $allvalue['tags'])
                ->get()
                ->getResult();

                $allvalue['category_photo'] = $photoData;
                $myData[]=$allvalue;
                
        }
// echo '<pre>';
// print_r($myData);
// die();
       
            // foreach($catData as $value){
            //     $id =  $value['id'];
            //     print_r($id);
            //     die();
            //     $query = 'SELECT * FROM categorys
            //     LEFT JOIN posts ON categorys.id = posts.category
            //     WHERE categorys.id = ' .$id;
            //     $result = $db->query($query);
            //     $data1 = $result->getResult();
            //     print_r($data1);
                
            // }

        // foreach($tagData as $value2){
        //         $id =  $value2['id'];
        //         // print_r($id);
        //         $query = 'SELECT * FROM tags
        //         LEFT JOIN posts ON tags.id = posts.tags
        //         WHERE tags.id = ' . $id;
        //         $result2 = $db->query($query);
        //         $data2 = $result2->getResult();
        //         // print_r($data2);
               
        //     }

        return view('Admin_Template/posts', [
            'data' => $myData,
            'photoData' => $photoData,
            // 'data1' => $data1,
            // 'data2' => $data2,
            'pager' => $pager,
            'totalCount' => $totalCount,
        ]);
    }
}
