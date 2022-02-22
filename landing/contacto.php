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

    <h1>Contacto</h1>
    <img src="./img/destacada3.jpg" alt="Imagen Casa en Venta en la Playa">

    <main class="container-header contenido-centrado formulario">
        <h2>Llena el Siguiente Formulario</h2>
        <form action="">
            <fieldset>
                <legend> Información Personal </legend>
                <label for="formNombre">Nombre:</label>
                <input type="text" id="formNombre" placeholder="Apellido1 Apellido2 Nombre1 Nombre2" value="">

                <label for="formEmail">Correo Electrónico</label>
                <input type="email" id="formEmail" placeholder="correo@ejemplo.com" required>

                <label for="formTelefono">Teléfono</label>
                <input type="tel" id="formTelefono" placeholder="Su teléfono" required>

                <label for="formMensaje">Mensaje</label>
                <textarea id="formMensaje"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información Sobre Propiedad</legend>

                <label for="formOpciones">¿Vende o Compra?</label>
                <select id="formOpciones">
          <option value="opInical" disabled selected>Seleccione una Opción</option>
          <option value="opVendo">Vendo</option>
          <option value="opCompro">Compro</option>
        </select>

                <label for="formPresupuesto">Presupuesto</label>
                <input type="number" id="formPresupuesto" min="0" max="30" step="5">

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <label for="">¿Cómo desea ser contactado?</label>
                <div class="forma-contacto">
                    <label for="optTelefono">Telefono</label>
                    <input type="radio" name="formContacto" id="optTelefono">

                    <label for="optE-Mail">E-Mail</label>
                    <input type="radio" name="formContacto" id="optE-Mail">
                </div>

                <label for="">Si eligió teléfono, elija la fecha y la hora:</label>

                <label for="formFecha">Fecha de llamada:</label>
                <input type="date" id="formFecha">

                <label for="formHora">Hora de llamada:</label>
                <input type="time" id="formHora" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar Formulario" class="boton boton-verde">
        </form>


    </main>


    <?php include('./assets/footer.php'); ?>




</body>

</html>