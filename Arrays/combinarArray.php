<?php

$datos = ["nombre"=>"Cesar","edad"=>18,"correo"=>"sebasp640@hotmail.com"];
$datos2 = ["ciudad"=>"Madrid","Profesion"=>"futbolista"];

$datosCombinados = array_merge($datos,$datos2);
print_r($datosCombinados);

?>