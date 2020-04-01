<!--incluyendo php dentro de un archivo html -->
<?php

//$nombre='Marielena';
//realizaremos un arreglo
//dos formas de hacerlo son las siguientes:

$animales=['Perro', 'Gato', 'Elefante']; //nota importante cada variable si es de tipo texto debe estar encerrada por separado en comillas simples, y separada de la otra variable por una coma
//$animales=array('Perro', 'Gato', 'Elefante');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utilizando php</title>
</head>
<body>
   <!-- <h1>Hola: <?php //echo $nombre ?></h1>-->

   <!--<h1>Mi animal favorito es: <?php //echo $animales[1] ?></h1> -->

<?php
$i=0;
while($i<=2){
echo '<h1>Mi animal favorito es: '.$animales[$i]. '</h1>';
$i++;
}
?>

</body>
</html>