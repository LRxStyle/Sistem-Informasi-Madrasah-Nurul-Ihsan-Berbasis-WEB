<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon/favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Madrasah Nurul Ihsan</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#"><span class="primary">Madrasah N</span>urul Ihsan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link fw-bolder active" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Tentang
            </a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="tentang">Tentang Kami</a></li>
              <li><a class="dropdown-item" href="tim">Tim B4</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="kegiatan">Kegiatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder" href="kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

   <!-- carousel -->
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      @foreach ($sliders as $index => $slider)

      <div class="carousel-item {{$index === 0 ? 'active' : ''}}">
        <img src="image/{{$slider->image}}" class="d-block w-100 carousel-img" style="max-width: 75%; height: auto; margin: auto; display: flex; flex-direction: column; justify-content: center;" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>{{$slider->title}}</h5>
          <p>{{$slider->description}}
          </p>
        </div>
      </div>
      @endforeach
      
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
  <!-- end carousel -->

  <!-- tentang kami -->
  <div class="about-us mt-5">
    <div class="container">
      <div class="title-container text-center ">
        <h2 class="fw-bold">TENTANG KAMI</h2>
      </div>
      <div class="row mt-5">
        <div class="col-md-6" data-aos="fade-right">
          <h3 class="fw-bold about-us-title">
            {{$tentang->judul}}
          </h3>
          <p class="fw-bolder mt-4 tentang-us-subtitle">
            {{$tentang->subjudul}}
          </p>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <p>
            {{$tentang->deskripsi_1}}
          </p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              {{$tentang->kelebihan_1}}
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              {{$tentang->kelebihan_2}}
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              {{$tentang->kelebihan_3}}
            </li>
            <li class="list-group-item">
              <i class="fa fa-check-double primary"></i>
              {{$tentang->kelebihan_4}}
            </li>
          </ul>
          <p class="mt-2">
            {{$tentang->deskripsi_2}}
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- end tentang kami -->

  <!-- services -->
  <div class="services mt-5 bg-light py-5">
    <div class="container">
      <div class="title-container text-center">
        <h2 class="fw-bold">PROFIL</h2>
      </div>
      <p class="text-center mt-4">
        Berikut adalah profil dari guru - guru yang berada di Madrasah Nurul Ihsan
      </p>
      <div class="row mt-5">
        @foreach($profils as $profil)
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <img src="image/{{$profil->image}}" alt="" class="img-fluid" width="80">
              </div>
              <div class="card-title fw-bolder mt-4">{{$profil->title}}</div>
              <p class="card-description mt-3">
                {{$profil->description}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- end services -->

  <!-- portfolio us -->
  <div class="portfolio-us mt-5">
    <div class="container">
      <div class="title-container">
        <h2 class="text-center fw-bold">KEGIATAN</h2>
      </div>
      <div class="row mt-4">
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="mansory kegiatan-container">
            <div class="mansory-sizer"></div>
            @foreach ($kegiatans as $kegiatan)
            <div class="mansory-item m-2 kegiatan-item filter-web">
              <img src="image/{{$kegiatan->image}}" alt="" class="img-fluid" />
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end portfolio us -->

  <!-- footer -->
  <footer class="mt-5">
    <div class="footer-top bg-dark text-white p-5 ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <h4 class="fw-bold">{{$kontak->name}}</h2>
              <p>
                {{$kontak->description}}
              </p>
              <strong>Phone</strong> : <span>{{$kontak->telepon}} </span>
              <br />
              <strong>Email</strong> : <span>{{$kontak->email}} </span>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-2"></div>
          <div class="col-md-3">
            <h4 class="fw-bold">Join Our Newsletter</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="yourmail@example.com" />
                <button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">
                  Subscribe
                </button>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-down bg-darker text-white px-5 py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="copyright">
              &copy; Copyright <strong>Tim B4</strong>. All Right Reserved
            </div>
            <div class="credits">
              Design by LRxStyle
            </div>
          </div>
          <div class="col-md-5">
            <div class="social-links float-end">
              <a href="" class="mx-2">
                <i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-twitter fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-youtube fa-2x"></i>
              </a>
              <a href="" class="mx-2">
                <i class="fab fa-linkedin fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer  -->

  <!-- to top -->
  <a href="#" class="btn-to-top p-3">
    <i class="fa fa-chevron-up"></i>
  </a>
  <!-- end to top -->

  <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fontawesome/js/all.min.js"></script>
  <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>
  <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>