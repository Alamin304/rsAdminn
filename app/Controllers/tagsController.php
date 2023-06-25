<?php

namespace App\Controllers;
use App\Models\add_tagsModel;
use CodeIgniter\Database\Database;

class tagsController extends BaseController
{
    public function tags()
{
    $tagmodel = new add_tagsModel();
    $data = $tagmodel->findAll();
 
    $db = db_connect();
    $totalCountTags = $db->table('tags')->countAll();
 
    $query = 'SELECT tags, COUNT(tags) AS count FROM posts
              LEFT JOIN tags ON posts.tags = tags.id
              GROUP BY tags';
    $result = $db->query($query);
    $data2 = $result->getResult();
 
    return view('Admin_Template/tags', [
        'data' => $data,
        'totalCountTags' => $totalCountTags,
        'data2' => $data2
    ]);
}
}
