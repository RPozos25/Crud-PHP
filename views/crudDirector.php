<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php");?>
    <title>Director</title>
</head>
<body>
    <?php include("./barra.php");?>
    <div class="container">
        <h2 class="text-center">Director</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Nuevo</a>
        <table class="table text-center my-3">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../config/conexion.php");
                $sql = $conexion->query("SELECT * FROM director");
                while ($resultado = $sql->fetch_assoc()) {

                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['id_dire'] ?></th>
                        <td><?php echo $resultado['nombres'] ?></td>
                        <td><?php echo $resultado['ap_pat'] ?></td>
                        <td><?php echo $resultado['ap_mat'] ?></td>
                        <td>
                            <a class="btn btn-success" href="./actualizarDirector.php?Id=<?php echo $resultado['id_dire']?>">Actualizar</a>
                            <a class="btn btn-danger" href="../crud/eliminarDirector.php?id=<?php echo $resultado['id_dire']?>">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="modal" tabindex="-1" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../crud/insertarDirector.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" class="form-control" placeholder="Ingresa el nombre del director" name="txtNombreD">
                            <div class="mb-3">
                                <label class="form-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el apellido paterno" name="txtaPD">
                                <label class="form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el apellido Materno" name="txtaMD">
                                <button type="submit" class="btn btn-primary my-3">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>