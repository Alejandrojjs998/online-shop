<?php
session_start();
if (isset($_GET['id'])) {
   $id=$_GET['id'];
   echo $id;
   unset($_SESSION['comidas'][$id]);
var_export ($_SESSION['comidas']);
unset($_SESSION['dinero'][$id]);
var_export ($_SESSION['dinero']);

header("location:carrito.php");
}
?>