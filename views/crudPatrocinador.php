<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php");?>
    <title>Patrocinador</title>
</head>
<body>
    <?php include("./barra.php");?>
    <div class="container">
        <h2 class="text-center">Patrocinador</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Nuevo</a>
        <table class="table text-center my-3">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Apellido P</th>
                    <th scope="col">Apellido M</th>
                    <th scope="col">nombre</th>
                    <th scope="col">contrato</th>
                    <th scope="col">duracion</th>
                    <th scope="col">importe_contrato</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../config/conexion.php");
                $sql = $conexion->query("SELECT * FROM patrocinador");
                while ($resultado = $sql->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['id_patr'] ?></th>
                        <td><?php echo $resultado['a_pat'] ?></td>
                        <td><?php echo $resultado['a_mat'] ?></td>
                        <td><?php echo $resultado['nombresP'] ?></td>
                        <td><?php echo $resultado['No_contrato'] ?></td>
                        <td><?php echo $resultado['duracion'] ?></td>
                        <td><?php echo $resultado['importe_contrato'] ?></td>
                        <td>
                            <a class="btn btn-success" href="./actualizarPatrocinador.php?Id=<?php echo $resultado['id_patr']?>">Actualizar</a>
                            <a class="btn btn-danger" href="../crud/eliminarPatrocinador.php?id=<?php echo $resultado['id_patr']?>">Eliminar</a>
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
                    <form action="../crud/insertarPatrocinador.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Apellido Paterno:</label>
                            <input type="text" class="form-control" placeholder="Ingresa el Apellido Paterno" name="txta_pat">
                            <div class="mb-3">
                                <label class="form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el Apellido Materno" name="txta_mat">
                                <label class="form-label">Nombre del responsable:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el nombre del responsable" name="txtNombres">
                                <label class="form-label">contrato:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el No de contrato" name="txtContrato">
                                <label class="form-label">duracion:</label>
                                <input type="text" class="form-control" placeholder="Ingresa la duracion" name="txtDuracion">
                                <label class="form-label">importe_contrato:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el importe" name="txtImporte">
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