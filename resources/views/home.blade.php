<!DOCTYPE html>
<html lang="En">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bebek Goreng H.Slamet - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Favicons -->
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: IMPERIAL DIMSUM PALCE
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+62 857-6212-9090</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Setiap hari: 09:00 - 23:00</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>Id</li>
          <li><a href="#">En</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Bebek Goreng H.Slamet</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservasi</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Selamat datang di <span>Bebek Goreng H.Slamet</span></h1>
          <h2>OK Sobat dungu</h2>
          
          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Reservasi</a>
          </div>

    
    </div>
  </section><!-- End Hero -->



  <main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Periksa Menu Lezat Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-kukus">Bebek</li>
              <li data-filter=".filter-goreng">Ayam</li>
              <li data-filter=".filter-rebus">Minuman</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-rebus">
            <img src="{{asset('img/menu/cheong-fun.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cheong fun</a><span> Rp75.000
              </span>
            </div>
            <div class="menu-ingredients">
              Rebus, Kulit tahu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="{{asset('img/menu/dimsum-ayam.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Dimsum Ayam </a><span>Rp69.000</span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Tahu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src=" {{asset('img/menu/dimsum-salmon.jpg')}}" class="menu-img" alt="">
           
            <div class="menu-content">
              <a href="#">Dimsum Salmon </a><span>Rp99.000
              </span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Lumpia
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="  {{asset('img/menu/dimsum-udang.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Dimsum Udang</a><span>Rp85.000
              </span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Pangsit
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-goreng">
            <img src="{{asset('img/menu/ebi-furai.jpg')}}" class="menu-img" alt="">
         
            <div class="menu-content">
              <a href="#">Ebi Furai</a><span>Rp70.000
               </span>
            </div>
            <div class="menu-ingredients">
              Goreng, Kulit Tepung
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-goreng">
            <img src="{{asset('img/menu/fried-wonton.jpg')}}" class="menu-img" alt="">
            
            <div class="menu-content">
              <a href="#">Fried Wonton</a><span>Rp65.000
              </span>
            </div>
            <div class="menu-ingredients">
              Goreng, Kulit Pangsit
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src=" {{asset('img/menu/hakau.jpg')}}" class="menu-img" alt="">
           
            <div class="menu-content">
              <a href="#">Hakau</a><span>Rp88.000
              </span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Pangsit
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-rebus">
            <img src=" {{asset('img/menu/hakau.jpg')}}" class="menu-img" alt="">
        
            <div class="menu-content">
              <a href="#">Kuo Tie</a><span>Rp110.000
              </span>
            </div>
            <div class="menu-ingredients">
               Rebus, Kulit Tahu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="    {{asset('img/menu/xiao -long-bao.jpg')}}" class="menu-img" alt="">
        
            <div class="menu-content">
              <a href="#">Xiao Long Bao </a><span>Rp99.000</span>
            </div>
            <div class="menu-ingredients">
              Kukus, Kulit Lumpia
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="  {{asset('img/menu/spring-roll.jpg')}}" class="menu-img" alt="">
          
            <div class="menu-content">
              <a href="#">Spring Roll</a><span>Rp75.000
              </span>
            </div>
            <div class="menu-ingredients">
               Kukus, Kulit Lumpia
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="{{asset ('img/menu/lumpia-kulit-tahu.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lumpia Kulit Tahu</a><span>Rp85.000
              </span>
            </div>
            <div class="menu-ingredients">
               Kukus, Kulit Tahu
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-goreng">
            <img src=" {{asset('img/menu/chun-juan.jpg')}}" class="menu-img" alt="">
           
              
            <div class="menu-content">
              <a href="#">Chun Juan</a><span>Rp73.000
              </span>
            </div>
            <div class="menu-ingredients">
               Goreng, Kulit Lumpia
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="  {{asset('img/menu/wan-ton.jpg')}}" class="menu-img" alt="">
          
            <div class="menu-content">
              <a href="#">Wan Ton</a><span>Rp65.000
              </span>
            </div>
            <div class="menu-ingredients">
               Kukus, Kulit Pangsit
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-kukus">
            <img src="{{asset('img/menu/mantau.jpg')}}" class="menu-img" alt="">
            
            <div class="menu-content">
              <a href="#">Mantau</a><span>Rp50.000
              </span>
            </div>
            <div class="menu-ingredients">
               Kukus, Kulit Tepung
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
    
    
    <!-- resources/views/reservasi/create.blade.php -->
    <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Reservasi</h2>
            <p>Memesan Meja</p>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="appointmentForm" action="{{ url('/reservasi') }}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf
            <div class="row">
            <div class="form-group mt-3">
                <select name="restaurant" class="form-control" id="restaurant">
                    <option value="" disabled selected>Select Restaurant</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Nomer Telepon" value="{{ old('phone') }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="date" placeholder="Tanggal" value="{{ old('date') }}">
                @error('date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="time" class="form-control @error('time') is-invalid @enderror" name="time" id="time" placeholder="Waktu" value="{{ old('time') }}">
                @error('time')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
                <input type="number" class="form-control @error('people') is-invalid @enderror" name="people" id="people" placeholder="Untuk berapa orang" value="{{ old('people') }}">
                @error('people')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" rows="5" placeholder="Message">{{ old('pesan') }}</textarea>
            @error('pesan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="sent-message" id="successMessage" style="display: none;">Permintaan pemesanan Anda telah dikirim. Kami akan menelepon kembali atau mengirim Email untuk mengonfirmasi reservasi Anda. Terima kasih!</div>
        </div>
        <div class="text-center"><button type="submit" id="submitBtn">Pesan</button></div>

        </form>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#appointmentForm').submit(function(event) {
            event.preventDefault();
            var form = $(this);
            var formData = form.serialize();

            // Disable submit button to prevent double submission
            $('#submitBtn').prop('disabled', true);

            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        $('#successMessage').text('Permintaan pemesanan Anda telah dikirim. Kami akan menelepon kembali atau mengirim Email untuk mengonfirmasi reservasi Anda. Terima kasih!').slideDown();
                        $('#errorMessage').hide();
                        form.trigger('reset');
                    } else {
                        $('#errorMessage').text(response.message || 'Ada masalah saat mengirim permintaan pemesanan. Silakan coba lagi.').slideDown();
                        $('#successMessage').hide();
                    }
                    $('#submitBtn').prop('disabled', false);
                },
                error: function(xhr, status, error) {
                    $('#errorMessage').text('Error: Gagal mengirim appointment. Mohon coba lagi.').slideDown();
                    $('#successMessage').hide();
                    $('#submitBtn').prop('disabled', false);
                }
            });
        });
    });
</script>


    <!-- ======= Contact Section ======= -->
    <!-- resources/views/home.blade.php -->

    <body>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
                <p>Kontak Kami</p>
            </div>
        </div>

        <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d126934.07225995685!2d106.66186759724219!3d-6.172276998729311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbebek%20bakar%20haji%20slamet!5e0!3m2!1sid!2sid!4v1730729447065!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container" data-aos="fade-up">
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="open-hours">
                            <i class="bi bi-clock"></i>
                            <h4>Open Hours:</h4>
                            <p>Setiap Hari:<br>09:00 - 23:00</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>oksobatdungu234@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telepon:</h4>
                            <p>+62 857-6212-9090</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="/send-contact" method="post" role="form" class="php-emaill-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="8" placeholder="Pesan" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading" style="display: none;">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message" style="display: none;">Pesan Anda telah dikirim. Terima kasih!</div>
                        </div>
                        <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                    </form>
                    
                    <!-- Konten email -->
                    @if (session('success'))
                        <div class="mt-4">
                            <h3>Kontak Baru dari {{ old('name') }}</h3>
                            <p><strong>Email:</strong> {{ old('email') }}</p>
                            <p><strong>Subjek:</strong> {{ old('subject') }}</p>
                            <p><strong>Pesan:</strong> {{ old('message') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    
    <!-- Tambahkan script JavaScript atau lainnya di sini -->
</body>
<!-- End Contact Section -->

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>IMPERIAL DIMSUM PALACE</h3>
              <p>
                Jl. Meruya Selatan., Kec. Kembangan, Jakarta,  <br>
                Daerah Khusus Ibukota Jakarta 11650<br><br>
                <strong>Phone:</strong> +62 857-6212-9090
                <br>
                <strong>Email:</strong> oksobatdungu234@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

 
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Imperial Dimsum Palace</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">AtillaKD</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>