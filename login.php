<?php
echo"Tu servidor no se pudo conectar";
$servidor = "localhost";
$usuario="root";
$contraseña="";
$archibo="login";

$conexion = mysqli_connect($servidor,$usuario ,$contraseña ,$archibo );

if(isset($_POST['Enviar'])){
$nombre=$_POST['Nombre'];
$gmail=$_POST['Gmail'];
$contra=$_POST['Contraseña'];

$insertarDatos = "INSERT INTO cliente VALUES('$nombre','$gmail','$contra')";
$sejecutarInsertar = mysqli_query($conexion,$insertarDatos);

}
?>