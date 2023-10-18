<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joyeria</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <table class="tabla-nav">
            <tr>
                <th><img id="icono-navbar" src="img/icono-1.png" alt="Icono"></th>
                <th class="opcion-navbar"><a href="index.html"><h3>Inicio</h3></a></th>
                <th class="opcion-navbar"><a href="login.html"><h3>Login</h3></a></th>
                <th class="opcion-navbar"><a href="registro.html"><h3>Registro</h3></a></th>
            </tr>   
        </table>
        <br>
        <img id="banner" src="img/banner.jpeg" alt="banner">
        <?php
            include_once ("bd.php");
            Conexion::ConexionBD();
        ?>

    </header>
    <main>
        <section class="tarjetas">
            <table>
                <tr>
                    <th><img class="tarjetas-img" src="img/anillo-3.jpg" alt="anillo-1"></th>
                    <th><iframe id="youtube" src="https://www.youtube.com/embed/VTBK41OnIdw?si=SrupgmMgN002SitO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></th>
                    <th><img class="tarjetas-img" src="img/anillo-2.jpg" alt="anillo-2"></th>
                </tr>
                <tr>
                    <td><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero reprehenderit voluptatum officia numquam reiciendis ad! Quisquam voluptatem reprehenderit saepe quasi cum ipsa porro, quibusdam dolores magni expedita, eligendi perspiciatis sapiente.</p></td>
                    <td><p class="tarjetas-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero reprehenderit voluptatum officia numquam reiciendis ad! Quisquam voluptatem reprehenderit saepe quasi cum ipsa porro, quibusdam dolores magni expedita, eligendi perspiciatis sapiente.</p></td>
                    <td><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero reprehenderit voluptatum officia numquam reiciendis ad! Quisquam voluptatem reprehenderit saepe quasi cum ipsa porro, quibusdam dolores magni expedita, eligendi perspiciatis sapiente.</p></td>
                </tr>
            </table>
        </section>
        <section class="contenido">
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td class="contenido-img"><img src="img/anillo-1.jpg" alt="Imagen"></td>
                    <td class="contenido-text">
                        <h1>Joyas</h1>
                        <p>"En el mundo de la joyería, la elegancia es fundamental. Cada pieza de joyería está diseñada con meticulosa atención a los detalles y la artesanía. Los destellos de las gemas preciosas añaden un toque de lujo a cada creación. Nuestros anillos y collares, con sus diseños únicos, son la elección perfecta para quienes buscan destacar entre la multitud.
                            Nuestros relojes, con su exquisito diseño, no solo te ayudan a mantenerte puntual, sino que también son una declaración de estilo. Cada segundo está marcado con precisión, reflejando la atención inquebrantable al detalle que ponemos en nuestras creaciones."</p>
                    </td>
                </tr>
            </table>
        </section>
    </main>
    <footer>
        <section class="footer-contenido">
            <table class="tabla-servicio-cliente">
                <tr>
                    <th><h4>Servicio Al Cliente</h4></th>
                </tr>
                <tr>
                    <td>    
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime tempore at ratione cumque nam? At, repellendus pariatur consequatur ullam nulla sunt. Tenetur facere saepe similique quo, voluptas impedit veniam autem.</p>
                    </td>
                </tr>
            </table>
            <table class="tabla-contacto">
                <tr>
                    <th>Contacto</th>
                    <th>Privacidad</th>
                    <th>Redes Sociales</th>
                </tr>
                <tr>
                    <td><a href="#">Correo Electronico</a></td>
                    <td><a href="#">Politica de Cookies</a></td>
                    <td><a href="#"><img src="img/facebook.png" alt="Twitter"></a></td>
                </tr>
                <tr>
                    <td><a href="#">Cita Virtual</a></td>
                    <td><a href="#">Terminos y Condiciones</a></td>
                    <td><a href="#"><img src="img/instagram.png" alt="Twitter"></a></td>
                </tr>
                <tr>
                    <td><a href="#">Llamenos</a></td>
                    <td><a href="#">Politica </a></td>
                    <td><a href="#"><img src="img/gorjeo.png" alt="Twitter"></a></td>
                </tr>
            </table>
        </section>
        <section class="footer-copyright">
            <p>&copy;2023 Doublas Galleguillos</p>
        </section>
    </footer>
</body>
</html>