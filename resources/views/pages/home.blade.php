@extends('layout')
@section('section_top')
@include("sections.hero_section")
@endsection
@section('main')
    <!-- ======= Services Section ======= -->
  <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Servicios</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a href="">Página Web</a></h4>
            <p class="description">En la actualidad, es imprescindible que una empresa u
              organización tenga presencia
              en la web. JIVSoft brinda a sus clientes
              la mejor experiencia con una
              atractiva aplicación web,
              desde la planificación y
              diseño de su sitio web, hasta
              la creación y mantenimiento
              del mismo.
              </p>
              
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-phone-vibrate"></i></div>
            <h4 class="title"><a href="">Aplicaciones Móviles</a></h4>
            <p class="description">JIVSoft te ofrece soluciones
              profesionales, creativas, desarrolladas a medida para
              dispositivos móviles; desde
              el diseño conceptual, programación y publicación de las
              aplicaciones en las correspondientes tiendas de distribución, con cuál podrás acceder a un mercado en constante crecimiento.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-laptop"></i></div>
            <h4 class="title"><a href="">Sistemas a Medida</a></h4>
            <p class="description">JIVSoft le ofrece sistemas 100% personalizados, que cubran
              las necesidades de cada negocio. Somos una empresa especializada en programación de plataformas y aplicaciones web
              administrables, estables y escalables.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-person-workspace"></i></div>
            <h4 class="title"><a href="">Asesoría Tecnológica</a></h4>
            <p class="description">Nuestros profesionales son
              capaces de asesorarle con
              las mejores opciones a implementar para todo tipo de
              empresas, pymes y autónomos, que permita conseguir
              una buena alineación entre
              los objetivos de la organización y los sistemas a implementarse.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-facebook"></i></div>
            <h4 class="title"><a href="">Contenido para Redes Sociales</a></h4>
            <p class="description">Desarrollamos campañas y contenidos que te permiten llegar a tu grupo 
              objetivo. Manejamos y gestionamos las redes sociales con contenidos de valor para atraer y 
              generar nuevos seguidores.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-pencil-square"></i></div>
            <h4 class="title"><a href="">Creación de Identidad Visual</a></h4>
            <p class="description">Desarrollamos marcas con personalidad, conceptos creativos a la 
              vanguardia del diseño y la funcionalidad, alineados a tus objetivos para un rápido 
              posicionamiento en el mercado.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

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

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/briefcases/rayodent.png" class="img-fluid" alt="">
              <div class="briefcase-info">               
                <h4>RAYODENT</h4>
                <div class="briefcase-links">
                  <a href="/briefcase/rayodentapp" title="Más detalles"><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nuestro Equipo</h2>
          <p>En JIVSoft contamos con los mejores profesionales apasionados los cuales hacen posible la visión de su proyecto.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ing. Jessica Villacis</h4>
                <span>Gerente</span>
                <div class="social">
                  <a href="https://www.facebook.com/jessica.villacis.5" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/jessinvillacis/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/jessica-villacis-404729228/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Lic. Junior Nieves</h4>
                <span>Jefe de Marketing</span>
                <div class="social">
                  <a href="https://www.facebook.com/junioryahik.nieves" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/yeik.junior/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/junior-nieves-3910471b7/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ing. Cristina Calero</h4>
                <span>Jefe de Desarrollo</span>
                <div class="social">
                  <a href="https://www.facebook.com/cristina.calero.39/" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/cristinalcalero/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/cristina-lissette-calero-ordo%C3%B1ez/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ing. Diego Orellana</h4>
                <span>Asesor Financiero</span>
                <div class="social">
                  <a href="https://www.facebook.com/daosorellana.orellanasanchez" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/daos009/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/diego-andres-orellana-sanchez-620805a9/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Team Section -->     

    @include('sections.contact')

@endsection