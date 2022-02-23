@extends('layout')
@section('main')
<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactanos</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Dirección</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Nuestro Email</h3>
              <p>info@example.com<br>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>LLamanos</h3>
              <p>+593 978 7667 62<br>+1 6678 254445 41</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="Tu Nombre" id="Tu Nombre" placeholder="Tu Nombre" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="Tu Correo" id="Tu Correo" placeholder="Tu Correo" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="Asunto" id="Asunto" placeholder="Asunto" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="Mensaje" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ah sido enviado, Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->


@endsection