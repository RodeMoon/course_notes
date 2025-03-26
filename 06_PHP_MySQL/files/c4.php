<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$inputJSON = file_get_contents("php://input");
file_put_contents("debug_log.txt", $inputJSON . PHP_EOL, FILE_APPEND);
$input = json_decode($inputJSON, true);

if (isset($input['sensor']) && isset($input['valor'])) {
    $sensor = $input['sensor'];
    $valor = floatval($input['valor']);

    $sql = "INSERT INTO diente (sensor, valor) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sd", $sensor, $valor); // "s" = string, "d" = double (float)

    if ($stmt->execute()) {
        echo "Registro insertado: $sensor - $valor";
    } else {
        echo "Error al insertar: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: JSON inválido";
}

$conn->close();
?>