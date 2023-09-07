<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['valid_user'])) {
    // Si no ha iniciado sesión, redirigirlo de vuelta al formulario de inicio de sesión
    header('Location: ../login/iniciosesion.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola esta es la pagina 2</h1>
    <h2>prubea</h2>
    <form action="../php/logout.php" method="post">
        <input type="submit" value="Cerrar Sesión">
    </form>
</body>
</html>