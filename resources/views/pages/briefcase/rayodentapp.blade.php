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
                  <img src="/assets/img/briefcase/rayodent/ident1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/rayodent/ident2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/rayodent/ident3.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          

          <div class="col-lg-4">
            <div class="briefcase-info">
              <h3>Información del Proyecto</h3>
              <ul>
                <li><strong>Categoría</strong>: Sistema a Medida</li>
                <li><strong>Cliente</strong>: Estudio Radiológico Dental</li>
                <li><strong>Características</strong>: </li>
                <ol type="1"> 
                <li>Gestión de Doctores</li>
                <li>Gestión de Pacientes</li>
                <li>Gestión de Análisis</li>
                <li>Gestión de Radiografías</li>
                <li>Gestión Usuario y Roles</li>
                <li>Historial Clínico</li>
                <li>Reportes</li>
              </ol>
              </ul>
            </div>


            <div class="portfolio-description">
              
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

@endsection