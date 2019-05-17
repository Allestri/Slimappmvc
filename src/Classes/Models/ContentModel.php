<?php

namespace App\Models;

Class ContentModel
{
    
    public function testContent()
    {
        $testDatas = "Hello world";
        return $testDatas;
    }
    
    public function getContent($db)
    {
        $sql = 'SELECT content FROM posts WHERE id = 1';
        $posts = $db->query($sql);
        var_dump($posts);
        return $posts->fetch();
    }
    

}