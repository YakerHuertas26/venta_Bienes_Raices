<?php
    include_once '../includes/headerVistas.php'
?>


    <main class="contenedor seccion contenido-centrado">
        <h2>Contacto</h2>
        <picture>
            <img src="../../public/img/destacada3.jpg" alt="image-destacada" loading="lazy">
            <source srcset="public/img/destacada3.webp" type="image/webp">
        </picture>

        <h3>Llenar el formulario de Contacto</h3>
        <form action="" class="formulario"> 
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre">

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Email">

                <label for="telefono">Telefono</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Telefono">

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre  la propiedad</legend>
                <label for="opcion-venta-compra">Venta o Compra</label>
                <select name="venta-compra" id="venta-compra">
                    <option value="" selected disabled> --Seleccione</option>
                    <option value="venta">Venta</option>
                    <option value="compra">Compra</option>
                </select>

                <label for="precio-presupuesto">Precio o Presupuesto</label>
                <input type="number" name="precio-presupuesto" id="" placeholder="Precio - Presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>¿Cómo deseas ser contactado?</p>
                <div class="forma-contacto">
                    <label for="telefono">Teléfono</label>
                    <input type="radio" name="contacto" id="telefono" value="telefono">

                    <label for="email">Email</label>
                    <input type="radio" name="contacto" id="email" value="email">
                </div>
                    <p>Sí eligio telefono Elija la fecha</p>

                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha">

                    <label for="hora">Teléfono</label>
                    <input type="time" name="hora" id="hora" placeholder="hora" min="8:00" max="18:00">
                
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php
   include_once '../includes/footer.php'
    ?>
    
</body>
</html>