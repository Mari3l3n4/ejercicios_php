<?php
//casi siempre cuando hablmos de incremento deberiamos colocar la i como variable

$i=1;
//while($i<10){ //en while se evalua la condicion primero y luego se ejecuta la accion
  // echo $i.'</br>';
  //} 

do{ //do while se ejecutara la accion aunque sea una vez y luego evaluara la condicion.
  echo $i.'</br>'; //ojo cuando tenemos un ciclo ay que incrementar la variable si no sera un ciclo infinito.
  $i++;
}
while($i<10);
echo 'fin del ciclo while';
?>