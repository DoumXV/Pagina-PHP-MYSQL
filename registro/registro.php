<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>

<body>
    <header>

        <div class="contenedor-header">
            <div class="soporte-cliente">
                <img src="../img/twitter.svg" alt="">
                <img src="../img/instagram.svg" alt="">
            </div>
            <div class="contenedor-logo">
                <img src="../img/bangladeshi-taka-sign-solid.svg" alt="">
                <h1 class="fw-bolder"><a href="#">esert</a></h1>
            </div>
            <div class="contenedor-user">
                <a href="#"><img src="../img/user-solid.svg" data-bs-toggle="modal" data-bs-target="#exampleModal" alt=""></a>
                <a href=""><img src="../img/heart-solid.svg" alt=""></a>
                <a href=""><img src="../img/basket-shopping-solid.svg" alt=""></a>
            </div>

              <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-black">
                    <section class="container-login">
                        <div class="form">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h1 class="title-form">Iniciar Sesión</h1>
                            <div class="form-content">
                              <?php 
                                include "../CRUD/controlador.php" 
                              ?>
                                <form action="" method="POST">
                                    <div class="form-inputs">
                                      <p class="text-form">Correo Electronico</p>
                                      <input type="email" name="email">
                                      <p class="text-form">Contraseña</p>
                                      <input type="password" name="password">
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
                                        <input type="submit" class="btn btn-primary" name="btniniciar" value="Iniciar Sesion">
                                    </div>
                                    <div class="form-register">
                                        <p>¿No tienes Cuenta?</p>
                                        <a href="../registro/registro.php">Registrate Aqui</a>
                                    </div>
            
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            </div>
        </div>
            
        </div>
        
        <div class="contenedor-navbar ps-lg-5">
            <nav class="navbar navbar-expand-lg bg-body-secondary">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse align-items-center " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto pb-md-2">
                      <li class="nav-item">
                        <a class="navbar-brand" href="index.php">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="navbar-brand" href="nosotros.php">Nosotros</a>
                      </li>
                      <li class="nav-item">
                        <a class="navbar-brand" href="#">Anillos</a>
                      </li>
                      <li class="nav-item">
                        <a class="navbar-brand" href="#">Brazaletes</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="navbar-brand dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Más
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Gafas</a></li>
                          <li><a class="dropdown-item" href="#">Collares</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Bolsos</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Plata 985..." aria-label="Search">
                      <button class="btn btn-primary" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
              </nav>
        </div>

    </header>
    <main>
        <div class="container-form">
            <h1 class="title-form">Registro</h1>
            <form class=".form" action="../CRUD/insertar.php" method="POST" id="registroForm">
                <div class="treatment">
                    <label for="treatment">Tratamiento *</label>
                    <select id="treatment" type="text" class="form-control mb-3" name="treatment">
                        <option selected>Sra.</option>
                        <option value="Sr.">Sr.</option>
                        <option value="Otro">Otro</option>
                        <option value="">Prefiero No Especificarlo</option>
                    </select>
                </div>

                <div class="name">
                    <label for="">Nombres *</label>
                    <input type="text" class="form-control mb-3" name="name">
                </div>
                <div class="last-name">
                    <label for="">Apellidos *</label>
                    <input type="text" class="form-control mb-3" name="lastname">
                </div>
                <div class="user">
                    <label for="">Usuario *</label>
                    <input type="text" class="form-control mb-3" name="user">
                </div>
                <div class="password">
                    <label for="">Contraseña *</label>
                    <input type="password" class="form-control mb-3" name="password">
                </div>
                <div class="email">
                    <label for="">Email *</label>
                    <input type="email" class="form-control mb-3" name="email">
                </div>
                <div class="adress">
                    <label for="">Direccion *</label>
                    <input type="text" class="form-control mb-3" name="adress">
                </div>
                <div class="birthday">
                    <label for="">Fecha de Nacimiento *</label>
                    <input type="date" class="form-control mb-3" name="birthday">
                </div>

                <div class="container-condiciones">
                    <input type="checkbox" value="" id="chkCondiciones" name="politica">
                    <p>
                        Tras haber leído y entendido la
                        <a href="#">Política de privacidad</a>
                        declaro ser una persona mayor de 16 años
                    </p>
                </div>

                <div class="register-button">
                    <button>Registrar</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="newsletter">
                <h4>Newsletter</h4>
                <p>Suscríbete en nuestro Newsletter y se el primero en enterarte de ofertas y novedades.</p>
                <input type="email" placeholder="Correo Electronico">
                <button>Suscribirse</button>
            </div>
            <div class="acerca mx-auto">
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
            <img src="../img/payment.png" alt="">
            <p>&copy;2023 Doublas Galleguillos</p>
        </div>
    
    </footer>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var chkCondiciones = document.getElementById('chkCondiciones');
            var formulario = document.getElementById('registroForm');

            formulario.addEventListener('submit', function (event) {
                if (!chkCondiciones.checked) {
                    alert('Debes aceptar las condiciones para registrarte.');
                    event.preventDefault(); // Evita que el formulario se envíe
                }
            });
        });
    </script>

</body>

</html>