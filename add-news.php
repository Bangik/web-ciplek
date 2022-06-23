<?php
require_once 'model/News.php';
require_once 'view/admin/header.php';
require_once 'helper/Helpers.php';

$helper = new Helpers();
$data = new News();
if(isset($_POST['submit'])){
    $image = '';
    if(isset($_FILES['image'])){
        $image = $helper->upload($image, 'news');
        if(str_contains($image, 'Gagal')){
            $image = 'asset/img/undraw-group-1.png';
        }
    }

    $form = [
        'title' => $_POST['title'],
        'slug' => $helper->slug($_POST['title']),
        'description' => $_POST['description'],
        'user_id' => $helper->get_user_id(),
        'path_image' => $image,
    ];

    if(!isset($_FILES['image'])){
        $form['path_image'] = 'asset/img/undraw-group-1.png';
    }

    $news = $data->insert($form);
    if ($news) {
        echo '<script>window.location.href = "index-news.php";</script>';
    }
}

?>

<div class="container-fluid">
    <div class="align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Berita</h1>
        <p>Isi data berikut</p>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Judul Berita</label> <small class="text-danger">*</small>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Isi Berita</label> <small class="text-danger">*</small>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Gambar Berita</label> <small class="text-danger">*</small>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php 
require_once 'view/admin/footer.php';
?>