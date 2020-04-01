<?php 
$eleccion='torta';
switch($eleccion){
  case 'torta':
    echo 'el valor de la torta es de 300bs';
    break;
  case 'pizza':
    echo 'el valor de la pizza es de 600bs';
    break;
  case 'helado':
    echo 'el valor del helado es de 120bs';
    break;
  default:
    echo 'La opcion ingresada no es valida';
    break;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch php</title>
</head>
<body>
    <h1>ingresa una opción:</h1>
    <hr>
    <h2>1)Torta</h2>
    <h2>2)Pizza</h2>
    <h2>3)Helado</h2>
</body>
</html>