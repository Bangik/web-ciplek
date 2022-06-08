<?php
require_once 'model/UmkmBusiness.php';

if(isset($_GET['id'])){
    $data = new UmkmBusiness();
    $umkm = $data->getOne($_GET['id']);
    if(file_exists($umkm['path_image']) && !str_contains($umkm['path_image'], 'undraw-web-shop.png')){
        unlink($umkm['path_image']);
    }
    $umkm = $data->delete($_GET['id']);
    if($umkm){
        header('Location: index-umkm.php');
    }
}