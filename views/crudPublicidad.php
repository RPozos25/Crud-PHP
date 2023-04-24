<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Publicidad</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
        <h2 class="text-center font-italic">Publicidad</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Nuevo</a>
        <table class="table text-center my-3">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Coste</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../config/conexion.php");
                $sql = $conexion->query("SELECT * FROM publicidad");
                while ($resultado = $sql->fetch_assoc()) {

                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['id_publicidad'] ?></th>
                        <td><?php echo $resultado['duracion'] ?></td>
                        <td><?php echo $resultado['coste'] ?></td>
                        <td>
                            <a class="btn btn-success" href="./actualizarPublicidad.php?Id=<?php echo $resultado['id_publicidad']?>">Actualizar</a>
                            <a class="btn btn-danger" href="../crud/eliminarPublicidad.php?id=<?php echo $resultado['id_publicidad']?>">Eliminar</a>
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
                    <form action="../crud/insertarPublicidad.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Duración:</label>
                            <input type="text" class="form-control" placeholder="Ingresa la duracion de la prublicidad" name="txtDuracion">
                            <div class="mb-3">
                                <label class="form-label">Coste:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el coste de la publicidad" name="txtCoste">
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