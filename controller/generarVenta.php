<?php
require_once '../model/data.php';
session_start();
$carrito = $_SESSION["carrito"];
$total = $_SESSION["total"];
$rutcliente = $_POST["txtrut"];
$numero_documento = $_POST["numero_documento"];
$tipo_documento = $_POST["documento"];

$d = new Data();

$d->crearVenta($carrito, $total, $rutcliente, $numero_documento, $tipo_documento);

session_unset($carrito);
session_unset($total);
//echo $carrito."<br>";
//echo $total."<br>";
//echo $rutcliente."<br>";
//echo $numero_documento."<br>";
//echo $tipo_documento."<br>";
header("location: ../index.php");

?>