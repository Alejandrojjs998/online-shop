<?php
if (isset($_POST['nombre'])&&isset($_POST['contraseña'])) {
    $nombre=$_POST['nombre'];
    $contraseña=$_POST['contraseña'];

        $acces=new mysqli("localhost","root","","usuario");

        $sql1='SELECT nombre FROM usuarios WHERE nombre="$nombre";';
        $sql2='INSERT INTO usuarios (nombre, contraseña) VALUE ("$nombre", "$contraseña");';

        $result=$acces->query($sql1);
        $row=$result->fetch_assoc();

        if ($row) {
            $result=true;
        }
        if ($result!=true) {
            $result2=$acces->query($sql2);
        }
}

?>