<?php
require_once 'model/News.php';

if(isset($_GET['id'])){
    $data = new News();
    $news = $data->getOne($_GET['id']);
    if(file_exists($news['path_image']) && !str_contains($news['path_image'], 'undraw-group-1.png')){
        unlink($news['path_image']);
    }
    $news = $data->delete($_GET['id']);
    if($news){
        header('Location: index-news.php');
    }
}