<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contactos</h2>
        </div>

        <div class="row">

            <div class="col-lg-6 d-flex" data-aos="fade-up">
                <a class="info-box"
                    href="https://www.google.com.ec/maps/place/3%C2%B016'45.0%22S+79%C2%B057'47.6%22W/@-3.2791647,-79.9637722,19z/data=!3m1!4b1!4m9!1m2!2m1!1sFlorida+Sector+7!3m5!1s0x0:0x5bc592cc48e5ce6d!7e2!8m2!3d-3.2791661!4d-79.9632253?hl=es">
                    <i class="bx bx-map"></i>
                    <h3>Dirección</h3>
                    <p>Machala - Ecuador</p>
                </a>
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
                <form action="/contactRegister" method="POST" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label>Nombre *</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Escriba su nombre" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Nombre de la empresa</label>
                            <input type="text" class="form-control" name="enterprise" id="enterprise"
                                placeholder="Escriba el nombre de su Empresa">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Correo electrónico *</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Escriba su correo electrónico" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Teléfono/Celular *</label>
                            <input type="phone" class="form-control" name="phone" id="phone"
                                placeholder="Escriba su Teléfono o Celular" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Asunto *</label>
                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="Escriba el Asunto" required>
                    </div>
                    <div class="form-group">
                        <label>Mensaje *</label>
                        <textarea class="form-control" name="message" rows="5" placeholder="Escriba el mensaje"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Cargando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tu mensaje ha sido enviado, Gracias!</div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Us Section -->
