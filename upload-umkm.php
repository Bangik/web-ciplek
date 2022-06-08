<?php

function upload($image_old){
    // cek jika image lama tidak kosong
    if(file_exists($image_old) && !str_contains($image_old, 'undraw-web-shop.png')){
        unlink($image_old);
    }

    $target_dir = "asset/img/umkm/";
    $target_file = $target_dir . time() . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if ($_FILES["image"]["size"] > 500000) {
        $uploadOk = 0;
        return "Gagal, File terlalu besar";
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $uploadOk = 0;
        return "Gagal, File bukan gambar";
    }

    if ($uploadOk == 0) {
        return "Gagal, File gagal diupload";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return "Gagal, File gagal diupload";
        }
    }

    return "Gagal, File gagal diupload";
}