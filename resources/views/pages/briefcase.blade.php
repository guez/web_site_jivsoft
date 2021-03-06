@extends('layout')
@section('section_top')
@include("sections.hero_section")
@endsection
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
              <img src="assets/img/briefcases/portfolio-2.png" class="img-fluid" alt="">
              <div class="briefcase-info">               
                <h4>RAYODENT</h4>
                <div class="briefcase-links">
                  <a href="/briefcase/rayodent" title="Más detalles"><i class="bi bi-plus"></i></a>
                  <a href="http://rayodent.com/" target="_blank" title="Link"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/briefcases/optica1.png" class="img-fluid" alt="">
              <div class="briefcase-info">               
                <h4>ÓPTICA MANAGER</h4>
                <div class="briefcase-links">
                  <a href="/briefcase/optica-israel" title="Más detalles"><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/briefcases/agricola1.png" class="img-fluid" alt="">
              <div class="briefcase-info">               
                <h4>FINCAS DE EL ORO</h4>
                <div class="briefcase-links">
                  <a href="/briefcase/finca-el-oro" title="Más detalles"><i class="bi bi-plus"></i></a>
                  <a href="http://fincasdeeloro.com.ec/" target="_blank" title="Link"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/briefcases/kevin.png" class="img-fluid" alt="">
              <div class="briefcase-info">               
                <h4>KEVIN LUNA REMODELING</h4>
                <div class="briefcase-links">
                  <a href="/briefcase/kevin-luna" title="Más detalles"><i class="bi bi-plus"></i></a>
                  <a href="http://klremodelingllc.com/" target="_blank" title="Link"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/briefcases/curiosity.png" class="img-fluid" alt="">
              <div class="briefcase-info">               
                <h4>CURIOSITY</h4>
                <div class="briefcase-links">
                  <a href="/briefcase/curiosity" title="Más detalles"><i class="bi bi-plus"></i></a>
                  <a href="http://curiosity.work/" target="_blank" title="Link"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

@endsection