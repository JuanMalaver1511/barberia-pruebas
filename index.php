<!-- PHP INCLUDES -->

<?php

include "connect.php";
include "Includes/templates/header.php";
include "Includes/templates/navbar.php";

?>


<!-- HOME SECTION -->
<section class="home-section" id="home-section">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <div class="home-section-content position-relative">
        <div id="home-banner">
            <img class="d-block w-100 banner-image" src="Design/images/6437.jpg" alt="Banner">
            <div class="banner-caption position-absolute text-center text-white">
                <h3>Un Corte de Cabello para cada Ocasión</h3>
                <p>
                    Somos la mejor peluquería del Mundo, te queremos bien !!
                    <br>
                    Acá te puedes sentir muy cómodo.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    .home-section {
        overflow: hidden;
    }

    .banner-image {
        width: 100%;
        height: auto;
        object-fit: cover;
        max-height: 600px; /* Adjust the max-height as needed */
    }

    .banner-caption {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.7);
        padding: 20px 30px;
        border-radius: 10px;
        max-width: 80%;
    }

    .banner-caption h3 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .banner-caption p {
        font-size: 1.25rem;
    }

    @media (max-width: 768px) {
    .banner-image {
        width: 80%; /* Reducir el ancho de la imagen */
        height: auto;
        object-fit: cover;
        max-height: 400px; /* Ajustar la altura máxima según sea necesario */
        margin: 0 auto; /* Centrar la imagen */
    }

    .banner-caption h3 {
        font-size: 1.5rem; /* Reducir el tamaño del título */
    }

    .banner-caption p {
        font-size: 1rem; /* Reducir el tamaño del texto */
    }

    .banner-caption {
        width: 90%; /* Ocupar el ancho de la pantalla con un pequeño margen */
        max-width: 600px; /* Limitar el ancho máximo */
        margin: 0 auto; /* Centrar el texto */
        padding: 15px; /* Añadir un pequeño relleno */
    }
}

</style>




<!-- ABOUT SECTION -->

<section id="about" class="about_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about_content" style="text-align: center;">
                    <h3>Estamos para ti</h3>
                    <h2>Somos tu Barberia <br>Desde 1982</h2>
                    <img src="Design/images/7983878_204.jpg" alt="logo" class="logo">
                    <p style="color: #777">
                        Somos una barberia enfocada en nuestros clientes, antes de empezar analizamos tu fisonomía para recomendarte tu mejor corte.
                        Como siempre respetando como máxima tu criterio, tus gustos y preferencias ante todos.
                    </p>
                    <a href="#" class="btn-acerca default_btn" style="opacity: 1;">Más acerda de nosotros</a>
                </div>
            </div>
            <style>
                .btn-acerca{
                    background-color: #E24C3B;
                }
                .about_content h2{
                    color: #E24C3B;
                }
                .logo{
                    width: 200px;
                }
            </style>
            <div class="col-md-6  d-none d-md-block">
                <div class="about_img" style="overflow:hidden">
                    <img class="img1 about_img_1 animate__animated animate__backInLeft" src="Design/images/26258.jpg" alt="about-1">
                    <img class="img2 about_img_2 animate__animated animate__backInRight" src="Design/images/2149141756.jpg" alt="about-2">
                    <img class="img3 about_img_3 animate__animated animate__backInUp" src="Design/images/6437.jpg" alt="about-3">
                </div>
            </div>
            <style>
                .img1,
                .img2,
                .img3 {
                    cursor: pointer;
                    transition: transform 0.3s ease-in-out;
                }

                .img3:hover {
                    transform: scale(1.05);
                }
            </style>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->

<section class="services_section" id="services">
    <div class="container">
        <div class="section_heading">
            <h3>Somos tu Peluquería</h3>
            <h2>Nuestros Servicios</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-scissors-1"></i>
                    <h3>Cortes de Cabello</h3>
                    <p>Los mejores cortes de cabellos adaptados a la fixonomía de tu cara</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-razor-2"></i>
                    <h3>Corte de Barba</h3>
                    <p>Nos ajustamos a tu barba, te damos los mejores consejos posibles.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-brush"></i>
                    <h3>Afeitado Suave</h3>
                    <p>Incluimos un tratamiento, de cremas y balsamos que cuidan tu piel.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 padd_col_res">
                <div class="service_box">
                    <i class="bs bs-hairbrush-1"></i>
                    <h3>Mascarilla Facial</h3>
                    <p>Aplicamos los mejores tratamiento, para cuidar tu piel y humectarla</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOOKING SECTION -->

<section class="reserva book_section" id="booking">
    <div class="book_bg"></div>
    <div class="map_pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <form action="appointment.php" method="post" id="appointment_form" class="form-horizontal appointment_form">
                    <div class="book_content">
                        <h2 style="color: white;">Reserva tu Cita</h2>
                        <p style="color: #ffff;">
                            En unos sencillos pasos, solo elige la fecha <br>y podrás reservar tu cita sin problemas.
                        </p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 padding-10">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6 padding-10">
                            <input type="time" class="form-control" style="cursor: poienter;">
                        </div>
                    </div>

                    <!-- SUBMIT BUTTON -->

                    <button id="app_submit" class="btn-reserv default_btn" type="submit">
                        Reserva tu Cita
                    </button>
                </form>
            </div>
        </div>
    </div>
    <style>
        .reserva{
            background-color: #124775;
        }
        .btn-reserv{
            background: #E24C3B;
            border-radius: 10px;
            color: white;
        }
        .btn-reserv:hover{
            background: #2CAA2F;
        }

    </style>
</section>

<!-- GALLERY SECTION -->

<section class="gallery-section" id="gallery">
    <div class="section_heading">
        <h3>Somos tu Peluquería</h3>
        <h2>Nuestros Clientes Felices</h2>
        <div class="heading-line"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-1.jpg');"> </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-2.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-3.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-4.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-5.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-6.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-7.jpg');"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 gallery-column">
                <div style="height: 230px">
                    <div class="gallery-img" style="background-image: url('Design/images/portfolio-8.jpg');"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM SECTION -->

<section id="team" class="team_section">
    <div class="container">
        <div class="section_heading ">
            <h3>Somos tu Peluquería</h3>
            <h2>Nuestros Peluqueros</h2>
            <div class="heading-line"></div>
        </div>
        <ul class="team_members row">
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-1.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-2.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-3.jpg" alt="Team Member">
                </div>
            </li>
            <li class="col-lg-3 col-md-6 padd_col_res">
                <div class="team_member">
                    <img src="Design/images/team-4.jpg" alt="Team Member">
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- REVIEWS SECTION -->


<!-- PRICING SECTION  -->

<section class="pricing_section" id="pricing">

    <!-- START GET CATEGORIES  PRICES FROM DATABASE -->

    <?php

    $stmt = $con->prepare("Select * from service_categories");
    $stmt->execute();
    $categories = $stmt->fetchAll();

    ?>

    <!-- END -->

    <div class="container">
        <div class="section_heading">
            <h3>Somos tu mejor opción</h3>
            <h2>Nuestros Precios</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <?php

            foreach ($categories as $category) {
                $stmt = $con->prepare("Select * from services where category_id = ?");
                $stmt->execute(array($category['category_id']));
                $totalServices =  $stmt->rowCount();
                $services = $stmt->fetchAll();

                if ($totalServices > 0) {
            ?>

                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="price_wrap">
                            <h3><?php echo $category['category_name'] ?></h3>
                            <ul class="price_list">
                                <?php

                                foreach ($services as $service) {
                                ?>

                                    <li>
                                        <h4><?php echo $service['service_name'] ?></h4>
                                        <p><?php echo $service['service_description'] ?></p>
                                        <span class="price">$<?php echo $service['service_price'] ?></span>
                                    </li>

                                <?php
                                }

                                ?>

                            </ul>
                        </div>
                    </div>

            <?php
                }
            }

            ?>

        </div>
    </div>
</section>

<!-- CONTACT SECTION -->



<!-- WIDGET SECTION / FOOTER -->

<section class="final widget_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <p>
                        Somos tu mejor opción, nuestro mayor capital tu comodidad y satisfacción
                    </p>
                    <ul class="widget_social">
                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <h3>Dirección</h3>
                    <p>
                        Calle 90 N 23 24
                    </p>
                    <p>
                        hola@configuroweb.com
                        <br>
                        (+57) 316 243 00 81
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <h3>
                        Horarios Disponibles
                    </h3>
                    <ul class="opening_time">
                        <li>Lunes - Viernes 11:30am - 2:00 - 8:00 pm</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_widget">
                    <h3>Subscribete a nuestro contenido</h3>
                    <div class="subscribe_form">
                        <form action="#" class="subscribe_form" novalidate="true">
                            <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Tu correo...">
                            <button type="submit" class="submit">Suscríbete</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .final{
            background-color: #073468;
        }
    </style>
</section>

<!-- FOOTER  -->

<?php include "./Includes/templates/footer.php"; ?>