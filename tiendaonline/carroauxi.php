<?php
session_start();
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $mysqli=new mysqli("localhost","root","","tienda");
    $sql="SELECT * FROM articulos WHERE id='$id'";
    $result=$mysqli->query($sql);
    $row=$result->fetch_assoc();

    if (!$_SESSION['productos']) {
        $_SESSION['productos']=[];
    }

    while ($row) {
        $nombre=$row["nombre"];
        $precio=$row["precio"];
        $array=$nombre."|".$precio;
        print_r($array);
            array_push($_SESSION['productos'], $array);
       $row=$result->fetch_assoc();
    }
    header("location:tienda.php");


        $_SESSION['comidas']=[];
 

        $_SESSION['dinero']=[];


$productos=$_SESSION['productos'];
for ($i=0; $i < count($productos); $i++) { 
    $aux = explode("|", $productos[$i]);

    array_push($_SESSION['comidas'],$aux[0]);
    array_push($_SESSION['dinero'],$aux[1]);
}
}
?>