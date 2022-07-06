<?php

class Helpers {
    public static function get_user_id() {
        if (isset($_SESSION['user_id'])) {
            return $_SESSION['user_id'];
        } else {
            return 1;
        }
    }

    public static function slug($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    public static function str_limit($text, $limit = 50, $end = '...')
    {
        if (mb_strlen($text) <= $limit) {
            return $text;
        }

        return mb_substr($text, 0, $limit) . $end;
    }

    public static function upload($image_old, $parh_dir)
    {
        // cek jika image lama tidak kosong
        if (file_exists($image_old) && !str_contains($image_old, 'asset/img/undraw-group-1.png') && !str_contains($image_old, 'asset/img/undraw-web-shop.png')) {
            unlink($image_old);
        }

        $target_dir = "asset/img/{$parh_dir}/";
        $target_file = $target_dir . time() . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if ($_FILES["image"]["size"] > 500000) {
            $uploadOk = 0;
            return "Gagal, File terlalu besar";
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
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
}