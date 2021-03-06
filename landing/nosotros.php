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

    <?php include('./assets/header2.php'); ?>

    <section class="container-header">
        <h2>Conoce Sobre Nostros</h2>

        <div class="contenedor-nosotros">
            <div class="imagen-nosotros">
                <img src="img/anuncio5.jpg" alt="Imagen Nosotros">
            </div>
            <div class="contenedor-descripcion-nosotros">
                <blockquote>Más de 25 años de experiencia</blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita provident reprehenderit repellendus aut dolores sed optio, delectus cumque aliquam, ad molestias officiis. Similique alias, nemo qui ullam quasi suscipit blanditiis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur illum eaque voluptatibus molestiae iste alias architecto! Quasi, illum dignissimos dolorum nulla beatae consectetur quo vitae voluptatibus asperiores. Dolore, inventore
                    doloremque?</p>
            </div>

        </div>

    </section>

    <main>
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

    </main>
    <footer class="seccion-footer">
        <div class="container-header container-footer">

            <nav class="navigation-default navigation-footer">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
                <a href="https://www.netflix.com/ec/" target="_blank">Ir a Netflix</a>
            </nav>


            <p class="copyright-footer">Todos los Derechos Reservados - 2020 &copy; </p>

        </div>
    </footer>




</body>

</html>