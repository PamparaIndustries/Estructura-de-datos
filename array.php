<?php

$marcas = array("Toyota", "Ford", "BMW", "Honda");

$marcas[] = "Chevrolet";

print_r($marcas);

// Eliminar un registro de un arreglo
$eliminarMarca = "Ford";
$llave = array_search($eliminarMarca, $marcas);

if ($llave !== false) {
    unset($marcas[$llave]);
}

// Reindexar el arreglo para evitar claves vacías
$marcas = array_values($marcas);

print_r($marcas);

?>