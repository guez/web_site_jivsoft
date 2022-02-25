@extends('layout')
@section('main')

 <!-- ======= Portfolio Details Section ======= -->
 <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/rayodent/image1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/rayodent/image2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/rayodent/image3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          

          <div class="col-lg-4">
            <div class="briefcase-info">
              <h3>Información del Proyecto</h3>
              <ul>
                <li><strong>Categoría</strong>: Página Web</li>
                <li><strong>Cliente</strong>: Estudio Radiológico Dental</li>
                <li><strong>Descripción</strong>: Página web con diseño responsive para el Estudio Radiológico Dental RAYODENT. Para este cliente se ha podido realizar un proyecto más amplio y global en el que se ha desarrollado un sistema web.</li>
              </ul>
            </div>


            <div class="portfolio-description">
              
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

@endsection