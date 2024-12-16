<?php
    // establesco conexion 
    require_once '../../src/config/dataBase.php';
    include_once '../../src/includes/headerVistas.php';
    $db=conexion();


    // guardar mensajes de campos vacios
    // save messages from empty fields 
    $error=[];

    // verficar metodo post
    // verifict metoh post 
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        
        // guardar los datos del formulario
        // save from data
        $titulo= $_POST["titulo"];
        $precio= $_POST["precio"];
        $descripcion= $_POST["descripcion"];
        $habitaciones= $_POST['habitaciones'];
        $serviciosHigienicos= $_POST['serviciosHigienicos'];
        $estacionamiento= $_POST['estacionamiento'];
        $vendedor_id= $_POST['vendedor'];

        // consulta preparadas sql para crear nueva propiedad 
        // sql query prepared  to create new propiety
        $queryNewPropiety= $db ->prepare("INSERT INTO propiedad (titulo, precio,descripcion,habitaciones, serviciosHigienicos,estacionamiento,vendedor_id) VALUES (?, ?,?,?,?,?,?)");
        // vincular 
        $queryNewPropiety->bind_param("sdsiiii",$titulo,$precio,$descripcion,$habitaciones,$serviciosHigienicos,$estacionamiento,$vendedor_id);
        // ejecuto
        $queryNewPropiety->execute();
        if ($queryNewPropiety->affected_rows>0) {
            echo 'agredado correctamente';
        }else{
            echo 'error';
        }
        // cierro la consulta
        $queryNewPropiety->close();
    }
    $db->close();
?>
    <main class="contenedor seccion">
        <h2>crear página</h2>
        <a href="/admin/index.php" class="boton boton-verde">Volver  </a>
   

    <form action="/admin/propiedades/crear.php" class="formulario" method="POST">
        <fieldset>
            <legend>Información general</legend>
            
            <label for="titulo">Nombre de la propiedad: </label>
            <input type="text" name="titulo" id="titulo" placeholder="Nombre de la propiedad">

            <label for="precio">Precio:</label>
            <input type="text" name="precio" id="precio" placeholder="precio">

            <label for="imagen">Imagen: </label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg , image/png">

            <label for="descripcion" class="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>

            <label for="habitaciones">habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="habitaciones">

            <label for="serviciosHigienicos">baños:</label>
            <input type="number" name="serviciosHigienicos" id="serviciosHigienicos" placeholder="servicios">

            <label for="estacionamiento">estacionamiento:</label>
            <input type="estacionamiento" name="estacionamiento" id="estacionamiento" placeholder="estacionamiento">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="vendedor">
                <option selected disabled>--vendedor--</option>
                <option value="1">Aleja</option>
                <option value="2">Artur</option>
            </select>
        </fieldset>

        <input type="submit" value="crear propiedad" class="boton boton-verde">
    </form>
    </main>
<?php
    include_once '../../src/includes/footer.php'
?>