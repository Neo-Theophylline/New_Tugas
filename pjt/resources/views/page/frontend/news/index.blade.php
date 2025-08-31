@extends('layout.frontend.app')
@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">News</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li ><a href="/news"></a>News</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>News</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic bg-danger"><img src="assets/img/gey.jpg" class="img-fluid w-100 h-100" alt=""></div>
              <div class="member-info">
                <h4>Ardner</h4>
                <span>D Sipit</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic bg-danger"><img src="assets/img/bayu.jpg" class="img-fluid w-100 h-100" alt=""></div>
              <div class="member-info">
                <h4>by U</h4>
                <span>Anti Radiasi</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic bg-danger"><img src="assets/img/eka.jpg" class="img-fluid w-100 h-100" alt=""></div>
              <div class="member-info">
                <h4>Rm Dhani</h4>
                <span>IQ 999.999.999</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

  </main>
@endsection