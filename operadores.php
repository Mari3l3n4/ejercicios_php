<?php
//codigo 1  operador aritmetico
//$a=5;
//$b=4;
//$c= $a*$b;

//echo $c; //cuando llamamos a una variable no necesitamos colocar comillas solo echo y la variable que queremos pintar.


//if($a<$b){
   // echo'es verdad';
//}else{
  //  echo'es mentira';
//}

//codigo 2 comparacion

//$a="4";
//$b=4;


//if($a===$b){ //la deiferencia entre doble igual y triple igual  es que "==" es para evaluar si dos variables son iguales y "===" es para evaluar si dos variables son identicas si queremos evaluar en un if y queremos saber si son identicos se debe utilizar un triple igual, igual la recomendacion con js.
  //  echo'es verdad';
//}else{
  //  echo'es mentira';
//}


//codigo 3

//$a=4;
//$b=4;

//if($a>=$b){ //para saber si la variable 1 es mayor o igual que la otra que se esta evaluando, es importante que el signo de mayor o menor vaya de primero y luego el igual "=".. de lo contrario no funciona el codigo
   // echo'es verdad';
//}else{
  // echo'es mentira' ;
//} 

//operadores logicos

$a=3;
$b=4;
$z=5;

//if($z>$b||$z<$a){
 // echo'es verdad';
//}else{
  //  echo 'es mentira';
//}

//if($z>$b && $z>$a){ //la diferencia entre and "&&" y or "||" es que and && es verdad o se cumple algo si las dos condiciones son verdaderas del resto es mentira y or || se cumple y es verdad siempre y cuando algunas de las dos condiciones sea verdadera o se cumpla.
  // echo'es verdad';
//}else{
  //  echo'es mentira';
//}

//operadores de incremento y decremento

//$a= $a+1; //se hace la operacion de la derecha y ese valor se le asigna a la  variable de la izquierda que guarda esa informacion. una mejor manera seria usando los ++ valor de incremento. asi:
$a++;
$a--; //decremento --
echo $a;


?>