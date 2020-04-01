<?php
$animales=['gato', 'perro', 'tigre', 'elefante', 'oso', 'gallina'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
  //ciclo for
  //for($i=0;$i<=2;$i++){
   // echo '<h1> mi animal favorito es: '.$animales[$i]. '</h1>';
  //}

 //FOREACH es muy parecido al for, la variable que se ponga luego del nombre del arreglo dentro de los parentesis va a tomar los valores del arreglo, el valor va solo reemplazandose sin colocar indices 

 foreach($animales as $valor){
    echo '<h1> mi animal favorito es: '.$valor. '</h1>';
 }

?>

</body>
</html>