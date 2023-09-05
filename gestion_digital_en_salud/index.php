<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>HRAEI - Gestión Digital en Salud</title>
</head>

<body>
    <header>
        <a href="index.php">Inicio</a>
        <a href="https://hraei.gob.mx/" target="_blank">HRAEI</a>
    </header>

<!-- Carousel-->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/gds11.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/gds12.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/gds13.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<!--Finaliza Carousel-->
    


    <div class="container" style="center">
    <div class="cards">

            <div class="card">
                    <img src="img/cancer.png" alt="Imagen 1">
                    <br>
                    <a href="#" class="btn btn-success">Cáncer</a>
            </div>

            <div class="card">
                <img src="img/patologias1.jpg" alt="Imagen 2">
                <br>
                <a href="#" class="btn btn-success">Patologías</a>
            </div>

            <div class="card">
                <img src="img/clinicas1.jpg" alt="Imagen 3">
                <br>
                <a href="clinicas.php" class="btn btn-success">Clínicas</a>
            </div>

            <div class="card">
                <img src="img/servicios.jpeg" alt="Imagen 4">
                <br>
                <a href="#" class="btn btn-success">Servicios</a>
            </div>

            <div class="card">
                <img src="img/enfermeria.jpeg" alt="Imagen 5">
                <br>
                <a href="#" class="btn btn-success">Enfermería</a>
            </div>
        </div>
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
