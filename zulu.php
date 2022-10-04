<?php 
function conexion(){
    $conexion = mysqli_connect ('localhost','root','','zulu','3306');
    if ($conexion){
        return $conexion; 
}
else {return'error_conexion';}
}