<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <div class="container-header">
            <div class="soporte-cliente">
                <img src="img/twitter.svg" alt="">
                <img src="img/instagram.svg" alt="">
            </div>
            <div class="container-logo">
                <img src="img/bangladeshi-taka-sign-solid.svg" alt="">
                <h1><a href="#">esert</a></h1>
            </div>
            <div class="container-user">
                <a href="login.php"><img src="img/user-solid.svg" alt=""></a>
                <a href=""><img src="img/heart-solid.svg" alt=""></a>
                <a href=""><img src="img/basket-shopping-solid.svg" alt=""></a>
            </div>
        </div>
        
        <div class="container-navbar">
            <nav>
                <ul class="menu-navbar">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="">Anillos</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="">Brazaletes</a></li>
                    <li><a href="">Más</a></li>
                </ul>
            </nav>
        </div>

        <div class="container-banner">
            
        </div>
    </header>
    <main class="main">
        <section class="container-login">
            <div class="form">
                <h1 class="title-form">Iniciar Sesión</h1>
                <div class="form-content">
                    <form>
                        <div class="form-inputs">
                            <p class="text-form">Correo Electronico</p>
                            <input type="email">
                            <p class="text-form">Contraseña</p>
                            <input type="password">
                        </div>
                        <div class="form-options">
                            <div class="remember-me">
                                <input type="checkbox">
                                <p>Recuérdame</p>
                            </div>
                            <div class="forgot-password">
                                <a href="#">¿Ha olvidado su contraseña?</a>
                            </div>
                        </div>
                        <div class="form-button">
                            <button>Iniciar Sesión</button>
                        </div>
                        <div class="form-register">
                            <p>¿No tienes Cuenta?</p>
                            <a href="registro.php">Registrate Aqui</a>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container-footer">
            <div class="newsletter">
                <h4>Newsletter</h4>
                <p>Suscríbete en nuestro Newsletter y se el primero en enterarte de ofertas y novedades.</p>
                <input type="email" placeholder="Correo Electronico">
                <button>Suscribirse</button>
            </div>
            <div class="acerca">
                <h4>Acerca de Nosotros</h4>
                <ul>
                    <li><a href="">Terminos y Condiciones</a></li>
                    <li><a href="">Politica de Privacidad</a></li>
                    <li><a href="">Informaciones Varias</a></li>
                    <li><a href="">Informacion de Contacto</a></li>
                </ul>
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.023629643002!2d-3.6920712739872252!3d40.45261397143391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228e23705d39f%3A0xa8fff6d26e2b1988!2sEstadio%20Santiago%20Bernab%C3%A9u!5e0!3m2!1ses!2scl!4v1697844284262!5m2!1ses!2scl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="copyright">
            <img src="img/payment.png" alt="">
            <p>&copy;2023 Doublas Galleguillos</p>
        </div>
    
    </footer>
</body>
</html>