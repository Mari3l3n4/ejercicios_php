<?php
//para declarar una variable de primero debemos colocar el signo de dolar $
$edad=29; //variable numerica

$nombre='Ignacio';//variable de tipo nombre o texto si o si  debe llevan comillas

$vivo=true; //variable booleana puede ser verdadero o falso

//echo $edad;

echo $nombre.' tiene una edad de: '.$edad.' años</br></br>'; //debe llevar puntos para separar las variables del texto y concatenar bien

echo "$nombre tiene una edad de: $edad años</br></br>"; //con comillas dobles no es necesario poner el puntito pero por tema de seguridad es mejor usar las comillas simples

echo '$nombre tiene una edad de $edad años</br></br>'; //con comillas simples no funciona.

//tambien se pueden utilizar etiquetas propias de html como el </br> para salto de linea.
?>