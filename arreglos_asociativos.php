<?php
//$ciudad=['valdivia', 'puerto varas'];
$ciudad[0]=[
    'nombre'=> 'valdivia',
    'poblacion'=> '100'
];

$ciudad[1]=[
    'nombre'=>'puerto varas',
    'poblacion'=>'45'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arreglos asociativos php</title>
</head>
<body>
    <h1>Ciudades </h1>
    <hr>
    <?php

   // for($i=0;$i<=1;$i++){
  // echo '<h2> nombre: '.$ciudad[$i]['nombre']. '</h2>';
   //echo '<h2> poblacion: '.$ciudad[$i]['poblacion']. '</h2>';
  // echo '<hr>';
   // }

   foreach($ciudad as $valor){ //el foreach sirve para cuando tengamos un numero infinito en un arreglo y no sepamos la cantidad exacta 
    echo '<h2> nombre: '.$valor['nombre']. '</h2>';
    echo '<h2> poblacion: '.$valor['poblacion']. '</h2>';
    echo '<hr>';
   }

    ?>
</body>
</html>