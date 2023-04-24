<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Programa</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
        <h2 class="text-center">Programa</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Nuevo</a>
        <table class="table text-center my-3">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido p</th>
                    <th scope="col">Apellido m</th>
                    <th scope="col">Nombre del Responsable</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../config/conexion.php");
                $sql = $conexion->query("SELECT * FROM programa");
                while ($resultado = $sql->fetch_assoc()) {

                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['id_progr'] ?></th>
                        <td><?php echo $resultado['nombre'] ?></td>
                        <td><?php echo $resultado['ap_patRes'] ?></td>
                        <td><?php echo $resultado['ap_matRes'] ?></td>
                        <td><?php echo $resultado['Nombres_Resp'] ?></td>
                        <td>
                            <a class="btn btn-success" href="./actualizarPrograma.php?Id=<?php echo $resultado['id_progr']?>">Actualizar</a>
                            <a class="btn btn-danger" href="../crud/eliminarPrograma.php?id=<?php echo $resultado['id_progr']?>">Eliminar</a>
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
                    <form action="../crud/insertarPrograma.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" class="form-control" placeholder="Ingresa el nombre del programa" name="txtPrograma">
                            <div class="mb-3">
                                <label class="form-label">Apellido paterno:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el apelido parterno del responsable" name="txtAp_patRes">
                                <label class="form-label">Apellido materno:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el apelido marterno del responsable" name="txtAp_matRes">
                                <label class="form-label">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el nombre del responsable" name="txtNombreResponsable">
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