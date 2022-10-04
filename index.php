<?php include ("zulu.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
                    <form action="zulu.php" method="POST">
                        <div class="mb-3">
                            <lable for="id" class="form-label">id
                            <input type="number" name="id" class="form-control" placeholder="Ingrese id" autofocus required>
                        </div>
                        <div class="mb-3">
                            <lable for="Nombre" class="form-label">Nombre
                            <input type="text" name="Nombre" class="form-control" placeholder="Ingrese Nombre" autofocus required>
                            </div>
                        <div class="mb-3">
                            <lable for="fecha_nacimiento" class="form-label">Fecha nacimiento:<
                            <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Ingrese fecha de nacimiento" autofocus required>
                        </div>
                        <div class="mb-3">
                            <lable for="P_A_P_A" class="form-label">P.A.P.A
                            <input type="float" name="P_A_P_A" class="form-control" placeholder="Ingresar P_A_P_A" autofocus required>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>