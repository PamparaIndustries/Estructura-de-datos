<?php

$edades= ["Sandy"=> 16,"mariobros"=> 19,"Pacho"=> 33,"tato"=> 45,"juan"=> 27];
asort($edades);

$edadesFiltradas = array_filter($edades,function($value)
{
    return $value > 18;
});
print_r($edadesFiltradas);



?>