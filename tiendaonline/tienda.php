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
<header>
    <h1>Restarante El mirador</h1>
    <a href='carrito.php'><img src='./fotos/carritoverde.png' alt='' width='90%' height='80%'></a>
</header>
<?php
$mysqli=new mysqli("localhost","root","","tienda");
$sql="SELECT * FROM articulos";
$result=$mysqli->query($sql);

$row=$result->fetch_assoc();

echo"<div id='table'>";
while($row){
  //echo "<tr>";
         echo "
         <div id='td'>
         <b>".$row['nombre']." <span style='color: green;'>".$row['precio']."€</span></b>
         <a href='carroauxi.php?id=".$row['id']."'><img src='./fotos/carrito.png' alt='' width='20px' height='20px'></a><br>
         <img src='./fotos/".$row['foto']."' alt='' width='200px' height='200px'><br>
         <span style='text-align: center;'>".$row['descripcion']."</span><br>
         </div>
         ";
    $row=$result->fetch_assoc();
}
echo"</div>";
?>
<footer>copyright by Alejandro</footer>
</body>
</html>
