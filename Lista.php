<?php
include_once 'index.php';
include_once 'zulu.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista</h1>
        <table> 
            <thead>
                <tr>
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">fecha_nacimiento</th>
          <th scope="col">P.A.P.A</th>
          </tr>
        </thead>
        <?php
        # Conexion y Captura de la Conexion 
            $connection=conexion();
            $sql="SELECT * FROM estudiante";
            $query= mysqli_query ($connection,$sql);
            if ($query){
                $contador=1;
                while ($row=mysqli_fetch_assoc($query)){
                    $id=$row ['id']; $Nombre=$row['Nombre']; $fecha_nacimiento=$row['fecha_nacimiento']; $P_A_P_A=$row['P_A_P_A'];

                }
            }
        ?>
        <tbody>
            <tr>
                <td ><?php echo $id?></td>
                <td><?php echo  $Nombre?> </td>
                <td><?php echo $fecha_nacimiento?> </td>
                <td><?php echo $P_A_P_A?> </td>
            </tr>
        </tbody>
        </table>
    
    
</body>
</html>
