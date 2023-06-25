<?php
    namespace App\Controllers;

    use App\Models\create_postModel;
    use CodeIgniter\Pager\PagerRenderer;
    use App\Models\add_categoryModel;

    
    class postsController extends BaseController{
      public function posts()
      {
        $db = \Config\Database::connect();
        $catmodel = new add_categoryModel();
        $catData = $catmodel->where('parents', 0)->findAll();

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

        return view('Admin_Template/posts', [
            'data' => $data,
            'data1' => $data1,
            'pager' => $pager,
            'totalCount' => $totalCount,
        ]);
    }
}
