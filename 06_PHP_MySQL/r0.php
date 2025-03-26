<?php
// r0.php
$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'POST':
    case 'GET':
    case 'PUT':
        echo "Método HTTP detectado: $metodo";
        break;
    default:
        echo "Método no reconocido";
}
?>
