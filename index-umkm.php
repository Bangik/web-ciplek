<?php 
require_once 'model/UmkmBusiness.php';
require_once 'view/admin/header.php';

$data = new UmkmBusiness();
$data = $data->getAll();
?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data UMKM Desa Kemiri</h1>
        <a href="add-umkm.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i>Tambah Data UMKM</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama UMKM</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($data as $umkm) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $umkm['name']; ?></td>
                                <td><?= $umkm['address']; ?></td>
                                <td><?= $umkm['phone_number']; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-6s">
                                            <a href="edit-umkm.php?id=<?= $umkm['id']; ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="delete-umkm.php?id=<?= $umkm['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?');"> <i class="fa fa-trash"></i> </a>
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