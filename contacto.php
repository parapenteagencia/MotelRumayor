<?php require_once 'includes/header.php'; ?>
<section class="site-hero site-hero-innerpage overlay" style="background-image: url(images/contacto/banner-principal.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">
                <div class="mb-5 element-animate">
                    <h1>CONTÁCTANOS</h1>
                    <p>¡Estamos a un mensaje de distancia!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="site-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6">
                <h2 class="mb-5">Escríbenos</h2>
                <div id="contact-form" class="wow fadeIn first">
                    <form id="contactForm" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" name="name" id="name" onfocus="this.placeholder = 'Escribe tu nombre*'" onblur="this.placeholder = 'El nombre es obligatorio*'" placeholder="Nombre completo*" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="tel" class="form-control" name="tel" id="tel" onfocus="this.placeholder = 'Escribe tu teléfono (10 digitos)*'" onblur="this.placeholder = 'El teléfono es obligatorio*'" placeholder="Teléfono (10 digitos)*" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" name="email" id="email" onfocus="this.placeholder = 'Escribe tu e-mail*'" onblur="this.placeholder = 'El e-mail es obligatorio*'" placeholder="E-mail*" required>
                                <div class="help-block with-errors text-danger"></div>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="10" onfocus="this.placeholder = 'Escribe el mensaje*'" onblur="this.placeholder = 'El mensaje es obligatorio*'" placeholder="Mensaje*" required></textarea>
                                <div class="help-block with-errors text-danger"></div>
                                <div id="msgSubmit" class="h5 text-center hidden"></div>
                                <p class="text-white">*Campos obligatorios</p>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-4">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="mb-5">Ubicación</h2>
                <div id="map" style="height: 550px;"></div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid p-0">
        <img loading="lazy" src="images/promos/promo-habitacion.jpg" class="img-fluid" alt="Promo Shots">
    </div>
</section>
<?php require_once 'includes/footer.php'; ?>