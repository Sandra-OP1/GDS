<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Iniciar Sesión</title>
</head>

<body>
    
    <header>
        <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
        <strong style="color:aliceblue;">|</strong>

        <a href="../gestion_digital_en_salud/index.php">Inicio</a>
        <strong style="color:aliceblue;">|</strong>
        
        <a href="../gestion_digital_en_salud/clinicas.php">Clínicas</strong>
        <strong style="color:aliceblue;">|</strong>
        <a href="" target="_blank"></a>
    </header>

   

    <div class="login-container">
        <form class="login-form" id="login-form" action="login.php" method="post">
            <h5>Iniciar Sesión</h5>
            <div class="input-container">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-container">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>


    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
       <p style="font-size: 10px">
            Dirección de Operaciones - Subdirección de Tecnologías de la Información 
            <br> Gestión Digital en Salud - 2023
       </p> 
    </footer>
</body>
</html>
