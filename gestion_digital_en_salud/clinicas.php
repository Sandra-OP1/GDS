<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Clínicas</title>
</head>
<body>
    <header>
        <a href="index.php">Inicio</a>
        <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
    </header>

    <div class="container1" style="height: 40px;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            padding: 0 20px;
                            background-color: rgb(35,91,78,0.70);">

        <strong style="margin: 0 auto; color: rgb(35,91,78);">CLÍNICAS</strong>
    </div>



    <!-- CARDS -->

    <div class="container" style="center">
        <div class="cards">
            <div class="card">
                <img src="img/anemia.jpeg" alt="Imagen 1">
                <br>
                <a href="../login/iniciosesion.php" class="btn btn-success">Anemias</a>
            </div>
            <div class="card">
                <img src="img/hepatitisc.jpg" alt="Imagen 2">
                <br>
                <a href="../login/iniciosesion.php" class="btn btn-success">Hepatitis C</a>
            </div>
            <div class="card">
                <img src="img/paladarhendido.jpg" alt="Imagen 3">
                <br>
                <a href="clinicas.php" class="btn btn-success">LPH</a>
            </div>
            <div class="card">
                <img src="img/cirugiabariatrica.jpg" alt="Imagen 4">
                <br>
                <a href="#" class="btn btn-success">Bariatría</a>
            </div>
            <div class="card">
                <img src="img/creheri.png" alt="Imagen 5">
                <br>
                <a href="#" class="btn btn-success">CREHER</a>
            </div>
            <div class="card">
                <img src="img/hemofilia1.png" alt="Imagen 5">
                <br>
                <a href="#" class="btn btn-success">Hemofilia</a>
            </div>
        </div>
    </div> <!-- es el div que cierra <div class="container" style="center">-->

    <footer>
        Hospital Regional de Alta Especialidad de Ixtapaluca
       <p style="font-size: 10px">
            Dirección de Operaciones - Subdirección de Tecnologías de la Información 
            <br> Gestión Digital en Salud - 2023
       </p> 
    </footer>
</body>
</html>