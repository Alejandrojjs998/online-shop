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
    <div id="container2">
    <?php
    if (isset($_POST['insertar'])) {

        header("location:insersion.php");
    } 
    if (isset($_POST['volver'])) {

        header("location:menu.php");
    }   
$mysqli= new mysqli("localhost","root","","tienda");
$sql="SELECT * FROM usuarios";
$result=$mysqli->query($sql);
$row=$result->fetch_assoc();
echo"
<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Contraseña</th>
<th>Fecha de Inserción</th>
<th>Rol</th>
<th>Borrar</th>
</tr>
";

while ($row) {
if ($row['rol']=="u") {
    $rol="usuario";
}else {
    $rol="administrador";
}

echo"
    <tr>
    <td>".$row['idUsuario']."</td>
    <td>".$row['nombreUsuario']."</td>
    <td>".$row['Password']."</td>
    <td>".$row['fechaInsercion']."</td>
    <td>$rol</td>
    <td><a href='borrar.php?id=".$row['idUsuario']."'><button>Borrar</button></a></td>
    </tr>
    ";
    $row=$result->fetch_assoc();
}
echo"</table>";


?>
        
    </div>
    <div id="container3">
        <form action="administrar.php" method="post">
                <input type="submit" value="Insertar usuarios" name="insertar">
                <input type="submit" value="Volver" name="volver">
        </form>
    </div>
</body>
</html>

<a href=""></a>