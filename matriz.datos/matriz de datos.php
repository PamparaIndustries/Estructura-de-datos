<? php 
$datos = array ("nombre"=>"Sebastian", "edad"=>20, "correo"=>"prueba@gmail.com");

$datos = array ("ciudad"=>"Medellin", "profesion"=>"jugador");

$datosCombinados = array_merge(arrays: $datos1,$datos2);

print_r(value: $datosCombinados);

?>