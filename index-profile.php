<?php
require_once 'model/Profile.php';
require_once 'view/admin/header.php';
require_once 'helper/Helpers.php';

$helper = new Helpers();
$data = new Profile();
$profile = $data->getOne(1);

if(isset($_POST['submit'])){
    $form = [
        'name' => $_POST['name'],
        'vision' => $_POST['vision'],
        'mission' => $_POST['mission'],
        'history' => $_POST['history'],
        'address' => $_POST['address'],
    ];

    $news = $data->update($form, 1);
    if ($news) {
        echo '<script>window.location.href = "index-news.php";</script>';
    }
}

?>

<div class="container-fluid">
    <div class="align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Profile Desa</h1>
        <p>Isi data berikut</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Nama Desa</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $profile['name']?>">
                </div>
                <div class="form-group">
                    <label for="vision">Visi</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="vision" name="vision" value="<?= $profile['vision']?>">
                </div>
                <div class="form-group">
                    <label for="mission">Misi</label> <small class="text-danger">*</small>
                    <textarea class="form-control" id="mission" name="mission" rows="3"><?= $profile['mission']?></textarea>
                </div>
                <div class="form-group">
                    <label for="history">Sejarah</label> <small class="text-danger">*</small>
                    <textarea class="form-control" id="history" name="history" rows="3"><?= $profile['history']?></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="address" name="address" value="<?= $profile['address']?>">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php 
require_once 'view/admin/footer.php';
?>