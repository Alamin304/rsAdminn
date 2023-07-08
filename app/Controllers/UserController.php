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

      $myData[] = $allvalue;
   }

   if ($this->request->isAJAX()) {
      $output = view('User_Side/userhome', [
         'data' => $myData,
         'pager' => $pager,
         'totalCount' => $totalCount,
      ]);
      return $this->response->setJSON(['output' => $output]);
   } else {
      return view('User_Side/userhome', [
         'data' => $myData,
         'pager' => $pager,
         'totalCount' => $totalCount,
      ]);
   }
}


public function readmore($id)
{
    $postmodel = new create_postModel();
    
    $data = array($postmodel->find($id));

    // $data = $postmodel->find($id);
    
    //  echo '<pre>';
    //  print_r($data);
    //  die();
    
    return view('User_Side/readmore_content', [
        'data' => $data,
    ]);
}



public function taghome(){

    $db = \Config\Database::connect();
    $postmodel = new create_postModel();
    $data = $postmodel->findAll();

    $myData = [];

   foreach ($data as $allvalue) {
      $allvalue['tag_into'] = $db->table('tags')
         ->where('id', $allvalue['tags'])
         ->get()
         ->getResult();

      $myData[] = $allvalue;
   }
//    echo '<pre>'; print_r($myData);
//    die();

    return view('User_Side/taghome',[
        'data' => $myData,
     ]);
}

// public function taghome($id)
// {

//     $postmodel = new create_postModel();
    
//     $data = $postmodel->findAll();

//     $myData = [];

//    foreach ($data as $allvalue) {
//       $allvalue['category_into'] = $db->table('categorys')
//          ->where('id', $allvalue['category'])
//          ->get()
//          ->getResult();

//       $allvalue['tag_into'] = $db->table('tags')
//          ->where('id', $allvalue['tags'])
//          ->get()
//          ->getResult();

//       $myData[] = $allvalue;
//    }
    
    
//     // $data = $postmodel->find($id);
    
//     //  echo '<pre>';
//     //  print_r($data);
//     //  die();
    
//     // return view('User_Side/tags_content', [
//     //     // 'data' => $data,
//     // ]);

//     return view('User_Side/taghome', [
//         'data' => $myData,
//      ]);
// }


}
