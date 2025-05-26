<? php 
$datos = array ("nombre"=>"juan", "edad"=>20, "correo"=>"prueba@gmail.com");

$datos = array ("ciudad"=>"Bucaramanga", "profesion"=>"dj");

$datosCombinados = array_merge(arrays: $datos1,$datos2);

print_r(value: $datosCombinados);

?>