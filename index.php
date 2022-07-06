<?php
require_once 'model/UmkmBusiness.php';
require_once 'model/News.php';
require_once 'model/Profile.php';
require_once 'helper/Helpers.php';
require_once 'view/layout/header.php';

$helper = new Helpers();
$profile = new Profile();
$data = new UmkmBusiness();
$dataNews = new News();
$profile = $profile->getOne(1);
$data = $data->getAll();
$dataNews = $dataNews->getAll();

?>
    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container" data-aos="fade-down">
        <h1 class="text-center text-dark">UMKM <br />Desa Kemiri, Kecamatan Panti<br />Jember</h1>
        <!-- <p class="text-center text-dark shadow-sm">Selamat datang di Website Desa Kemiri, Panti</p> -->
        <a href="#produk" class="btn btn-primary">Lihat UMKM</a>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -20 1440 320" style="margin-top: 100px;">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,224L40,202.7C80,181,160,139,240,138.7C320,139,400,181,480,186.7C560,192,640,160,720,128C800,96,880,64,960,74.7C1040,85,1120,139,1200,160C1280,181,1360,171,1400,165.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </div>
    <!-- JUMBOTRON END -->

    <!-- BERITA -->
    <section id="berita">
      <div class="container" data-aos="fade-down">
        <div class="row text-center">
          <h2 class="text-primary">BERITA</h2>
          <br />
          <p>Berikut berita terkini yang terjadi di desa</p>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <?php foreach($dataNews as $key => $news): ?>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $key ?>" <?= $key == "0" ? 'class="active" aria-current="true" aria-label="Slide "' . $key : '' ?>></button>
          <?php endforeach; ?>
        </div>
          <div class="carousel-inner">
            <?php foreach($dataNews as $key => $news): ?>
              <div class="carousel-item <?= $key == "0" ? 'active' : '' ?>">
                <a href="detail-news.php?id=<?= $news['id'] ?>">
                  <img src="<?= $news['path_image'] ?>" class="d-block w-100 rounded" alt="pembukaan" />
                  <div class="carousel-caption d-none d-md-block">
                    <h1><?= $news['title'] ?></h1>
                    <p><?= $helper->str_limit($news['description'], 50) ?></p>
                    
                  </div>
                </a>
                </div>
              <?php endforeach; ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,96L48,122.7C96,149,192,203,288,202.7C384,203,480,149,576,154.7C672,160,768,224,864,224C960,224,1056,160,1152,138.7C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- END BERITA -->

    <!-- PROFIL -->
    <section id="profil">
      <div class="container">
        <div class="row text-center" data-aos="fade-down">
          <h5 class="text-primary p-0">PROFIL</h5>
          <br />
          <h2 class="p-0">Sejarah <?= $profile['name'] ?></h2>
          <br />
          <p class="p-0">Berikut ini adalah sejarah dari <?= $profile['name'] ?></p>
        </div>
        <div class="clearfix" data-aos="fade-down">
          <img src="./asset/img/undraw-town.png" class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid rounded" alt="Desa Kemiri" />
          <p>Desa Kemiri adalah sebuah desa di bagian barat kota Jember tepatnya lereng Gunung Argopuro yang terkenal dengan air terjun tancak. Letak Desa Kemiri sangat strategis dengan hawa yang sejuk menjadikan salah satu destinasi tujuan wisata di Jawa Timur. Berlatar Gunung Argopuro, Desa kami hadir dengan semangat pluralitas, kebersamaan, kegotongroyongan, pelestarian lingkungan hidup dengan bertumpu pada kearifan lokal.</p>
        </div>

        <div class="row" data-aos="zoom-in">
          <!-- Force next columns to break to new line at md breakpoint and up -->
          <div class="w-100 d-none d-md-block"></div>

          <div class="col col-sm-3 text-center">
            <h1><i class="bi bi-person-fill"></i></h1>
            <h2 class="m-0">9026</h2>
            <p>Penduduk</p>
          </div>
          <div class="col col-sm-3 text-center">
            <h1><i class="bi bi-person-fill"></i></h1>
            <h2 class="m-0">2840</h2>
            <p>Kepala Keluarga</p>
          </div>
          <div class="col col-sm-3 text-center">
            <h1><i class="bi bi-person-fill"></i></h1>
            <h2 class="m-0">4375</h2>
            <p>Laki-Laki</p>
          </div>
          <div class="col col-sm-3 text-center">
            <h1><i class="bi bi-person-fill"></i></h1>
            <h2 class="m-0">4651</h2>
            <p>Perempuan</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,160L40,165.3C80,171,160,181,240,160C320,139,400,85,480,80C560,75,640,117,720,112C800,107,880,53,960,48C1040,43,1120,85,1200,96C1280,107,1360,85,1400,74.7L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- END PROFIL -->

    <!-- VISI MISI -->
    <section id="visimisi">
      <div class="container">
        <div class="row text-center" data-aos="fade-down">
          <h5 class="text-primary">PROFIL</h5>
          <br />
          <h2>Visi dan Misi</h2>
          <br />
          <p>Pemerintah Desa Kemiri</p>
        </div>

        <div class="card text-center mb-3" data-aos="zoom-in">
          <div class="card-header"><h5>Visi</h5></div>
          <div class="card-body">
            <p class="card-text">“RAHMAT” Menjadikan Masyarakat Kemiri yang Religius, Aman, Harmonis, Maju, Adil dan Tertib guna mewujudkan Desa Kemiri kearah yang lebih baik</p>
          </div>
        </div>
        <div class="card" data-aos="zoom-in">
          <div class="card-header text-center"><h5>Misi</h5></div>
          <div class="card-body">
            <ol>
              <li>Menjunjung tinggi nilai – nilai Pancasila dalam mengembangkan kehidupan bermasyarakat.</li>
              <li>Mewujudkan dan mendorong terjadinya usaha-usaha kerukunan antar umat beragama warga masyarakat dalam suasana saling menghargai dan menghormati.</li>
              <li>Mengembangkan kehidupan masyarakat untuk terwujudnya tatanan masyarakat yang taat kepada peraturan perundang-undangan dalam rangka meningkatkan kehidupan masyarakat yang aman, tertib, tentram dan damai serta meningkatakan persatuan dan kesatuan dalam wadah negara kesatuan Republik Indonesia.</li>
              <li>Terwujudnya peningkatan kualitas kehidupan masyarakat yang ditandai terpenuhinya kebutuhan pangan, sandang, papan, kesehatan, pendidikan, dan lapangan kerja.</li>
              <li>Membangun dan meningkatkan hasil pertanian dengan jalan penataan pengairan, perbaikan jalan sawah / jalan usaha tani, pemupukan, dan pola tanam yang baik. </li>
              <li>Meningkatkan kapasitas warga masyarakat dalam berbagai aspek kehidupan sosial dan ekonomi untuk menuju kemandirian dan kesejahteraan. </li>
              <li>Peningkatan pelayanan akses pendidikan dan kesehatan. </li>
              <li>Pengembangan sektor pertanian dan perdagangan. </li>
              <li>Menumbuh-kembangkan usaha kecil dan menengah dalam perwujudan pengentasan kemiskinan melalui pemberdayaan ekonomi masyarakat yang berdaya saing tinggi. </li>
              <li>Peningkatan sarana dan prasarana lingkungan desa. </li>
              <li>Mengembangkan potensi desa dalam rangka perwujudan peningkatan sektor ekonomi. </li>
              <li>Membangun dan mendorong usaha-usaha untuk pengembangan dan optimalisasi sektor pertanian, perkebunan, peternakan, dan perikanan, baik tahap produksi maupun tahap pengolahan hasilnya. </li>
              <li>Meningkatkan kemajuan dan kemandirian melalui penyelenggaraan otonomi desa yang bertanggung jawab dan didukung dengan penyelenggaran pemerintahan yang bersih, transparan, profesional dan akuntabel. </li>
            </ol>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,64L48,101.3C96,139,192,213,288,208C384,203,480,117,576,106.7C672,96,768,160,864,186.7C960,213,1056,203,1152,192C1248,181,1344,171,1392,165.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- END VISI MISI -->

    <!-- STRUKTUR -->
    <section id="struktur">
      <div class="container">
        <div class="row text-center" data-aos="fade down">
          <h5 class="text-primary">PROFIL</h5>
          <br />
          <h2>Struktur Kantor Desa</h2>
          <br />
          <p>Struktur Kantor Desa Kemiri</p>
        </div>
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-6">
            <img src="./asset/img/bagan-desa.jpg" alt="" class="img-fluid" />
          </div>
          <div class="col-lg-6">
            <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="fade-left">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Kepala Desa</button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <img src="/asset/img/kades.jpg" alt="Kades" class="img-thumbnail" width="150" height="200">
                    <p>Baidowi</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Sekretaris Desa</button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <img src="/asset/img/sekdes.jpg" alt="Kades" class="img-thumbnail" width="150" height="200">
                    <p>Moh. Falsafah</p>
                </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Kepala Urusan</button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="acordion accordion-flush" id="accordionFlushExample-1">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-1">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-1" aria-expanded="false" aria-controls="flush-headingThree-1">Kaur Keuangan</button>
                        </h2>
                        <div id="flush-collapseThree-1" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-1">
                          <div class="accordion-body">
                            Nahrowi
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-2" aria-expanded="false" aria-controls="flush-headingThree-1">Kaur TU dan Umum</button>
                        </h2>
                        <div id="flush-collapseThree-2" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-2">
                          <div class="accordion-body">
                            Rizaq Kamal Baisi
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-3">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-3" aria-expanded="false" aria-controls="flush-headingThree-1">Kaur Perencanaan</button>
                        </h2>
                        <div id="flush-collapseThree-3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-3">
                          <div class="accordion-body">
                            Ngasari Ashar
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Kepala Seksi</button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="acordion accordion-flush" id="accordionFlushExample-2">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-21">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-21" aria-expanded="false" aria-controls="flush-headingThree-21">Kasie Pemerintahan</button>
                        </h2>
                        <div id="flush-collapseThree-21" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-2">
                          <div class="accordion-body">
                            Nanang Mashuri
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-22">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-22" aria-expanded="false" aria-controls="flush-headingThree-21">Kasie Kesejahteraan</button>
                        </h2>
                        <div id="flush-collapseThree-22" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-2">
                          <div class="accordion-body">
                            Lutfi Efendi
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-23">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-23" aria-expanded="false" aria-controls="flush-headingThree-1">Kasie Pelayanan</button>
                        </h2>
                        <div id="flush-collapseThree-23" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-2">
                          <div class="accordion-body">
                            Nurhadi
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">Kepala Dusun</button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="acordion accordion-flush" id="accordionFlushExample-3">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-31">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-31" aria-expanded="false" aria-controls="flush-headingThree-31">Kasun Kantong</button>
                        </h2>
                        <div id="flush-collapseThree-31" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-3">
                          <div class="accordion-body">
                            Hardiyono
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-32">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-32" aria-expanded="false" aria-controls="flush-headingThree-31">Kasun Delima</button>
                        </h2>
                        <div id="flush-collapseThree-32" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-3">
                          <div class="accordion-body">
                            Paidi
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-33">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-33" aria-expanded="false" aria-controls="flush-headingThree-33">Kasun Krajan</button>
                        </h2>
                        <div id="flush-collapseThree-33" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-3">
                          <div class="accordion-body">
                            Ahmad Sucipto
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-34">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-34" aria-expanded="false" aria-controls="flush-headingThree-34">Kasun Sodong</button>
                        </h2>
                        <div id="flush-collapseThree-34" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-3">
                          <div class="accordion-body">
                            Jumadi
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-35">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-35" aria-expanded="false" aria-controls="flush-headingThree-35">Kasun Tenggiling</button>
                        </h2>
                        <div id="flush-collapseThree-35" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-3">
                          <div class="accordion-body">
                            Irchas Akbar
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-36">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-36" aria-expanded="false" aria-controls="flush-headingThree-36">Kasun Danci</button>
                        </h2>
                        <div id="flush-collapseThree-36" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-3">
                          <div class="accordion-body">
                            Ahmad Fauzi
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">Badan Permusyawaratan Desa</button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="acordion accordion-flush" id="accordionFlushExample-4">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-41">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-41" aria-expanded="false" aria-controls="flush-headingThree-41">Ketua</button>
                        </h2>
                        <div id="flush-collapseThree-41" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-4">
                          <div class="accordion-body">
                            Muhammad Muhlis, S.Pd.I
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-42">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-42" aria-expanded="false" aria-controls="flush-headingThree-41">Wakil Ketua</button>
                        </h2>
                        <div id="flush-collapseThree-42" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-4">
                          <div class="accordion-body">
                            Syamsul Arifin, S.Pd
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree-43">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree-43" aria-expanded="false" aria-controls="flush-headingThree-43">Sekretaris</button>
                        </h2>
                        <div id="flush-collapseThree-43" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample-4">
                          <div class="accordion-body">
                            Siti A'isyah, S.Pd
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="mt-4">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L40,106.7C80,85,160,43,240,42.7C320,43,400,85,480,133.3C560,181,640,235,720,256C800,277,880,267,960,240C1040,213,1120,171,1200,154.7C1280,139,1360,149,1400,154.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- END STRUKTUR -->

    <!-- PETA -->
    <section id="peta">
      <div class="container">
        <div class="row text-center" data-aos="fade-down">
          <h5 class="text-success">PROFIL</h5>
          <br />
          <h2>Peta Desa Kemiri</h2>
          <br />
          <p>Berikut ini adalah peta dari desa Kemiri</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5122.267177852517!2d113.63282885013409!3d-8.121019100009654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6933c7c89bfef%3A0x4701c8e7016b98ab!2sBalai%20Desa%20Kemiri!5e0!3m2!1sid!2sid!4v1657067912963!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" data-aos="fade-down"></iframe>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,96L34.3,112C68.6,128,137,160,206,154.7C274.3,149,343,107,411,112C480,117,549,171,617,192C685.7,213,754,203,823,186.7C891.4,171,960,149,1029,165.3C1097.1,181,1166,235,1234,256C1302.9,277,1371,267,1406,261.3L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- END PETA -->

    <!-- PRODUK -->
    <section id="produk">
      <div class="container">
        <div class="row text-center" data-aos="fade-down">
          <div class="col-12">
            <h2 class="text-primary p-0">Berbagai Macam UMKM Desa Kemiri</h2>
            <br />
            <input class="form-control form-control-lg mb-4" id="input-search" placeholder="Ketik nama UMKM untuk mencari...">
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="data-umkm">
          <?php
            foreach ($data as $umkm):
          ?>
          <div class="col">
            <div class="card h-100" data-aos="zoom-in">
              <img src="./<?= $umkm['path_image'] ?>" alt="UMKM" class="img-fluid" />
              <div class="card-body">
                <h5 class="card-title"><?= $umkm['name'] ?></h5>
                <p class="card-text"> <?= $umkm['address'] ?> </p>
                <p><strong>Pemilik : <?= $umkm['owner'] ?></strong></p>
                <a href="<?= $_ENV['APP_URL'] . '/detail-umkm.php?id=' . $umkm['id'] ?>" class="btn btn-primary">Info UMKM</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,256L40,245.3C80,235,160,213,240,213.3C320,213,400,235,480,256C560,277,640,299,720,266.7C800,235,880,149,960,144C1040,139,1120,213,1200,240C1280,267,1360,245,1400,234.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- END PRODUK -->

    <!-- My JS -->
    <script>
      $(document).ready(function() {

        function loadData(dataObject){
          let html = '';
          if(!jQuery.isEmptyObject(dataObject)){
            dataObject.map((i) => {
              html += `
              <div class="col">
                <div class="card h-100" data-aos="zoom-in">
                  <img src="./asset/img/undraw-web-shop.png" alt="UMKM" class="img-fluid" />
                  <div class="card-body">
                    <h5 class="card-title">${i.name}</h5>
                    <p class="card-text"> ${i.address} </p>
                    <p><strong>Pemilik : ${i.owner}</strong></p>
                    <a href="<?= $_ENV['APP_URL'] ?>/detail-umkm.php?id=${i.id}" class="btn btn-primary">Info UMKM</a>
                  </div>
                </div>
              </div>
              `;
            });
          }else{
            html = `
            <div class="alert alert-danger" role="alert">
              Produk tidak ditemukan
            </div>
            `;
          }

          $('#data-umkm').html(html);
        }

        $('#input-search').keyup(function() {
          var search = $(this).val();
          $.ajax({
            url: './search.php',
            type: 'POST',
            data: {
              search: search
            },
            success: function(data) {
              loadData(JSON.parse(data));
            }
          });
        });
      });
    </script>
    <?php
    require_once 'view/layout/footer.php';
    ?>
