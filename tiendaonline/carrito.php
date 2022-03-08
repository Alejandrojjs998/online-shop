<?php
session_start();
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
<header>
    <h1>Restarante El mirador</h1>
    <a href='tienda.php'><img src='./fotos/menu.png' alt='' width='100px' height='100px'></a>
</header>
<div id="carta">
<?php

if (isset($_POST['vaciar'])) {
   session_unset();
   session_destroy();
}
if (isset($_POST['comprar'])) {
    session_unset();
    session_destroy();
    header("location:https://google.com");
 }
 

if (isset($_SESSION['comidas'])) {
   

echo"<table>";
for ($i=0; $i < count($_SESSION['comidas']); $i++) { 
    $comidas=$_SESSION['comidas'];
    $dinero=$_SESSION['dinero'];
   echo"<tr><td>".$comidas[$i]."</td><td>".$dinero[$i]."</td><td><a href='?id=$i'><button>Borrar</button></a></td></tr>";
}
$total=array_sum($_SESSION['dinero']);
echo"<td>Total:</td><td>$total €</td>";
echo"</table>";
}
?>
<br>
<form action="" method="post">
    <input type="submit" value="vaciar" name="vaciar">
    <input type="submit" value="comprar" name="comprar">
</form>
</div>

</body>
</html>
