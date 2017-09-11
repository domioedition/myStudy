<?php

namespace Controller;

class Article
{

    public function showArticle($id)
    {
        $article = new \Model\article($id);
        return $article->getArticleFromDB($id);
    }



}
