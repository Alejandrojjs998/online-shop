<?php
session_start();
if (isset($_SESSION['nombre'])&&isset($_SESSION['contraseña'])) {
    
$nombre=$_SESSION['nombre'];
$contraseña=$_SESSION['contraseña'];
$mysqli= new mysqli("localhost","root","","tienda");

$sql="SELECT nombreUsuario Password FROM usuarios WHERE nombreUsuario='$nombre'and Password='$contraseña'and rol='u'";
$result=$mysqli->query($sql);
$row=$result->fetch_assoc();

if($row){
    header("location:tienda.php");
}else{
    header("location:index.php");
}
}
?>