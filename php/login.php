<?php
    include('dbconfig_users.php');
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Verificar si los campos no están vacíos
        if (isset($_POST['username']) && isset($_POST['password'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $respuesta = $conn -> query("SELECT permiso.typetoken FROM users INNER JOIN permiso ON permiso.id_token = users.id_token WHERE username='$username' AND  password='$password'");

            if ($respuesta->num_rows > 0) {
                // Si la consulta devuelve al menos una fila
                $row = $respuesta->fetch_assoc(); // Obtén la primera fila
                $valor = $row['typetoken']; // Almacena el valor en la variable $valor
            } else {
                // No se encontraron resultados
                $valor = null;
            }
            session_start();

            $_SESSION['username']=$username ;


            echo $valor;
        } else {
            echo json_encode(array("error" => "Uno o ambos campos están vacíos."));
        }
    } else {
        echo json_encode(array("error" => "No se ha recibido una solicitud POST."));
    }
?>
