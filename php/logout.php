<?php
session_start();

// Verifica si la sesión del usuario está activa
if (isset($_SESSION['valid_user'])) {
    // Destruye la sesión actual
    session_destroy();
    
    // Redirige al usuario a la página de inicio de sesión u otra página de tu elección
    header('Location: ../login/iniciosesion.php');
    exit;
} else {
    // Si la sesión ya se ha destruido o no existe, puedes redirigir al usuario a la página de inicio de sesión
    header('Location: ../login/iniciosesion.php');
    exit;
}
?>
