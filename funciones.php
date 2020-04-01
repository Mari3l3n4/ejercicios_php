<!--funciones conjunto de acciones a las cuales podemos llamar-->
<!-- en php tambien podemos crear nuestras propias funciones, para eso hay que usar la palabra reservada function-->
<?php 
 //echo date('Y'); //esta funcion devuelve el año actual que tenga tu computador
 function lorem(){ //lorem es un nombre inventado, puede ir cualquier nombre en la funcion
 return'<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis autem perspiciatis, delectus quod dolorem fugit natus porro vel libero eum, sapiente alias aspernatur obcaecati atque, sunt aperiam sed. Mollitia, nesciunt.</p>';
 }

function promedio($n1,$n2){
    return ($n1+$n2)/2;
}
 echo promedio(10,20);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabajando con funciones en php</title>
</head>
<body>
    <section>
       <?php echo lorem(); ?>
       <?php echo lorem(); ?>
       <?php echo lorem(); ?>
    </section>

<footer>
    <h1>Todos los derechos reservados <?php echo date('Y');?></h1>
</footer>

</body>
</html>