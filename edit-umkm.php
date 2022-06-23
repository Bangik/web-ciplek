<?php
require_once 'model/UmkmBusiness.php';
require_once 'view/admin/header.php';
require_once 'helper/Helpers.php';

$helper = new Helpers();
$data = new UmkmBusiness();
$umkm = $data->getOne($_GET['id']);

if(isset($_POST['submit'])){
    $image = '';
    if(isset($_FILES['image'])){
        $image = $helper->upload($_POST['image_old'], 'umkm');
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
        echo '<script>window.location.href = "index-umkm.php";</script>';
    }
}

?>

<div class="container-fluid">
    <div class="align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data UMKM</h1>
        <p>Ubah Data UMKM Desa Kemiri Kecamatan Panti</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $umkm['id'] ?>">
                <input type="hidden" name="image_old" value="<?= $umkm['path_image'] ?>">
                <div class="form-group">
                    <label for="name">Nama UMKM</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $umkm['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="owner">Nama Pemilik</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="owner" name="owner" value="<?= $umkm['owner'] ?>">
                </div>
                <div class="form-group">
                    <label for="type-of-busines">Jenis UMKM</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="type-of-busines" name="type_of_busines" value="<?= $umkm['type_of_busines'] ?>">
                </div>
                <div class="form-group">
                    <label for="product">Produk</label><small class="text-danger">*</small>
                    <input type="text" class="form-control" id="product" name="product" value="<?= $umkm['product'] ?>">
                </div>
                <div class="form-group">
                    <label for="license-number">Nomor Izin Usaha</label> <small class="text-danger">* isi "-" jika tidak ada</small>
                    <input type="text" class="form-control" id="license-number" name="license_number" value="<?= $umkm['license_number'] ?>">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="address" name="address" value="<?= $umkm['address'] ?>">
                </div>
                <div class="form-group">
                    <label for="location">Dusun</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="location" name="location" value="<?= $umkm['location'] ?>">
                </div>
                <div class="form-group">
                    <label for="phone-number">No. HP / WhatsApp</label> <small class="text-danger">* isi "-" jika tidak ada</small>
                    <input type="text" class="form-control" id="phone-number" name="phone_number" value="<?= $umkm['phone_number'] ?>">
                </div>
                <div class="form-group">
                    <label for="initial-capital">Modal Awal</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="initial-capital" name="initial_capital" value="<?= $umkm['initial_capital'] ?>">
                </div>
                <div class="form-group">
                    <label for="income">Pendapatan / Omzet</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="income" name="income" value="<?= $umkm['income'] ?>">
                </div>
                <div class="form-group">
                    <label for="problem">Kendala</label> <small class="text-danger">*</small>
                    <textarea name="problem" id="problem" cols="30" rows="10" class="form-control"><?= $umkm['problem'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="opportunity">Peluang</label> <small class="text-danger">*</small>
                    <textarea name="opportunity" id="opportunity" cols="30" rows="10" class="form-control"><?= $umkm['opportunity'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="challenge">Tantangan</label> <small class="text-danger">*</small>
                    <textarea name="challenge" id="challenge" cols="30" rows="10" class="form-control"><?= $umkm['challenge'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Gambar UMKM</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php 
require_once 'view/admin/footer.php';
?>