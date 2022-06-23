<?php
require_once 'model/UmkmBusiness.php';
require_once 'view/layout/header.php';

$data = new UmkmBusiness();
$umkm = $data->getOne($_GET['id']);

?>

<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid">
    <div class="container" data-aos="fade-down">
        <h1 class="text-center text-dark">UMKM <br /> <?= $umkm['name'] ?> <br />Jember</h1>
        <!-- <p class="text-center text-dark shadow-sm">Selamat datang di Website Desa Kemiri, Panti</p> -->
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -50 1440 320" style="margin-top: 120px;">
    <path
        fill="#e2edff"
        fill-opacity="1"
        d="M0,224L40,202.7C80,181,160,139,240,138.7C320,139,400,181,480,186.7C560,192,640,160,720,128C800,96,880,64,960,74.7C1040,85,1120,139,1200,160C1280,181,1360,171,1400,165.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
    ></path>
    </svg>
</div>
<!-- JUMBOTRON END -->

<!-- data start -->
<section id="produk">
    <div class="container mb-3">
        <div class="row text-center" data-aos="fade-down">
            <h2 class="text-dark p-0">UMKM <?= $umkm['name'] ?></h2>
            <br />
            <p class="p-0">Berikut ini adalah data UMKM <?= $umkm['name'] ?></p>
        </div>
        <div class="row" data-aos="fade-down">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Umkm</h5>
                        <p class="card-text">
                            <table class="table table-borderless">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $umkm['name'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pemilik</td>
                                    <td>:</td>
                                    <td><?= $umkm['owner'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?= $umkm['address'] ?></td>
                                </tr>
                                <tr>
                                    <td>Dusun</td>
                                    <td>:</td>
                                    <td><?= $umkm['location'] ?></td>
                                </tr>
                                <tr>
                                    <td>Produk</td>
                                    <td>:</td>
                                    <td><?= $umkm['product'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis</td>
                                    <td>:</td>
                                    <td><?= $umkm['type_of_busines'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kontak</td>
                                    <td>:</td>
                                    <td><?= $umkm['phone_number'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor Izin UMKM</td>
                                    <td>:</td>
                                    <td><?= $umkm['license_number'] ?></td>
                                </tr>
                                <tr>
                                    <td>Modal Awal</td>
                                    <td>:</td>
                                    <td><?= $umkm['initial_capital'] ?></td>
                                </tr>
                                <tr>
                                    <td>Omzet</td>
                                    <td>:</td>
                                    <td><?= $umkm['income'] ?></td>
                                </tr>
                                <tr>
                                    <td>Hambatan</td>
                                    <td>:</td>
                                    <td><?= $umkm['problem'] ?></td>
                                </tr>
                                <tr>
                                    <td>Peluang</td>
                                    <td>:</td>
                                    <td><?= $umkm['opportunity'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tantangan</td>
                                    <td>:</td>
                                    <td><?= $umkm['challenge'] ?></td>
                                </tr>
                            </table>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Foto Umkm</h5>
                        <p class="card-text">
                            <img src="<?= $umkm['path_image'] ?>" alt="<?= $umkm['name'] ?>" class="img-fluid">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- data end -->

<?php
require_once 'view/layout/footer.php';
?>