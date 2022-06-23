<?php 
require_once 'model/News.php';
require_once 'helper/Helpers.php';
require_once 'view/admin/header.php';

$helper = new Helpers();
$data = new News();
$data = $data->getAll();
?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Berita Desa Kemiri</h1>
        <a href="add-news.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i>Tambah Data Berita</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul Berita</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data as $news) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td> <img src="<?= $news['path_image']; ?>" alt="image" class="img-fluid" width="50px" height="50px"> </td>
                                <td><?= $news['title']; ?></td>
                                <td><?= $helper->str_limit($news['description'], 50); ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6s">
                                            <a href="edit-news.php?id=<?= $news['id']; ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="delete-news.php?id=<?= $news['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?');"> <i class="fa fa-trash"></i> </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php 
require_once 'view/admin/footer.php';
?>