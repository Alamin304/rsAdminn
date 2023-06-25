<?php

namespace App\Controllers;
use App\Models\add_categoryModel;

class CategoriesController extends BaseController
{
    public function categories()
{
    $db = \Config\Database::connect();
    $catmodel = new add_categoryModel();
    $data = $catmodel->where('parents', 0)->findAll();

    $totalCountParents = count($data);

    $query = 'SELECT category, COUNT(category) AS count FROM posts
    LEFT JOIN categorys ON posts.category = categorys.id
     GROUP BY category';
    $result = $db->query($query);
    $data2 = $result->getResult();

    $postCounts = [];
    foreach ($data2 as $row) {
        $postCounts[$row->category] = $row->count;
    }

    return view('Admin_Template/categories', [
        'data' => $data,
        'data2' => $data2,
        'postCounts' => $postCounts,
        'totalCountParents' => $totalCountParents,
    ]);
}
}