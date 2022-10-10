<?php 
include_once 'zulu.php';
#Traer datos
if(isset($_GET['id'])){


$id = $_GET['id'];
# Conexion y Captura de la Conexion 
    $connection=conexion();
    $sql="SELECT * FROM estudiante";
    $query= mysqli_query ($connection,$sql);
    if ($query){
        $contador=1;
        while ($row=mysqli_fetch_assoc($query)){
            $id=$row ['id']; $Nombre=$row['Nombre']; $fecha_nacimiento=$row['fecha_nacimiento']; $P_A_P_A=$row['P_A_P_A'];
        } }}
      

 if(isset($_POST['Update'])){

     $id = $_POST['id'];
     $Nombre = $_POST['nombre'];
     $fecha_nacimiento = $_POST['fecha_nacimiento'];
     $P_A_P_A= $_POST['p_a_p_a'];

     $connection= conexion();
    $sql="UPDATE estudiante SET id= $id, nombre= '$Nombre',fecha_nacimiento='$fecha_nacimiento', p_a_p_a= $P_A_P_A
          WHERE id= $id ";
    $query = mysqli_query($connection, $sql);
    if($query){
       
    }    
  
    header('refresh:0;url=Lista.php?actualizado');  
 }
    

    
        
    
        
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <?php if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>

                <div class="card card-body">
                  
<form action="update.php" method="POST">
<div class="mb-3">
    <lable for="id" class="form-label">id
    <input type="number" name="id" class="form-control" placeholder="Ingrese id" value="<?php echo $id ?>" autofocus required >
</div>
<div class="mb-3">
    <lable for="nombre" class="form-label">Nombre
    <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre" value="<?php echo $Nombre ?>" autofocus required>
    </div>
<div class="mb-3">
    <lable for="fecha_nacimiento" class="form-label">Fecha nacimiento:<
    <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Ingrese fecha de nacimiento" value="<?php echo $fecha_nacimiento ?>" autofocus required>
</div>
<div class="mb-3">
    <lable for="p_a_p_a" class="form-label">P.A.P.A
    <input id="papa" type="number" step=0.1 name="p_a_p_a" class="form-control" placeholder="Ingresar P.A.P.A" onchange="verificar()" value="<?php echo $P_A_P_A ?>" autofocus required>
</div>
<input type="submit"  class="btn btn-success btn-block" name="Update" value="Update">

</form>
            </div>
        </div>
    </div>
</div>
 
  


    

