<?php


if (isset($_POST['nombre'])&&isset($_POST['contra'])&&isset($_POST['contra2'])&&isset($_POST['rol'])) {
    
    if ($_POST['contra']!=$_POST['contra2']&& empty($_POST['nombre']) || empty($_POST['contra']) || empty($_POST['contra2']) || empty($_POST['rol'])) {
        echo"<script>alert('Ha ocurrido un error')</script>";
    }else{ 
        $nombre=$_POST['nombre'];
        $contraseña=$_POST['contra'];
        $rol=$_POST['rol'];
        $fecha=date('Y/m/d');
        $mysqli= new mysqli("localhost","root","","tienda");
        $sql="INSERT INTO usuarios (nombreUsuario, Password, fechaInsercion, Rol) VALUES ('$nombre','$contraseña','$fecha','$rol');";
        $result=$mysqli->query($sql);

        if ($result) {
            echo"<script>alert('Usuario creado con exito')</script>";
        }else {
            echo"<script>alert('Ha ocurrido un error')</script>";
        }
    }
}
if (isset($_POST['volver'])) {

    header("location:administrar.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body id="fondo">
    <div id="container">
    <form action="insersion.php" method="post">
        <label for="">Creador de usuario</label>
        <input type="text" name="nombre"><br>
        <label for="">Contraseña</label>
        <input type="password" name="contra"><br>
        <label for="">Repetir contraseña</label>
        <input type="password" name="contra2"><br>
        <label for="rol">Rol</label>
        <select name="rol" id="">
            <option value="a">Administrador</option>
            <option value="u">Usuario</option>
        </select><br>
        <input type="submit" value="Enviar">
        <input type="submit" value="volver" name="volver">
    </form>
    </div>
</body>
</html>