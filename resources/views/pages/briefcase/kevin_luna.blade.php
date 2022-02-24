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
                  <img src="/assets/img/briefcase/house/image1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/house/image2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/assets/img/briefcase/house/image3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Información del Proyecto</h3>
              <ul>
                <li><strong>Categoría</strong>: Página Web</li>
                <li><strong>Cliente</strong>: Kevin Luna</li>
                <li><strong>Descripción</strong>: Para este proyecto se ha creado un diseño a medida en el que principalmente hacemos lucir las fotos de gran calidad de la remodelación de habitaciones, cocinas, dormitorios, baños, en un entorno de diseño elegante y moderno a la vez.
                La portada destaca por una gran fotografía delimitada por una original forma que le da estilo y personalidad a toda la página web. También un título claro y potente, que hace que la vista del visitante se dirija directamente a ella.</li>
              </ul>
            </div>


            <div class="portfolio-description">
              
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

@endsection