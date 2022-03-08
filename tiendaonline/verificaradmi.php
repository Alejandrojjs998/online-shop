<?php
session_start();
if (isset($_SESSION['nombre'])&&isset($_SESSION['contraseña'])) {
    
$nombre=$_SESSION['nombre'];
$contraseña=$_SESSION['contraseña'];
$mysqli= new mysqli("localhost","root","","tienda");

$sql="SELECT nombreUsuario Password FROM usuarios WHERE nombreUsuario='$nombre'and Password='$contraseña'and Rol='a'";
$result=$mysqli->query($sql);
$row=$result->fetch_assoc();

if($row){
    $_SESSION['admin']="si";
    header("location:menu.php");
}else{
    header("location:administrador.php");
}
}
?>