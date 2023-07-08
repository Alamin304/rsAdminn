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

        // $pcatData = $catmodel->findAll();

        

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

                // $allvalue['category_photo'] = $photoData;
                $myData[]=$allvalue;
                
        }
// echo '<pre>';
// print_r($myData);
// die();
       

        return view('Admin_Template/posts', [
            'data' => $myData,
            'pager' => $pager,
            'totalCount' => $totalCount,
        ]);
    }
}
