<?php

//prueva=login -datos=cliente
//conectar

$conectar=@mysqli_connect("localhost", "root", "");
//verificacion de conexion
if(!$conectar){
    echo"No se pudo coectar Con el servidor";
}else{
    $base = mysqli_select_db('login');
    if(!$base){
        echo"No se encontro la base de datos";
    }
}

//Recuperar bariables

$Nombre=$_POST['nombre'];
$Gmail=$_POST['gmail'];
$Contraseña=$_POST['contraseña'];
$sql="INSERT INTO datos VALUES  ('$Nombre','$Gmail','$Contraseña')";

//Ejecutamos la sentencia de sql

$ejecutar = mysql_query($sql);
//verificamos la ejecucion

if(!$ejecutar){
    echo"Hubo algun error";
}else{
"Datos guardados correctamente <br><a href='index.html'>Volver</a>";
}
?>