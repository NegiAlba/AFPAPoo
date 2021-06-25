<?php

namespace App\src\models;

class Post
{
    /**
     * Content for posts.
     *
     * @var string
     */
    private $content;

    /**
     * Creation date of posts.
     *
     * @var DateTime
     */
    private $createdAt;

    /**
     * Author of posts - Relation with User entity.
     *
     * @var int
     */
    private $author;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $dataForObj)
    {
        foreach ($dataForObj as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->{$method}($value);
            }
        }
    }

    /**
     * Get content for posts.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content for posts.
     *
     * @param string $content content for posts
     *
     * @return self
     */
    public function setContent(string $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get creation date of posts.
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set creation date of posts.
     *
     * @param DateTime $createdAt creation date of posts
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get author of posts - Relation with User entity.
     *
     * @return int
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set author of posts - Relation with User entity.
     *
     * @param int $author author of posts - Relation with User entity
     *
     * @return self
     */
    public function setAuthor(int $author)
    {
        $this->author = $author;

        return $this;
    }
}
