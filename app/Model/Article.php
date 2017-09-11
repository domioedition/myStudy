<?php

namespace Model;

class Article
{

    protected $id;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getArticleFromDB($id)
    {
        $sql = "SELECT * FROM articles WHERE id = $id";
        return $sql;
    }

}