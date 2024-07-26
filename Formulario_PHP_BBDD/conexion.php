<?php


$usuario="root";
$password="";
$servidor="localhost";
$basededatos="for1";


$conexion = mysqli_connect ($servidor,$usuario,"") or die ("Error de conexion con el servidor de la base de datos");
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexionn al conectrse a la base de datos");

$nombre =$_POST['$nombre'];

$sql="INSERT INTO datos VALUES ('$nombre')";

$ejecutar=mysqli_query($conexion, $sql);


if(!$ejecutar){
    
    echo "Hubo algun error";
    
}else{
    
    echo "Datos guardados correctamente <br><a href='index.php'>volver</a>";

}