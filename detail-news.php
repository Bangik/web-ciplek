<?php
require_once 'model/News.php';
require_once 'view/layout/header.php';

$data = new News();
$news = $data->getOne($_GET['id']);

?>

<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid">
    <div class="container" data-aos="fade-down">
        <h1 class="text-center text-dark">Berita <br /> <?= $news['title'] ?> <br />Jember</h1>
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
            <h2 class="text-dark p-0"><?= $news['title'] ?></h2>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center" data-aos="fade-down">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <img src="<?= $news['path_image'] ?>" alt="img" class="img-fluid img-thumbnail">
                <p><?= $news['description'] ?></p>
            </div>
        </div>
    </div>
</section>
<!-- data end -->

<?php
require_once 'view/layout/footer.php';
?>