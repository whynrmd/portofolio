@php
    $site_name = get_setting_value('_site_name');
    $jumbotron = get_section_data('JUMBOTRON');
    $about = get_section_data('ABOUT');
    $location = get_setting_value('_location');
    $site_description = get_setting_value('_site_description');

    $instagram = get_setting_value('_instagram');
    $twitter = get_setting_value('_twitter');
    $youtube = get_setting_value('_youtube');

@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portofolio</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">Portofolio Ayu</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#partner">Education</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#profile">Profile</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{ Storage::url($jumbotron->thumbnail)}}" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">{{ $jumbotron->title}}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">{{$jumbotron->content}}
        </p>
      </div>
    </header>
  </section>
  <!-- Education Section-->
  <section class="page-section portfolio" id="partner">
    <div class="container">
      <!-- Partner Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Education</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Partner Grid Items-->
      <div class="row justify-content-center">
        <!-- Partner Item 1-->
        <div class="col-lg-3 ms-auto text-center">
          <h2>Pendidikan Tinggi</h2>
          <p><strong>Universitas Negeri Padang</strong>, Pendidikan Teknik Informatika, 2021 - Sekarang</p>
      </div>
      <div class="col-lg-3 ms-auto text-center">
        <h2>Sekolah Menengah Atas </h2>
        <p><strong>SMA Negeri 9 Padang</strong> IPA, 2018 - 2021</p>
    </div>

    <div class="col-lg-3 ms-auto text-center">
        <h2>Sekolah Menengah Pertama </h2>
        <p><strong>SMP Negeri 10 Padang</strong>, 2015 - 2018</p>
    </div>

    <div class="col-lg-3 ms-auto text-center">
        <h2>Pendidikan Dasar</h2>
        <p><strong>SD Negeri 13 Kapalo Koto</strong>, 2009 - 2015</p>
    </div>
</section>

<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
  <div class="container">
    <!-- About Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-white">Tentang Saya</h2>
    <!-- Icon Divider-->
    <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- About Section Content-->
    <div class="row">
      <div class="col-lg-3 ms-auto text-center"><img src="{{ Storage::url($about->thumbnail)}}" class="w-75" /></div>
      <div class="col-lg-5 me-auto lead">{!! strip_tags($about->content)!!}
      </div>
    </div>
  </div>
</section>
    <!-- Footer-->
    <footer class="footer text-center" id="profile">
      <div class="container">
        <div class="row">
          <!-- Footer Location-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">
              {{$location}}
            </p>
          </div>
          <!-- Footer Social Icons-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $youtube }}"><i class="fab fa-fw fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $instagram }}"><i class="fab fa-fw fa-instagram"></i></a>
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $twitter }}"><i class="fab fa-fw fa-twitter"></i></a>
          </div>
          <!-- Footer About Text-->
          <div class="col-lg-4">
            <h4 class="text-uppercase mb-4">About Site</h4>
            <p class="lead mb-0">
              {!! strip_tags ( $site_description ) !!}
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright &copy; Ayu </small></div>
    </div>
    <!-- Partner Modals-->
    <!-- Partner Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Partner Modal - Title-->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                  <!-- Icon Divider-->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Partner Modal - Image-->
                  <img class="img-fluid rounded mb-5" src="assets/img/partner/cabin.png" alt="..." />
                  <!-- Partner Modal - Text-->
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                  <button class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fas fa-xmark fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
 