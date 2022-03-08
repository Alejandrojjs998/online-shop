<?php
session_start();
if (isset($_POST['administrar'])) {

        header("location:administrar.php");
}
if (isset($_POST['volver'])) {

    header("location:administrador.php");
}
if (isset($_POST['tienda'])) {

    header("location:tienda.php");
}
if (isset($_POST['añadir'])) {

    header("location:inserproducto.php");
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
<form action="" method="post">
    <input type="submit" value="Administrar usuarios" name="administrar">
    <input type="submit" value="Añadir producto" name="añadir">
    <input type="submit" value="Acceso a la tienda" name="tienda">
    <input type="submit" value="volver" name="volver">
</form>

</div>
</body>
</html>