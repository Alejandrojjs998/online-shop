<?php


if (isset($_POST['nombre'])&&isset($_POST['descripcion'])&&isset($_POST['foto'])&&isset($_POST['precio'])) {
    
    if (empty($_POST['nombre']) || empty($_POST['descripcion']) || empty($_POST['foto']) || empty($_POST['precio'])) {
        echo"<script>alert('Tienes algun campo vacío')</script>";
    }else{ 
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $foto=$_POST['foto'];
        $precio=$_POST['precio'];
        $mysqli= new mysqli("localhost","root","","tienda");
        //articulos nombre,descripcion,foto,precio
        $sql="INSERT INTO articulos (nombre,descripcion,foto,precio) VALUES ('$nombre','$descripcion','$foto','$precio');";
        $result=$mysqli->query($sql);

        if ($result) {
            echo"<script>alert('Usuario creado con exito')</script>";
        }else {
            echo"<script>alert('Ha ocurrido un error')</script>";
        }
    }
}
if (isset($_POST['volver'])) {

    header("location:menu.php");
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
        
    <form action="inserproducto.php" method="post">
        <h3>Creador de productos</h3>
        <label for="">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="">Descripcion</label>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea><br>
        <label for="rol">Foto</label>
        <input type="text" name="foto">
        <label for="">Precio</label>
        <input type="text" name="precio">
        <input type="submit" value="Enviar">
        <input type="submit" value="volver" name="volver">
    </form>
    </div>
</body>
</html>