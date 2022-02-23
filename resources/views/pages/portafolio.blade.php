@extends('layout')
@section('main')
<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Portafolio</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-app">Sistemas a Medida</li>
              <li data-filter=".filter-web">Desarrollo Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Estudio Radiológico Dental</h4>
                <h4>RAYODENT</h4>
                <p>Diseño y Desarrollo Web</p>
                <div class="portfolio-links">
                <!--  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="RAYODENT"><i class="bi bi-plus"></i></a> -->
                  <!--<a href="#">http://rayodent.com/</a>-->
                <!--  <a href="portfolio-details.html" title="Link"><i class="bi bi-link"></i></a> -->
                  <a href="http://rayodent.com/" target="_blank" title="Link"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/optica1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Óptica Israel</h4>
                <h4>ÓPTICA MANGER</h4>
                <p>Sistema a Medida</p>
                <div class="portfolio-links">
                  <!--<a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="RAYODENT"><i class="bi bi-plus"></i></a> -->
                  <a href="portfolio-details.html" title="Más detalles"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/agricola1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asociación Agraria Bananera</h4>
                <h4>FINCAS DE EL ORO</h4>
                <p>Diseño y Desarrollo Web</p>
                <div class="portfolio-links">
                <!--  <a href="assets/img/portfolio/agricola1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bi bi-plus"></i></a> -->
                  <a href="http://fincasdeeloro.com.ec/" target="_blank" title="Link"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/fisio1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>FISICUL TV-Online</h4>
                <p>Diseño y Desarrollo Web</p>
                <div class="portfolio-links">
               <!--   <a href="assets/img/portfolio/fisio1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a> -->
                  <a href="https://www.fisicul.com/tv" target="_blank" title="Link"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

@endsection