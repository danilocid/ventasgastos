 <?php

require_once '../model/config.php';
$conexion = new mysqli(SERVER,DB_USER,DB_PASS,DB);
$nombre = $_GET['term'];
$consulta = "select nombre, codigodebarra FROM productos WHERE nombre LIKE '%$nombre%' OR codigodebarra LIKE '%$nombre%'";

$result = $conexion->query($consulta);

if($result->num_rows > 0){
    while($fila = $result->fetch_array()){
        $nombres[] = $fila['nombre'];
        $nombres[] = $fila['codigodebarra'];        
    }
    echo json_encode($nombres);
}

?> 