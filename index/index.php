
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joyeria</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<script type="text/javascript">
  function ConfirmCloseSesion()
  {
    var respuesta = confirm("Estas seguro que desea Cerrar Sesión?");
    if(respuesta==true)
    {
      return true
    }else{
      return false
    }
  }
</script>

<body>
    <header>
    <?php 
      include "../CRUD/conexion_nueva.php";
      include "../CRUD/controlador.php";
    ?>
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
                <?php
                if(!empty($_SESSION["id"])){
                  echo $_SESSION["name"];
                }else{
                  echo "Inicie Sesion";
                }
                ?>
                <a href="#"><img src="../img/user-solid.svg" data-bs-toggle="modal" data-bs-target="#exampleModal" alt=""></a>
                <a href=""><img src="../img/heart-solid.svg" alt=""></a>
                <a href=""><img src="../img/basket-shopping-solid.svg" alt=""></a>
                <a onclick="return ConfirmCloseSesion()" href="../CRUD/controlador_cerrar_sesion.php"><img src="../img/arrow-right-from-bracket-solid.svg" alt=""></a>
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
                        <a class="navbar-brand" href="../nosotros/nosotros.php">Nosotros</a>
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

    <main class="main">
        <div class="contenedor-top">
            <div class="card-top">
                <img src="../img/RIALTO_800x_19dca05d-515e-4048-89eb-e8d83f322bec.webp" alt="">
                <p id="diamante">Diamantes de Laboratorio</p>
                <a href="">Conocer</a>
            </div>
            <div class="card-top">
                <img src="../img/Captura_de_Pantalla_2022-07-14_a_la_s_11.59.54.webp" alt="">
                <p>Todo Joyas</p>
                <a href="">Ver todo acá</a>
            </div>
            <div class="card-top">
                <img src="../img/PERLAS8MM_89dc3f2c-6b54-4410-b5d2-898b9943ce56.webp" alt="">
                    <p>Para regalar</p>
                    <a href="">Comprar ahora</a>
            </div>
        </div>

        <div class="contenedor-simbolo">
            <div class="simbolo-img">
                <img src="../img/TEST_EP1_MH_panthere_c_clp_campaign_2023.jpg.scale.1920.high.webp" alt="">
            </div>
            <div class="simbolo-text">
                <h3>Un poderoso simbolo de estilo</h3>
                <p>La silueta, las asas, los fuelles: todo está estructurado. Este enfoque minimalista sirve de 
                estuche para el cierre, una banda perfilada con una cabeza de pantera gráfica,creada en estrecha 
                colaboración entre el estudio de creación y los escultores de Alta Joyería de la Maison.</p>
            </div>
        </div>

        <div class="contenedor-servicios">
            <h1>Los servicios exclusivos de Desert Center</h1>
            <div class="contenedor-servicios-box">
                <div class="servicios-box">
                    <img src="../img/1_reassurance_icon.webp" alt="">
                    <p>Envío Gratuito</p>
                </div>
                <div class="servicios-box">
                    <img src="../img/2_reassurance_icon.webp" alt="">
                    <p>Devolución y cambio gratuitos</p>
                </div>
                <div class="servicios-box">
                    <img src="../img/4_reassurance_icon.webp" alt="">
                    <p>Contacto</p>
                </div>
                <div class="servicios-box">
                    <img src="../img/5_reassurance_icon.webp" alt="">
                    <p>Personalice su creación</p>
                </div>
            </div>
        </div>

        <div class="img-fade">
            <img class="w-100" src="../img/TEST_MP1_MH_NEL_panthere_c_clp_slide_04.jpg.scale.1600.800.high.webp" alt="">
        </div>

        <div class="contenedor-instagram">
            <div class="instagram-images">
                <img src="../img/mujer-modelo-mostrando-anillos-de-plata-con-un-poc-upscaled.png" alt="">
                <img src="../img/mujer-modelo-mostrando-collar-de-plata-upscaled.png" alt="">
                <img src="../img/manos-con-anillos-de-plata-azulados-upscaled.png" alt="">
            </div>
            <div class="instagram-text  mx-4 d-flex text-center">
                <h4 class="p-2">Síguenos en Instagram</h1>
                <img src="../img/instagram.png" class="w-50" alt="">
            </div>
        </div>

        

        <div class="contenedor-simbolo">
            <div class="simbolo-text">
                <h3>La analogía de los diamantes</h3>
                <p>La forma, los detalles, el diseño: todo está meticulosamente planeado. Esta aproximación minimalista actúa como envoltura para el cierre,
                una banda adornada con una icónica cabeza de pantera, resultado de una estrecha colaboración entre el equipo de diseño y los artesanos de Alta Joyería de la Casa.</p>
            </div>
            <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade d-flex w-100" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="1500">
                    <img src="../img/imagenes-de-joyeria-de-plata-collares-y-anillos-pa-upscaled (1).png" class="d-flex w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="../img/imagenes-de-joyeria-de-plata-collares-y-anillos-pa-upscaled (2).png" class="d-flex w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="../img/imagenes-de-joyeria-de-plata-collares-y-anillos-pa-upscaled (3).png" class="d-flex w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
            
        </div>

        <div class="container d-lg-flex">
            <a class="btn btn-primary mx-auto" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                Ver Ofertas
              </a>
              
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filtros</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>
                    Ofertas de hasta un 75% de descuento si compras entre el 12 y el 28 de octubre.
                </div>
                  <ul class="list-group">
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                      <label class="form-check-label" for="firstCheckbox">75 %</label>
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                      <label class="form-check-label" for="secondCheckbox">50 %</label>
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                      <label class="form-check-label" for="thirdCheckbox">30 %</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
                        <label class="form-check-label" for="firstRadio">Anillos</label>
                      </li>
                      <li class="list-group-item">
                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                        <label class="form-check-label" for="secondRadio">Collares</label>
                      </li>
                      <li class="list-group-item">
                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
                        <label class="form-check-label" for="thirdRadio">Bolsos</label>
                      </li>
                  </ul>
                </div>
              </div>
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
</body>
</html>