<!-- conectar con la base de datos -->
<?php
    function conexion (){
        try {
            $db= mysqli_connect('localhost','root','','bienesraices');
            if (!$db) {
                echo 'error de conexión....';
            }
            return $db;
        } catch (\Throwable $th) {
            echo 'fallo la conexión...';
        }
    }
    
?>