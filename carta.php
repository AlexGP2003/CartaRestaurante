<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta Iconeda</title>
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
<?php
//Descarga del fichero xml
if (file_exists('./xml/carta.xml')) {
    $carta = simplexml_load_file('./xml/carta.xml');
} else {
    exit('Error abriendo carta.xml .');
}
$aux=[];
$cont=1;

echo "<div class='column-1 bordestop'>";
echo "<div class='column-deco1 colocdec1' id='centrardecoizq'><img src='./img/decoracion1.png' alt='Deco1' class='deco1'></div>";
echo "<div class='column-4 recoltop' id='portada'><img src='./img/Iconeda.png' alt='Iconeda' id='iconeda'></div>";
echo "<div class='column-3 colocdec1 recoltop' ><img src='./img/decoracion1.png' alt='Deco1' class='deco1'></div>";
echo "</div>";
echo "<div class='column-1 centradocol'>";
foreach($carta->plato as $plato){ 
    if(!in_array((string)$plato['tipo'],$aux)){
        if($cont==1){
            echo "<div class='column-5'>";
            $cont=2;
        }else{
            echo "</div>";
            echo "<div class='column-5 bordestipo'>";
        }
        if($plato['tipo']!="Tapas2"){
            echo "<h2 class='centrado'>".$plato['tipo']."</h2>"; 
        }
        array_push($aux,(string)$plato['tipo']);
        echo "<br>";
    }
    echo "<div class='column-1'>";
    echo "<div class='column-1'>";
    echo "<h4>".$plato->nombre."</h4>";
    echo "</div>";
    echo "<br><br>";
    echo "<div class='column-1'>";
    echo "<p>".$plato->descripcion."</p>";
    echo "</div>";
    echo "<br><br>";
    echo "<div class='column-2'>";
    echo "<p>".$plato->calorias."</p>";
    echo "</div>";
    echo "<div class='column-2'>";
    echo "<p>".$plato->precio."</p>";  
    echo "</div>";
    echo "<br><br>";
    echo "<div class='column-1'>";
    foreach ($plato->caracteristicas->item as $item){
    if (($item) == 'Carne'){
        echo "<img class='svg' src='./img/carne.svg' alt='carne'>";
    }
    if (($item) == 'Azúcar'){
        echo "<img class='svg' src='./img/azucar.svg' alt='azucar'>";
    }
    if (($item) == 'Cereal'){
        echo "<img class='svg' src='./img/cereal.svg' alt='cereal'>";
    }
    if (($item) == 'Huevo'){
        echo "<img class='svg' src='./img/egg.svg' alt='huevo'>";
    }
    if (($item) == 'Frutos Secos'){
        echo "<img class='svg' src='./img/frutos_secos.svg' alt='Frutos secos'>";
    }
    if (($item) == 'Lacteos'){
        echo "<img class='svg' src='./img/lacteos.svg' alt='Lacteos'>";
    }
    if (($item) == 'Marisco'){
        echo "<img class='svg' src='./img/marisco.svg' alt='Marisco'>";
    }
    if (($item) == 'Pescado'){
        echo "<img class='svg' src='./img/pescado.svg' alt='Pescado'>";
    }
    if (($item) == 'Picante'){
        echo "<img class='svg' src='./img/picante.svg' alt='Picante'>";
    }
    if (($item) == 'Trigo'){
        echo "<img class='svg' src='./img/trigo.svg' alt='Trigo'>";
    }
    if (($item) == 'Vegetales'){
        echo "<img class='svg' src='./img/vegetales.svg' alt='Vegetales'>";
    }
    }
    echo "<br><br>";
    echo "</div>";
    echo "</div>";
} 
?>
</div>
</div>
<br><br><br>
<div class="column-1 centrado">
<h4>Leyenda de las referencias</h4>
<br>
Carne:<img class='svg' src='./img/carne.svg' alt='carne'>  
<br><br>
Azúcar:<img class='svg' src='./img/azucar.svg' alt='azucar'> 
<br><br>  
Cereal:<img class='svg' src='./img/cereal.svg' alt='cereal'>
<br><br>
Huevo:<img class='svg' src='./img/egg.svg' alt='huevo'>
<br><br>
Lacteos:<img class='svg' src='./img/frutos_secos.svg' alt='Frutos secos'>
<br><br>
Marisco:<img class='svg' src='./img/marisco.svg' alt='Marisco'>
<br><br>
Pescado:<img class='svg' src='./img/pescado.svg' alt='Pescado'>
<br><br>
Picante:<img class='svg' src='./img/picante.svg' alt='Picante'>
<br><br>
Trigo:<img class='svg' src='./img/trigo.svg' alt='Trigo'>
<br><br>
Vegetales:<img class='svg' src='./img/vegetales.svg' alt='Vegetales'>
</div>
</div>  
</body>
</html>
     

