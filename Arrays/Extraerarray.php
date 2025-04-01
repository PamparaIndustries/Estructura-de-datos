<?php

$marcas = array("Toyota", "Ford", "BMW", "Honda");

$marcas[] = "Chevrolet";

print_r($marcas);

$marcasseleccionadas = array_slice($marcas,0,2);
print_r($marcasseleccionadas);

?>