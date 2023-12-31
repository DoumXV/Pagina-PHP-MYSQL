<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="nosotrosbs.css">
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
                        <a class="navbar-brand" href="../index/index.php">Inicio</a>
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
        <div class="container-nosotros">
            <div class="content-text">
                <h2>Quienes Somos</h2>
                <p>En nuestra búsqueda de la excelencia en la creación de joyas, en <span>Desert</span>, nos enorgullece combinar
                la pasión por el arte y la artesanía con un profundo amor por la belleza atemporal. Fundada por apasionados joyeros hace más de una década,
                nuestra empresa ha evolucionado para convertirse en un referente en el mundo de la joyería. Cada pieza que creamos es el resultado de una meticulosa atención al detalle,
                una profunda comprensión de las tendencias actuales y una dedicación inquebrantable a la calidad.</p>
                <img src="../img/sello-de-seguridad-para-empresa-de-joyeria-upscaled.png" alt="sello">
            </div>
            <div class="content-images">
                <div class="image-nosotros">
                    <img src="../img/joyas-en-un-fondo-color-plata-gris-con-tonos-azule-upscaled (1).png" alt="">
                    <p>Las joyas son una expresión de artesanía y estilo. Cada eslabón está hábilmente tejido a mano con plata de ley 925.</p>
                </div>
                <div class="image-nosotros">
                    <img src="../img/joyas-en-un-fondo-color-plata-gris-con-tonos-azule-upscaled.png" alt="">
                    <p>Este brazalete es una pieza de joyería excepcional que irradia elegancia y lujo.</p>
                </div>
            </div>
        </div>

        <div class="container-equipo">
            <div class="image-equipo">
                <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (1).png" alt="">
                <p>Lider Consejo Directivo</p>
            </div>
            <div class="image-equipo">
                <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled.png" alt="">
                <p>CEO</p>
            </div>
            <div class="image-equipo">
                <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (3).png" alt="">
                <p>Community Manager</p>
            </div>
            <div class="image-equipo">
                <img src="../img/foto-individual-para-foto-de-perfil-de-equipo-de-p-upscaled (2).png" alt="">
                <p>Director Marketing</p>
            </div>
        </div>

        <div class="container-articulo">
            <div class="text-articulo">
                <i>"Si tú no trabajas por tus sueños, alguien te contrará para que te trabajes por los suyos"</i>
            </div>
        </div>

        <div class="container-acordeon">
            <div class="contenedor-simbolo">
                <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade d-flex w-100 h-100" data-bs-ride="carousel">
                    <div class="carousel-inner mt-3">
                      <div class="carousel-item active" data-bs-interval="1500">
                        <img src="../img/imagenes-de-joyeria-de-plata-collares-y-anillos-pa-upscaled (1).png" class="d-flex img-fluid h-25 border-4" alt="...">
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

            <div class="accordion w-100 mt-5" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Historia
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        En nuestra joyería, la pasión por la belleza y la artesanía se fusiona para crear piezas únicas y deslumbrantes. Nuestra historia se remonta a generaciones de maestros artesanos que han perfeccionado el arte de la joyería, creando piezas que cuentan historias y perduran en el tiempo. Cada joya que creamos es el resultado de una meticulosa atención al detalle
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Colecciones
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Nuestras colecciones de joyería son un testimonio de la excelencia y la creatividad. Cada pieza es una obra maestra en sí misma, diseñada para reflejar la diversidad de gustos y estilos. Desde anillos de compromiso que simbolizan un amor eterno hasta exquisitos collares que realzan la elegancia
                    </div>
                  </div>
                </div>
                
              </div>
        </div>

        <div class="container-boxes">
            <div class="box">
                <img src="../img/21.jpg" alt="">
            </div>
            <div class="box">
                <img src="../img/22.jpg" alt="">
            </div>
            <div class="box">
                <img src="../img/23.jpg" alt="">
            </div>
            <div class="box">
                <img src="../img/24.jpg" alt="">
            </div>
            <div class="box">
                <img src="../img/25.jpg" alt="">
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