<?php
$servername = "127.0.0.1"; // Nombre del servidor MySQL
$username = "root"; // Nombre de usuario de MySQL
$password = ""; // Contraseña de MySQL
$dbname = "vettel"; // Nombre de la base de datos
$conecta = mysqli_connect ($servername, $username, $password, $dbname);

if ($conecta->connect_error) {
    die("Error de conexión a la base de datos: " . $conecta->connect_error);
}

// Procesa el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];

    // Escapar la variable $correo para prevenir inyección de SQL
    $correo = mysqli_real_escape_string($conn, $correo);

    // Inserta el correo en la tabla "correos" de la base de datos "vettel"
    $sql = "INSERT INTO correos (correo) VALUES ('$correo')";

    if ($conn->query($sql) === TRUE) {
        echo "Su correo se ha enviado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>
