<?php

namespace App\src\DAO;

use App\src\models\Post;



class PostDAO extends DAO
{
    //! Post management

    public function buildPost($data)
    {
        return new Post($data);
    }

    public function findAll()
    {
        $posts = [];
        $bddFind = 'SELECT p.*, u.username FROM post AS p INNER JOIN user AS u ON p.author = u.id ORDER BY createdAt DESC';
        $result = $this->createQuery($bddFind)->fetchAll();

        foreach ($result as $data) {
            $id = $data['id'];
            $posts[$id] = $this->buildPost($data);
        }
        return $posts;
    }

    public function findByUser($username)
    {
        $posts = [];
        $bddFind = "SELECT p.*,u.username FROM post AS p INNER JOIN user AS u ON p.author = u.id WHERE u.username = '{$username}' ORDER BY createdAt DESC";
        $result = $this->createQuery($bddFind)->fetchAll();

        foreach ($result as $data) {
            $id = $data['id'];
            $posts[$id] = $this->buildPost($data);
        }

        return $posts;
    }

    public function newPost($data)
    {
        $new = 'INSERT INTO post (content,author) VALUES (:content,:author)';
        
        return $this->createQuery($new, $data);
    }
}
