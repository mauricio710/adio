<?php

include('bd.php');

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


$consulta = "SELECT* FROM usuarios where usuario = '$usuario' and contraseña ='$contraseña' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.html");

}else{
    include("login.html");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>

