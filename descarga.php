<?php
//Especificamos el nombre del archivo y la ruta
$fileName = basename('Carta_Iconeda.pdf');
$filePath = './pdf/'.$fileName;
//Comprobamos si existe 
if(!empty($fileName) && file_exists($filePath)){
    // Define el archivo y el tipo de archivo junto a la lectura de las cabeceras 
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/pdf");
    header("Content-Transfer-Encoding: binary");
    // Lee el archivo
    readfile($filePath);
    exit;
}else{
    echo 'Ha habido un problema al descarga la carta';
}