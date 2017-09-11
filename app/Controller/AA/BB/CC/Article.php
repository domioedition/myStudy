<?php

namespace Controller\AA\BB\CC;


class Article
{
    public function __construct()
    {
        echo __FILE__;
    }

    public function test()
    {
        return __CLASS__;
    }
}