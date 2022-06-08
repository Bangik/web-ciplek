<?php
require_once 'model/UmkmBusiness.php';

$data = new UmkmBusiness();
if(isset($_POST['submit'])){
    $image = '';
    if(isset($_FILES['image'])){
        $image = upload($_POST['image_old']);
        if(str_contains($image, 'Gagal')){
            $image = 'asset/img/undraw-web-shop.png';
        }
    }

    $form = [
        'name' => $_POST['name'],
        'owner' => $_POST['owner'],
        'type_of_busines' => $_POST['type_of_busines'],
        'product' => $_POST['product'],
        'license_number' => $_POST['license_number'],
        'address' => $_POST['address'],
        'location' => $_POST['location'],
        'phone_number' => $_POST['phone_number'],
        'initial_capital' => $_POST['initial_capital'],
        'income' => $_POST['income'],
        'problem' => $_POST['problem'],
        'opportunity' => $_POST['opportunity'],
        'challenge' => $_POST['challenge'],
        'path_image' => $image,
    ];

    if(!isset($_FILES['image'])){
        $form['path_image'] = 'asset/img/undraw-web-shop.png';
    }

    $umkm = $data->update($form, $_POST['id']);
    if ($umkm) {
        echo 'success';
        echo print_r($umkm);
        // echo '<script>window.location.href = "index-umkm.php";</script>';
    }
}