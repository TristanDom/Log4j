<?php
include("con_db.php");

/*if ($conex){
    echo "Conexión exitosa";
}else{
    echo "ha ocurriddo un error";
}*/

if (isset($_POST['register'])){
    if (strlen($_POST['url']) < 1){
        $url = trim($_POST['url']);
        $consulta = "INSERT INTO registros(direccion) VALUES ('$url')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado){
            ?>
            <h3 class="ok">Se registró URL correctamente</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">Ha ocurrido un error</h3>
            <?php
        }
        }  else {   
            ?>
            <h3 class="bad">Registra una URL</h3>
            <?php
        }
}

?>