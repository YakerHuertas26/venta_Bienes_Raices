<?php
    // establesco conexion 
    require_once '../../src/config/dataBase.php';
    include_once '../../src/includes/headerVistas.php';
    $db=conexion();


    // guardar mensajes de error de campos vacios
    // save error messages from empty fields 
    $error=[];

    // defino mis campos del fomulario 
    // i define my from flieds
        $titulo= '';
        $precio= '';
        $descripcion= '';
        $habitaciones= '';
        $serviciosHigienicos= '';
        $estacionamiento= '';
        $vendedor_id= '';
    // verficar si es metodo post
    // check if it is post method 
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

        // validación de cada campo
        // validation of each field
        if (!$titulo || !$precio || !$habitaciones || !$serviciosHigienicos || !$estacionamiento || !$vendedor_id) {
            $error[]= 'completar compo';
        }
        if (strlen($descripcion)<10) {
            $error[] = 'descripción muy corta';
        }

        // verificar si no hay errores
        // check not erros
        if (empty($error)) {
            // consulta preparadas sql para crear nueva propiedad 
            // sql query prepared  to create new propiety
            $queryNewPropiety= $db ->prepare("INSERT INTO propiedad (titulo, precio,descripcion,habitaciones, serviciosHigienicos,estacionamiento,vendedor_id) VALUES (?, ?,?,?,?,?,?)");
            // vincular 
            $queryNewPropiety->bind_param("sdsiiii",$titulo,$precio,$descripcion,$habitaciones,$serviciosHigienicos,$estacionamiento,$vendedor_id);
            // ejecuto
            $queryNewPropiety->execute();
            if ($queryNewPropiety->affected_rows>0) {
                echo 'agredado correctamente';
                $titulo= '';
                $precio= '';
                $descripcion= '';
                $habitaciones= '';
                $serviciosHigienicos= '';
                $estacionamiento= '';
                $vendedor_id= '';
            }else{
                echo 'error';
            }
            // cierro la consulta
            $queryNewPropiety->close();
        }
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
            <input type="text" name="titulo" id="titulo" placeholder="Nombre de la propiedad" value="<?php echo $titulo?>">
            <?php if (empty($titulo)&& isset($error[0])) {?> 
                <p class="error" style="color:red"><?php echo $error[0]?></p>
            <?php }?>  

            <label for="precio">Precio:</label>
            <input type="text" name="precio" id="precio" placeholder="precio" value="<?php echo $precio?>">
            <?php if (empty($precio )  && isset($error[0])) {?> 
                <p class="error" style="color:red"><?php echo $error[0]?></p>
            <?php }?> 

            <label for="imagen">Imagen: </label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg , image/png">

            <label for="descripcion" class="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion"> <?php echo$descripcion?></textarea>
            <?php if ( isset($error[1])) {?> 
                <p class="error" style="color:red"><?php echo $error[1]?></p>
            <?php }?> 
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>

            <label for="habitaciones">habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="habitaciones" value="<?php echo $habitaciones?>">
            <?php if (empty($habitaciones) && isset($error[0])) {?> 
                <p class="error" style="color:red"><?php echo $error[0]?></p>
            <?php }?> 

            <label for="serviciosHigienicos">baños:</label>
            <input type="number" name="serviciosHigienicos" id="serviciosHigienicos" placeholder="servicios" value="<?php echo $serviciosHigienicos?>">
            <?php if (empty($serviciosHigienicos)  && isset($error[0])) {?> 
                <p class="error" style="color:red"><?php echo $error[0]?></p>
            <?php }?> 

            <label for="estacionamiento">estacionamiento:</label>
            <input type="estacionamiento" name="estacionamiento" id="estacionamiento" placeholder="estacionamiento" value="<?php echo $estacionamiento?>">
            <?php if (empty($estacionamiento)  && isset($error[0])) {?> 
                <p class="error" style="color:red"><?php echo $error[0]?></p>
            <?php }?> 
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="vendedor">
                <option value="">--vendedor--</option>
                <option value="1">Aleja</option>
                <option value="2">Artur</option>
            </select>
            <?php if (empty($vendedor_id)  && isset($error[0])) {?> 
                <p class="error" style="color:red"><?php echo $error[0]?></p>
            <?php }?> 
        </fieldset>

        <input type="submit" value="crear propiedad" class="boton boton-verde">
    </form>
    </main>
<?php
    include_once '../../src/includes/footer.php'
?>