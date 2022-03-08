<?php
session_start();
if (isset($_POST['nombre'])&&isset($_POST['contraseña'])) {
    $_SESSION['nombre']=$_POST['nombre'];
    $_SESSION['contraseña']=$_POST['contraseña'];
    
    header("location:verificaradmi.php");
}



if (isset($_POST['usuario'])) {
    header("location:index.php");
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
<body id="fondo">
    <div id="container">
    <form action="administrador.php" method="post">
        <h3>Login Administrador</h3>
        <label for="">Inserte su nombre de usuario</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="">Inserte su contraseña</label><br>
        <input type="password" id="contraseña" name="contraseña"><br>
        <input type="submit" value="Logear">
        <input type="submit" value="usuario" name="usuario">
    </form>
    </div>
</body>
</html>