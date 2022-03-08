<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $mysqli= new mysqli("localhost","root","","tienda");
    $sql="DELETE FROM usuarios WHERE idUsuario='$id';";
    $result=$mysqli->query($sql);

    

    header("location:administrar.php");
}



?>