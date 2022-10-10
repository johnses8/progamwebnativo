<?php include_once 'zulu.php'; 
    if(isset($_GET['eliminado'])){
        $message='<strong class="alert alert-danger" role="alert">Usuario eliminado</strong></br>';
    }
    else{
        $message='';
    }
    if(isset($_GET['guardado'])){
        $message1='<strong class="alert alert-success" role="alert">Usuario guardado</strong></br>';
    }else{
        $message1='';
    }
    if(isset($_GET['actualizado'])){
        $message2='<strong class="alert alert-primary" role="alert">Usuario actualizado</strong></br>';
    }
    else{
            $message2='';

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
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">CRUD PHP</a>
        </div>
    </nav>

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
                    <?php
                        echo $message;
                        echo $message1;
                        echo $message2;
                    
                    ?>
                    <form action="save_task.php">
                        <div class="mb-3">
                            <lable for="id" class="form-label">id
                            <input type="number" name="id" class="form-control" placeholder="Ingrese id" autofocus required>
                        </div>
                        <div class="mb-3">
                            <lable for="nombre" class="form-label">Nombre
                            <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre" autofocus required>
                            </div>
                        <div class="mb-3">
                            <lable for="fecha_nacimiento" class="form-label">Fecha nacimiento:<
                            <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Ingrese fecha de nacimiento" autofocus required>
                        </div>
                        <div class="mb-3">
                            <lable for="p_a_p_a" class="form-label">P.A.P.A
                            <input id="papa" type="number" step=0.1 name="p_a_p_a" class="form-control" placeholder="Ingresar P.A.P.A" onchange="verificar()" autofocus required>
                        </div>
                        <input type="submit"  class="btn btn-success btn-block" name="save_task" value="Save Task">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="verificar.js"></script>
</body>
</html>