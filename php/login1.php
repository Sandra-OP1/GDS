<?php
    include('dbconfig_users.php');
    session_start();
    
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (!$conn) {
            die("Error en la conexion a la base de datos" . mysqli_connect_error());
        }

        $user = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT permiso.typetoken FROM users INNER JOIN permiso ON permiso.id_token = users.id_token WHERE username='$user' AND  password='$password'";

        $response = mysqli_query($conn,$query);

        if ($response && $row = mysqli_fetch_assoc($response)) {
            $typetoken = $row['typetoken'];}

        if (mysqli_num_rows($response) == 1) {
            $_SESSION['valid_user'] = $user;
            echo $typetoken;
            // echo $response;
        }else {
            echo 'usuario o contraseña incorrectos';
        }

        mysqli_close($conn);
    }else {
        echo 'Acceso no autorizado';
    }
?>