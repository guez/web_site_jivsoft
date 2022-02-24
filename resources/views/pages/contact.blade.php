@extends('layout')
@section('main')
<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactos</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Dirección</h3>
              <p>Machala - Ecuador</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>jivsoft@hotmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Teléfonos</h3>
              <p>+593 97 876 6762⁣<br>+593 96 125 5112</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="Correo electrónico" id="Correo electrónico" placeholder="Correo electrónico" required>
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
                <div class="sent-message">Tu mensaje ha sido enviado, Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->


@endsection