<?php 
$numeros =[1,3,8,10,15,2,99];
$numeroFiltrar = array_filter($numeros,function($value)
{
    return $value > 10;
});


print_r($numeroFiltrar)

?>