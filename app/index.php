<?php

echo 'Index_page';


spl_autoload_register(function($class){
  $prefix = '';
  $base_dir = __DIR__ . '//';

  $len = strlen($prefix);
  if(strncmp($prefix, $class, $len) !== 0){
    return;
  }
  $relative_class = substr($class, $len);
  $file = $base_dir . str_ireplace('\\', '/', $relative_class).'.php';
  if(file_exists($file)){
    require $file;
  }

});
use Controller\Article;
use Model\Article as Model;
  // include 'Controller\Article.php';
  // include 'Model\Article.php';
  // include 'Template\Article.php';
  //
  // include 'Controller\AA\BB\CC\Article.php';

$article = new Article;

echo "Article ID: ".$article->showArticle(341);

$a1 = new \Controller\AA\BB\CC\Article;
$a1->someProperty = "test1";
echo "<br>".$a1->someProperty;
echo "qwerty";
?>
