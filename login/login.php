<?php
// Conexión a la base de datos MySQL
// Cambia esto según tu configuración
$servername="localhost";
$username="root";
$password="";
$dbname="usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // Inicio de sesión exitoso
     $row = $result->fetch_assoc();
     $username = $row["username"];
     
     //===================================ANEMIAS===================================
     // Realizar redirección basada en el nombre de usuario
     if ($username === "sandra.olvera") {
         header("Location: ../anemia/index.php");
     } elseif ($username === "nidia.sanchez") {
         header("Location: ../anemia/index.php");
     } elseif ($username === "dr.cabrera") {
        header("Location: ../anemia/index.php");
     } else {
         // Otro usuario (puedes manejarlo como desees)
         // Por ejemplo, podrías redirigirlos a una página predeterminada o mostrar un mensaje de error
         header("Location: login/iniciosesion.php");
     }
 
     exit(); // Asegúrate de detener la ejecución del script después de redirigir
} else {
    // Credenciales incorrectas
    echo "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
}

$conn->close();
?>
