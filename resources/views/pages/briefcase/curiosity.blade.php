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
                  <img src="/assets/img/briefcase/curiosity/image1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/curiosity/image2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/curiosity/image3.jpg" alt="">
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
                <li><strong>Cliente</strong>: Curiosity</li>
                <li><strong>Descripción</strong>: Para este proyecto se ha creado un diseño totalmente a medida según los requisitos y funcionalidad del cliente, cuenta con multilenguaje en inglés y español. Curiosity es uma empresa que se dedica a mejorar la imagen corporativa, creando e impulsando proyectos SMM. </li>
              </ul>
            </div>


            <div class="portfolio-description">
              
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

@endsection