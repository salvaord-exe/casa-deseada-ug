<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible">
  <!-- Aquí estoy importando en el html la fuente principal de la página web -->

  <title>Garden in House</title>
  <!-- Acá se importa las fuentes -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap"
    rel="stylesheet">
  <!-- Acá importo normalize.css para normalizar los estilos a nivel de cualquier navegador -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Siempre colocar mi hoja de estilos al final -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  

  <!-- <header class="site-header nosotros">

    <div class="container-header contenido-header">

      <div class="container nosotros">
        <a href="/">
          <img src="img/logo.svg" alt="Logotipo de Bienes Raíces">
        </a>
        <nav class="navigation-default nosotros">
          <a href="nosotros.html">Nosotros</a>
          <a href="anuncios.html">Anuncios</a>
          <a href="blog.html">Blog</a>
          <a href="contacto.html">Contacto</a>
          <a href="https://www.google.com.ec" target="_blank">Ir a Google</a>
        </nav>
      </div>
      
    </div>
    

  </header> -->

  <?php include('./assets/header2.php'); ?>

  <main class="container-header">
    <h2>Casas y Departamentos en Venta</h2>

    <div class="contenedor-anuncios">

      <div class="anuncio">
        <img src="img/anuncio1.jpg" alt="Casa Anuncio Lago">

        <div class="contenido-anuncio">
          <h3>Casa de Lujo en el Lago</h3>
          <p>Lorem ips um dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. </p>
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
          <h3>Casa Terminados de Lujo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua.
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
        <a title "Casa Anuncio con Alberca" href="https://www.google.com.ec" target="_blank">
          <img src="img/anuncio3.jpg" alt="Casa Anuncio con Alberca"></a>

        <div class="contenido-anuncio">
          <h3>Casa con Alberca</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. </p>
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

      

      <div class="anuncio">
        <img src="img/anuncio4.jpg" alt="Casa Anuncio Lago">

        <div class="contenido-anuncio">
          <h3>Casa de Lujo en el Lago</h3>
          <p>Lorem ips um dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. </p>
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
        <img src="img/anuncio5.jpg" alt="Casa Anuncio Lujo">

        <div class="contenido-anuncio">
          <h3>Casa Terminados de Lujo</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua.
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
        <a title "Casa fuera de la ciudad" href="https://www.google.com.ec" target="_blank">
          <img src="img/anuncio6.jpg" alt="Casa fuera de la ciudad"></a>

        <div class="contenido-anuncio">
          <h3>Casa fuera de la ciudad</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. </p>
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

  
    <!-- Final de la seccion anuncio -->
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