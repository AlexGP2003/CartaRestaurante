<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iconeda</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="./img/Iconeda.png" type="image/x-icon">
    <!--BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="./css/styles.css">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div>
<!--Menú navegación-->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #9B9B9B;">
  <div class="container-fluid">
  <a class="navbar-brand" href="./index.php">
      <img src="./img/Iconeda.png" alt="Iconeda" width="70" height="70">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./carta.php">Carta Iconeda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./descarga.php">Descarga Nuestra Carta</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="column-1">
<br><br><br><br>
<!--Carousel Imagenes-->
</div>
<div id="carouselExampleCaptions" class="carousel slide recolcar" data-bs-ride="carousel" id="Carousel_Comida">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/Ensalada-Cesar.webp" class="d-block w-100 imgC" alt="Ensalada César">
      <div class="carousel-caption d-none d-md-block fondo_letra_carr">
        <h2 class="letra_carr">Ensalada César</h2>
        <h4 class="letra_carr">Prueba el sabor de nuestra salsa acompañada de pollo y lechuga.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/ensalada-huerta.jpg" class="d-block w-100 imgC" alt="Ensalada huerta">
      <div class="carousel-caption d-none d-md-block fondo_letra_carr">
        <h2 class="letra_carr">Ensalda de la huerta</h2>
        <h4 class="letra_carr">Disfruta de un plato de primera con productos traídos de la huerta.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/pescadito-frito.jpg" class="d-block w-100 imgC" alt="Pescadito Frito">
      <div class="carousel-caption d-none d-md-block fondo_letra_carr">
        <h2 class="letra_carr">Pescadito Frito</h2>
        <h4 class="letra_carr">Disfruta el sabor de la receta original andaluza.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/Callos.webp" class="d-block w-100 imgC" alt="Callos">
      <div class="carousel-caption d-none d-md-block fondo_letra_carr">
        <h2 class="letra_carr">Callos</h2>
        <h4 class="letra_carr">El Sabor clásico de los callos en nuestra casa.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/paella-mixta.jpg" class="d-block w-100 imgC" alt="Paella Mixta">
      <div class="carousel-caption d-none d-md-block fondo_letra_carr">
        <h2 class="letra_carr">Paella Mixta</h2>
        <h4 class="letra_carr">Disfruta de la receta tradicional valenciana.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/paella-vegetariana.jpg" class="d-block w-100 imgC" alt="Paella Vegetariana">
      <div class="carousel-caption d-none d-md-block fondo_letra_carr">
        <h2 class="letra_carr">Paella Vegetariana</h2>
        <h4 class="letra_carr">Prueba nuestra nueva paella llena de sabor.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/trufas.jpg" class="d-block w-100 imgC" alt="Trufas con nata">
      <div class="carousel-caption d-none d-md-block fondo_letra_carr">
        <h2 class="letra_carr">Trufas con nata</h2>
        <h4 class="letra_carr">Disfruta de un manjar singular.</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/tarta.jpg" class="d-block w-100 imgC" alt="Tarta">
      <div class="carousel-caption d-none d-md-block fondo_letra_carr">
        <h2 class="letra_carr">Tarta de fresas con nata y queso</h2>
        <h4 class="letra_carr">Hecha a tu gusto para paladares exquisitos.</h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>    
</div>
</body>
</html>