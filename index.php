<?php
require_once 'model/UmkmBusiness.php';
require_once 'view/layout/header.php';
$data = new UmkmBusiness();
$data = $data->getAll();

?>
    <!-- JUMBOTRON -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container" data-aos="fade-down">
        <h1 class="text-center text-dark">UMKM <br />Desa Kemiri, Kecamatan Panti<br />Jember</h1>
        <!-- <p class="text-center text-dark shadow-sm">Selamat datang di Website Desa Kemiri, Panti</p> -->
        <a href="#produk" class="btn btn-primary">Lihat UMKM</a>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
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
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./asset/img/undraw-group-1.png" class="d-block w-100 rounded" alt="pembukaan" />
              <div class="carousel-caption d-sm-block p-0">
                <h6 class="m-0">Lorem Ipsum</h6>
                <p class="m-0">Lorem Ipsum</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./asset/img/undraw-group-2.png" class="d-block w-100 rounded" alt="..." />
              <div class="carousel-caption d-sm-block p-0">
              <h6 class="m-0">Lorem Ipsum</h6>
                <p class="m-0">Lorem Ipsum</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./asset/img/undraw-group-3.png" class="d-block w-100 rounded" alt="..." />
              <div class="carousel-caption d-md-block p-0">
              <h6 class="m-0">Lorem Ipsum</h6>
                <p class="m-0">Lorem Ipsum</p>
              </div>
            </div>
          </div>
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
          <h2 class="p-0">Sejarah Desa Kemiri, Kecamatan Panti</h2>
          <br />
          <p class="p-0">Berikut ini adalah sejarah dari Desa Kemiri</p>
        </div>
        <div class="clearfix" data-aos="fade-down">
          <img src="./asset/img/undraw-town.png" class="col-md-6 float-md-end mb-3 ms-md-3 img-fluid rounded" alt="Desa Kemiri" />

          <p>A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.</p>

          <p>
            As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no
            tangible information at. It simply takes up space and should not really be read.
          </p>

          <p>And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.</p>
        </div>

        <div class="row" data-aos="zoom-in">
          <!-- Force next columns to break to new line at md breakpoint and up -->
          <div class="w-100 d-none d-md-block"></div>

          <div class="col col-sm-2.5 text-center">
            <h1><i class="bi bi-person-fill"></i></h1>
            <h2 class="m-0">99.999</h2>
            <p>Penduduk</p>
          </div>
          <div class="col col-sm-2.5 text-center">
            <h1><i class="bi bi-person-fill"></i></h1>
            <h2 class="m-0">99.999</h2>
            <p>Kepala Keluarga</p>
          </div>
          <div class="col col-sm-2.5 text-center">
            <h1><i class="bi bi-person-fill"></i></h1>
            <h2 class="m-0">99.999</h2>
            <p>Anggota Keluarga</p>
          </div>
          <div class="col col-sm-2.5 text-center">
            <h1><i class="bi bi-person-fill"></i></h1>
            <h2 class="m-0">99.999</h2>
            <p>Laki Laki</p>
          </div>
          <div class="col col-sm-2.5 text-center">
            <h1><i class="bi bi-person-fill"></i></h1>
            <h2 class="m-0">99.999</h2>
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
          <p>Pemerintah desa Dukuh tahun 2021-2025</p>
        </div>

        <div class="card text-center mb-3" data-aos="zoom-in">
          <div class="card-header">Visi dan Misi</div>
          <div class="card-body">
            <h5 class="card-title">Visi</h5>
            <p class="card-text">Mencerdaskan kehidupan bangsa :v</p>
          </div>
        </div>
        <div class="card text-center" data-aos="zoom-in">
          <div class="card-header">Visi dan Misi</div>
          <div class="card-body">
            <h5 class="card-title">Misi</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet.<br />
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, tempora!<br />
              Lorem ipsum dolor sit amet consectetur adipisicing.<br />
              Lorem ipsum dolor sit amet consectetur.<br />
            </p>
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
          <p>Struktur Kantor Desa Dukuh</p>
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
                  <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Sekretaris Desa</button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Kasie Pemerintahan</button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but
                    just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
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
