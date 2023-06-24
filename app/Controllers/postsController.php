<?php
    namespace App\Controllers;
    use App\Models\create_postModel;
    use CodeIgniter\Pager\PagerRenderer;

    
    class postsController extends BaseController{
      public function posts()
      {
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

        return view('Admin_Template/posts', [
            'data' => $data,
            'pager' => $pager,
            'totalCount' => $totalCount,
        ]);
    }
}
