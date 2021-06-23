<?php

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
        $bddFind = 'SELECT * FROM post ORDER BY createdAt DESC';
        $result = $this->createQuery($bddFind)->fetchAll();

        foreach ($result as $data) {
            $id = $data['id'];
            $posts[$id] = $this->buildPost($data);
        }

        return $posts;
    }
}
