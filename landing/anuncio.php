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

    <h1>Casa en Venta en la Playa</h1>


    <main class="container-header contenido-centrado">
        <img src="./img/anuncio1.jpg" alt="Imagen Casa en Venta en la Playa">
        <div class="resumen-propiedad">
            <p class="precio"> $ 3,000,000 </p>
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

        </div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique, leo vitae sodales pulvinar, odio nibh finibus mi, quis semper sem nisi et libero. Morbi facilisis sapien quam, ut eleifend erat viverra ut. Donec velit odio, fringilla eget suscipit
            faucibus, posuere non nunc. Duis lobortis semper porta. Nam leo tortor, aliquet ac odio et, finibus varius ligula. Integer mattis iaculis leo, sed pellentesque libero elementum eget. Morbi luctus porta odio, ac mollis arcu tincidunt vel. Nunc
            ipsum turpis, dictum non metus eget, tempus sagittis ex. Aliquam mattis et ipsum at pharetra.
        </p>
        <p>
            Donec pharetra elementum ligula nec elementum. Sed quis erat ac libero dapibus eleifend. Suspendisse non velit sed ligula porttitor viverra eget a velit. Nunc luctus ante et purus imperdiet tempus. Suspendisse aliquet pretium elit at tincidunt. Curabitur
            tristique, justo venenatis interdum viverra, turpis ex semper dui, nec fermentum nibh purus a leo. Vestibulum sit amet odio et libero imperdiet viverra. Morbi dictum mauris ac tincidunt vestibulum. Aliquam erat volutpat. Nunc justo massa,
            vulputate aliquet odio non, congue faucibus eros. Donec ac dui a orci pretium commodo. Phasellus facilisis ligula vel luctus efficitur. Sed consequat dictum rhoncus. Duis eu bibendum augue.
        </p>


    </main>


    <?php include('./assets/footer.php'); ?>




</body>

</html>