<?php

$pila = [];
array_push($pila,1);
array_push($pila,2);
array_push($pila,3);
array_push($pila,4);
array_push($pila,5);
array_push($pila,6);
array_push($pila,7);

$elementoPop = array_pop($pila);

echo "Los elementos son: ".$elementoPop;

?>