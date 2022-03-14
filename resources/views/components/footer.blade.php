<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>JIVSoft</h3>
            <p>
              Machala - Ecuador <br>
              <strong>Teléfono:</strong> +593 97 876 6762<br>
              <strong>Email:</strong> jivsoft@hotmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/JIVSoft" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/jivsoft_sa" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/company/jivsoft-sa/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="briefcase">Portafolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="team">Equipo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="mission">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactos">Contactos</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a>Página Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Aplicaciones Móviles</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Sistemas a Medida</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Asesoría Tecnológica</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Contenido para Redes Sociales</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>Creación de Indentidad Visual</a></li>
            </ul>
          </div>


          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="10">
            <h4>Suscríbete</h4>
            <p>Recibe ofertas, novedades y mucho más:</p>
            <form action="/contactRegisterSus" method="POST" class="php-email-form">
              @csrf
              <div class="row">
               <!--<input type="email" name="email"><input type="submit" value="Quiero Suscribirme"> -->
               <div class="col-lg-12 form-group">
                <input type="email" class="form-control" name="email" id="email"
                    placeholder="Escriba su correo electrónico" required>
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                    <div class="error-message"></div>
                        <div class="sent-message">Tu mensaje ha sido enviado, Gracias!</div>
              </div>      
                  <div class="text-center">
                    <button type="submit">Quiero Suscribirme</button>
                </div>
                
            </form>
            </div>
          </div>

        </div>
      
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>JIVSoft</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
        Designed by <a href="http://jivsoft.com/">JIVSoft</a>
      </div>
    </div>
  </footer><!-- End Footer -->
