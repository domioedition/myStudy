<?php

$file = 'app/index.php';
if($file){
  include $file;
}else{
  echo 'File' . $file . ' not found';
}
