<?php
require_once 'model/UmkmBusiness.php';
$data = new UmkmBusiness();

if(isset($_POST['search'])) {
    $keyword = $_POST['search'];
    $umkms = $data->search($keyword);
    echo json_encode($umkms);
} else {
    $umkms = $data->getAll();
    echo json_encode($umkms);
}