<?php

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

//conexion

$conexion=mysqli_connect("localhost:8080","root","","loginusuario");
$query="SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'";
$resultado=mysqli_query($conexion, $query);

$rows=mysqli_num_rows($resultado);
if($rows>0){
    header("location:bienvenido.html");
}
else {
    echo "Error de datos";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>