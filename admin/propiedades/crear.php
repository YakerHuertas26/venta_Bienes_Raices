<?php
    // establesco conexion 
    require_once '../../src/config/dataBase.php';
    $db=conexion();
    
    // obtener lista de vendedores
    // get list of sellers
    $queryVendedores= $db ->prepare("SELECT * FROM vendedor");
    $queryVendedores->execute();
    $resultadoVendedores= $queryVendedores->get_result();

    // guardar mensajes de error de campos vacios
    // save error messages from empty fields 
    $error=[];
    $errorImagen=[];

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
        $creacion=date('Y-m-d');

        // guardar los datos de la imagen o file
        $imagen= $_FILES['imagen'];
        // var_dump($imagen['name']);

        // echo "<pre>";
        // var_dump($_POST);
        // "</pre>";

        // // super global para ver los datos de los archivos file
        //     echo "<pre>";
        //     var_dump($_FILES);
        //     "</pre>";


        // validación de cada campo
        // validation of each field
        if (!$titulo || !$precio || !$habitaciones || !$serviciosHigienicos || !$estacionamiento || !$vendedor_id) {
            $error[]= 'completar compo';
        }
        if (strlen($descripcion)<10) {
            $error[] = 'descripción muy corta';
        }
        // validar el campo imagen 
        if (!$imagen['name']|| $imagen['error']) {
            $errorImagen[]='debe añadir una imagen';
        }
        
        // verificar si no hay errores
        // check not erros
        if (empty($error) && empty($errorImagen)) {
            // Subir los archivos

                // dirección de carpeta en la raiz
                $carpetaImagen= '../../imagenes';
                
                // verificar si no existe
                if (!is_dir($carpetaImagen)) {
                    // creo la cartpeta
                    mkdir($carpetaImagen);
                }
                exit;

            // consulta preparadas sql para crear nueva propiedad 
            // sql query prepared  to create new propiety
            $queryNewPropiety= $db ->prepare("INSERT INTO propiedad (titulo, precio,descripcion,habitaciones, serviciosHigienicos,estacionamiento,creacion,vendedor_id) VALUES (?,?,?,?,?,?,?,?)");
            // vincular 
            $queryNewPropiety->bind_param("sdsiiisi",$titulo,$precio,$descripcion,$habitaciones,$serviciosHigienicos,$estacionamiento,$creacion,$vendedor_id);
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
                $creacion=date('Y-m-d');
                // redireccionar
                // header('Location: /admin');
            }else{
                echo 'error';
            }
            // cierro la consulta
            $queryNewPropiety->close();
        }
    }
    $db->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP BIENES RAICES</title>
    <link rel="stylesheet" href="../../public/css/index.css">
    <script src="../../src/js/app.js" defer></script>
    
</head>
<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href=""> <img src="../../public/img/logo.svg" alt="logo de bienes raices"></a>

                <div class="contendor-iconos">
                    <div class="mobile-menu ">
                        <img src="../../public/img/barras.svg" alt="menu-navegacion">
                    </div>
                    <img src="../../public/img/dark-mode.svg" alt="modo-dark" class="dark-mode-boton">
                </div>

                <nav class="navegacion">
                    <a href="../../src/view/nosotros.php">Nosotros</a>
                    <a href="../../src/view/anuncios.php">Anuncios</a>
                    <a href="../../src/view/blog.php">Blog</a>
                    <a href="../../src/view/contacto.php">Contacto</a>
                </nav>
            </div>
        
        </div>
    </header>

    <main class="contenedor seccion">
        <h2>crear página</h2>
        <a href="../index.php" class="boton boton-verde">Volver  </a>

    
    <form action="/app_bienes_raices/admin/propiedades/crear.php" class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Información general</legend>
            
            <label for="titulo">Nombre de la propiedad: </label>
            <input type="text" name="titulo" id="titulo" placeholder="Nombre de la propiedad" value="<?php echo $titulo?>">
            <?php echo (empty($titulo) && isset($error[0])) ? "<p class='error' style='color:red'>{$error[0]}</p>" : ''; ?>


            <label for="precio">Precio:</label>
            <input type="text" name="precio" id="precio" placeholder="precio" value="<?php echo $precio?>">
            <?php echo (empty($precio )  && isset($error[0])) ? "<p class='error' style='color:red'>{$error[0]}</p>":'';?> 

            <label for="imagen">Imagen: </label>
            <input type="file" name="imagen" id="imagen" accept="image/jpeg , image/png">
            <?php echo (isset($errorImagen[0]))? "<p class='error' style='color:red'>{$errorImagen[0]}</p>":''; ?>

            <label for="descripcion" class="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion"> <?php echo$descripcion?></textarea>
            <?php echo  (empty($descripcion) || (isset($error[0]))) ? "<p class='error' style='color:red'>{$error[0]}</p>":'';?> 
        </fieldset>

        <fieldset>
            <legend>Información de la propiedad</legend>

            <label for="habitaciones">habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="habitaciones" value="<?php echo $habitaciones?>">
            <?php echo (empty($habitaciones )  && isset($error[0])) ? "<p class='error' style='color:red'>{$error[0]}></p>":'';?> 

            <label for="serviciosHigienicos">baños:</label>
            <input type="number" name="serviciosHigienicos" id="serviciosHigienicos" placeholder="servicios" value="<?php echo $serviciosHigienicos?>">
            <?php echo (empty($serviciosHigienicos )  && isset($error[0])) ? "<p class='error' style='color:red'>{$error[0]}></p>":'';?> 

            <label for="estacionamiento">estacionamiento:</label>
            <input type="estacionamiento" name="estacionamiento" id="estacionamiento" placeholder="estacionamiento" value="<?php echo $estacionamiento?>">
            <?php echo (empty($estacionamiento )  && isset($error[0])) ? "<p class='error' style='color:red'>{$error[0]}></p>":'';?> 
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor" id="vendedor">
                <option value="">--vendedor--</option>
                <?php while ($row=$resultadoVendedores->fetch_assoc()) : ?>
                <option 
                <?php echo $vendedor_id==$row['id'] ? 'selected':'' ?>
                value="<?php echo $row['id'] ?>"> <?php echo $row['nombre']." ". $row['apellido'] ?> </option>
                <?php endwhile;?>
            </select>
            <?php echo (empty($vendedor_id )  && isset($error[0])) ? "<p class='error' style='color:red'>{$error[0]}></p>":'';?> 
        </fieldset>

        <input type="submit" value="crear propiedad" class="boton boton-verde">
    </form>
    </main>
<?php
    include_once '../footer.php';
?>