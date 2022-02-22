<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <!-- Aquí estoy importando en el html la fuente principal de la página web -->

    <title>Garden in House</title>
    <!-- Acá se importa las fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
    <!-- Acá importo normalize.css para normalizar los estilos a nivel de cualquier navegador -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Siempre colocar mi hoja de estilos al final -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php include('./assets/header.php'); ?>

    <section class="container-header">
        <h2>Más sobre nosotros</h2>

        <div class="iconos-nosotros">
            <div class="single-icon">
                <img src="img/icono1.svg" alt="Icono de seguridad">
                <h3 class="encabezado section">SEGURIDAD</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>

            <div class="single-icon">
                <img src="img/icono2.svg" alt="Icono de Mejor Precio">
                <h3 class="encabezado section">AL MEJOR PRECIO</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>

            <div class="single-icon">
                <img src="img/icono3.svg" alt="Icono de A Tiempo">
                <h3 class="encabezado section">A TIEMPO</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
        </div>

    </section>

    <main class="container-header">
        <h2>Casas y Departamentos en Venta</h2>

        <div class="contenedor-anuncios">

            <div class="anuncio">
                <img src="img/anuncio1.jpg" alt="Casa Anuncio Lago">

                <div class="contenido-anuncio">
                    <h3>Casa Primavera</h3>
                    <p>Lorem ips um dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <p class="precio">$ 400.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="img/icono_dormitorio.svg" alt="icono_wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="img/icono_dormitorio.svg" alt="icono_dormitorio">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/anuncio2.jpg" alt="Casa Anuncio Lujo">

                <div class="contenido-anuncio">
                    <h3>Casa Esmeralda</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p class="precio">$ 600.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="img/icono_dormitorio.svg" alt="icono_wc">
                            <p>2</p>
                        </li>
                        <li>
                            <img src="img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="img/icono_dormitorio.svg" alt="icono_dormitorio">
                            <p>1</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <a title="Casa Anuncio con Alberca" href="https://www.google.com.ec" target="_blank">
                    <img src="img/anuncio3.jpg" alt="Casa Anuncio con Alberca"></a>

                <div class="contenido-anuncio">
                    <h3>Casa Platino</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <p class="precio">$ 350.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="img/icono_dormitorio.svg" alt="icono_wc">
                            <p>2</p>
                        </li>
                        <li>
                            <img src="img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="img/icono_dormitorio.svg" alt="icono_dormitorio">
                            <p>1</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="boton boton-amarillo d-block">Ver Propiedad</a>
                </div>
            </div>

        </div>

        <div class="ver-todo">
            <a href="anuncios.html" class="boton boton-verde">Ver Todas</a>
        </div>
        <!-- Final de la seccion anuncio -->
    </main>


    <section class="seccion-contacto">
        <div class="container-header contenido-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se comunicará contigo.</p>
            <a href="contacto.html" class="boton boton-amarillo">Contáctanos</a>
        </div>
    </section>



    <?php include('./assets/footer.php'); ?>




</body>

</html>