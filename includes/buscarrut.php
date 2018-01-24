 <?php

require_once '../model/config.php';
$conexion = new mysqli(SERVER,DB_USER,DB_PASS,DB);
//$rut = $_GET['term'];
$rut = "1";
$consulta = "select rut FROM clientes WHERE rut LIKE '%$rut%'";

$result = $conexion->query($consulta);

if($result->num_rows > 0){
    while($fila = $result->fetch_array()){
        $ruts[] = $fila['rut'];
               
    }
    echo json_encode($ruts);
}

?> 