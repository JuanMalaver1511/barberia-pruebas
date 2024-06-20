<!-- START NAVBAR SECTION -->

<header id="header" class="header-style header-section">
    <div class="container">
        <nav class="navbar">
            <a href="https://nexustech.pages.dev/" class="nav-img navbar-brand">
                <img src="Design/images/Logo.png" alt="Barbershop Logo">
            </a>
            <div class="d-flex menu-wrap align-items-center main-menu-container">
                <div class="mainmenu" id="mainmenu">
                    <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="./#home-section">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="./#about">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="./#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="./#gallery">Galería</a></li>
                    <li class="nav-item"><a class="nav-link" href="./#pricing">Precios</a></li>
                    <li class="nav-item"><a class="nav-link" href="./#contact-us">Contáctanos</a></li>
                    </ul>
                </div>
                <div class="header-btn" style="margin-left:10px">
                    <a href="appointment.php" class="btn-reserva menu-btn">Reservar una Cita</a>
                </div>
            </div>
            <a class="mob-menu-toggle">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </div>
</header>

<style>
 .header-style{
    background-color: #E24C3B;
 }
 .btn-reserva{
    border-radius: 20px ;
 }
 .btn-reserva:hover{
    background-color: #FBF3EF;
    color: #0088E0;
 }
.nav-link:hover {
    color: #FFD700 !important;
}
.nav-img{
    margin-left: -70px;
}

</style>

<div class="header-height" style="height: 80px;"></div>

<!-- END NAVBAR SECTION -->

<!-- START MOBILE NAVBAR -->

<div id="menu_mobile" class="menu-mobile-menu-container">
    <ul class="mob-menu-top">
        <li class="menu-header">
            <a href="#">MENU</a>
        </li>
        <li style="display: inline-block;">
            <a class="mob-close-toggle" style="cursor: pointer;width: 75px;">
                <i class="fas fa-times" style="color: white;"></i>
            </a>
        </li>
    </ul>
    <div class="menu-tab-div">
        <ul id="mobile-menu" class="menu">
            <li>
                <a href="index.php#home-section" class="a-mob-menu">
                    Inicio
                </a>
            </li>
            <li>
                <a href="index.php#about" class="a-mob-menu">
                    Nosotros
                </a>
            </li>
            <li>
                <a href="index.php#services" class="a-mob-menu">
                    Servicios
                </a>
            </li>
            <li>
                <a href="appointment.php" class="a-mob-menu">
                    Reserva tu Cita
                </a>
            </li>
            <li>
                <a href="index.php#gallery" class="a-mob-menu">
                    Galería
                </a>
            </li>
            <li>
                <a href="index.php#pricing" class="a-mob-menu">
                    Precios
                </a>
            </li>
            <li>
                <a href="index.php#contact-us" class="a-mob-menu">
                    Contáctanos
                </a>
            </li>

        </ul>
    </div>
</div>

<!-- END NAVBAR MOBILE -->