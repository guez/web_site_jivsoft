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
                  <img src="/assets/img/briefcase/optica/image1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/optica/image2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/optica/image3.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Información del Proyecto</h3>
              <ul>
                <li><strong>Categoría</strong>: Sistema a Medida</li>
                <li><strong>Cliente</strong>: Óptica Israel</li>
                <li><strong>Características</strong>: </li>
                <ol type="1"> 
                <li>Gestión de Pacientes</li>
                <li>Gestión Sucursales</li>
                <li>Gestión Bodegas</li>
                <li>Gestión de Productos</li>
                <li>Gestión de Proveedores</li>
                <li>Gestión Usuario y Roles</li>
                <li>Historial Clínico</li>
                <li>Facturación Electrónica</li>
                <li>Inventario</li>
                <li>Reportes</li>
                <li>Reconocimiento Facial</li>
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