<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, sensor, fecha_hora, valor FROM registro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Estructura de la tabla
    echo "<table border='1' style='border-collapse: collapse; width: 100%; text-align: left;'>";
    echo "<tr>
            <th>ID</th>
            <th>Sensor</th>
            <th>Fecha_Hora</th>
<th>valor</th>
          </tr>";

    // Imprimir filas
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['sensor']}</td>
                <td>{$row['fecha_hora']}</td>
<td>{$row['valor']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión
$conn->close();
?>