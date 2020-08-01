

<!DOCTYPE html>
<html lang="es">
<head>
    <title >HomeworkDone | Inicio</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilos -->
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">


</head>
<body>

    <!-- Ir arriba-->
    <div class="go-top">
        <span><i class="fas fa-angle-double-up"></i></span>
    </div>

    
    <!-- Menu de navegación -->
    <header id = "header">
        <nav class="menu" id="menuId" >
            <div class="logo-box">
                <h1><a href="#">Trabajos y más</a></h1>
                <span class="btn-menu"><i class="fas fa-bars"></i></span>
            </div>
            <div class="list-container" id="list-container">
                <ul class="lists">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contacto">Contacto</a></li>

                </ul>

            </div>
            
        </nav>

        <!-- IMG Header -->

        <div class="img-header">
            <div class="welcome" id="inicio">
                <h1>Bienvenidos a HomeworkDone</h1>
                <hr>
                <p>Web destinada a la realización de trabajos escolares</p>
                <button id="abajo">Ver abajo</button>
            </div>
        </div>


        <div class="skew-abajo"></div>

    </header>

    <!-- Menu de navegación -->
<main>

    <!-- Acerca de Nosotros -->
    <section class="acerca-de">
        <div class="info-container" id="nosotros">
            <h1>Acerca de nosotros</h1>
            <p>Somos un grupo de personas que queremos ayudarles a todo tipo de trabajos escolares, universitarios, proyectos, presentaciones,etc.
                Todo lo relacionado con lo anterior, déjalo en el formulario de contacto, con mucho gusto, y le daremos una respuesto lo más temprano posible.
                Por otra parte, buscamos personas interesadas en este trabajo, con el fin de crear una empresa reconocida nacionalmente.
            </p>

        <div class="about-gallery">
            <img src="img/imagen_us8.2.jpg" alt="">
            <img src="img/imagen_us2.jpg" alt="">
            <img src="img/imagen_us5.jpg" alt="">
        </div>



        </div>
    </section>

    <!-- Nuestros proyectos -->
    <section class="our-projects" id="servicios">
        <div class="skew-arriba"></div>

        <div class="deg-background"></div>

        <div class="ejeZproject">
            <div class="container-project">
                <div class="project-title">
                    <h2>Nuestros proyectos</h2>
                    <hr>
                </div>

                <div class="project-img">
                    <img src="img/theme_1.jpg" alt="">
                    <img src="img/theme_2.jpg" alt="">
                    <img src="img/theme_3.jpg" alt="">
                    <img src="img/theme_4.jpg" alt="">
                    <img src="img/proyecto1.jpg" alt="">
                    <img src="img/projecto2.jpg" alt="">
                </div>

            </div>
        </div>
        <div class="skew-abajo"></div>

    </section>

    <!-- Testimonios -->
    <section class="testimonios" id="blog">
        <div class="testimonio-title">
            <h2>Testimonios</h2>
            <hr>
        </div>

        <div class="box-testimonios">

            <div class="card-testimonio">
                <div class="card-img"><img src="img/persona_1.jpg" alt=""></div>
                <div class="testimonio-text">
                    <h4>Amanda Sánchez</h4>
                    <p>Pedí hacer un trabajo de una página web para la universidad, pues no me daba tiempo, y me lo hicieron super rápida y eficazmente</p>
                </div>
            </div>

            <div class="card-testimonio">
                <div class="card-img"><img src="img/persona_2.jpg" alt=""></div>
                <div class="testimonio-text">
                    <h4>Leo Bravo</h4>
                    <p>Trabajan de una manera rápida, sencilla y eficaz, que te pueden ayudar en cualquier momento que deseés</p>
                </div>
            </div>

            <div class="card-testimonio">
                <div class="card-img"><img src="img/persona_3.jpg" alt=""></div>
                <div class="testimonio-text">
                    <h4>Manuel Torres</h4>
                    <p>Me hicieron una presentación en powerpoint sobre un tema de tecnología y al profesor le encanto, aunque no fuera hecha por mí</p>
                </div>
            </div>

            <div class="card-testimonio">
                <div class="card-img"><img src="img/persona_4.jpg" alt=""></div>
                <div class="testimonio-text">
                    <h4>Juan Pedro Ramírez</h4>
                    <p>Muy contento con el trato hacia mí y la manera de realizar las cosas que les pides</p>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Footer-->
<footer class="footer" id="contacto">
    <div class="skew-arriba"></div>

    <div class="deg-footer"></div>

    <div class="ejeZfooter">
        <div class="footer-content">
        <div class="footer-title">
            <h2>Formulario de Contacto</h2>
            <hr>
        </div>

        <div class="formulario-content">
            <form id="formulario" method="POST" name="formulario">
                <label for="user">Nombre</label>
                <input type="text"  id="user" name="user" placeholder="Ingresa tu nombre" required>
              
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                
                <label for="mensaje">Escribe tu mensaje</label>
                <textarea name="mensaje" id="mensaje" required></textarea>

                <div class="btn" >
                    <input type="submit" name="registrarse">
                </div>
                <div class="mensaje-form">
                    <p>Escríbenos un mensaje, lo antes posible tendrás la respuesta de nosotros</p>

                </div>

            </form>
            <?php 
            include("formulario.php");
             ?>
        </div>

        <div class="footer-text">
            <p>&copy;HomeworkDone - 2020 | Todos los derechos reservados </p>
        </div>

        </div>
    </div>

     

</footer>

<!-- Scripts-->
<script src="https://kit.fontawesome.com/627d472bbb.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/app.js"></script>

</body>
</html>