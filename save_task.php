<?php
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $fecha_nacimiento = $_GET['fecha_nacimiento'];
    $p_a_p_a = $_GET['p_a_p_a'];


    #Conexion con la base de datos
    include_once 'zulu.php';
    $connection = conexion();

    #Insercion de datos
    $sql = "INSERT INTO estudiante(id, nombre, fecha_nacimiento, p_a_p_a) VALUES('$id','$nombre','$fecha_nacimiento','$p_a_p_a')";
    $query=mysqli_query($connection,$sql);
    if($query){
        header('refresh:0;url=lista.php?guardado');
    }
   

?>