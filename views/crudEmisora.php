<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Emisora</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
        <h2 class="text-center">Emisora</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Nuevo</a>
        <table class="table text-center my-3">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">CP</th>
                    <th scope="col">Banda_HZ</th>
                    <th scope="col">Director</th>
                    <th scope="col">NIF</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('../config/conexion.php');
                $sql = $conexion->query("SELECT * FROM emisora
                INNER JOIN director ON emisora.id_dire = director.id_dire
                ");
                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $resultado['id_emis'] ?></th>
                        <td><?php echo $resultado['nombre'] ?></td>
                        <td><?php echo $resultado['Direccion'] ?></td>
                        <td><?php echo $resultado['CP'] ?></td>
                        <td><?php echo $resultado['Banda_Hz'] ?></td>
                        <td><?php echo $resultado['nombres'] ?></td>
                        <td><?php echo $resultado['NIF'] ?></td>
                        <td><?php echo $resultado['Provincia'] ?></td>
                        <td>
                            <a class="btn btn-success" href="./actualizarEmisora.php?Id=<?php echo $resultado['id_emis']?>">Editar</a>
                            <a class="btn btn-danger" href="../crud/eliminarEmisora.php?id=<?php echo $resultado['id_emis']?>">Eliminar</a>
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
                    <form action="../crud/insertarEmisora.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" class="form-control" placeholder="Ingresa el nombre de la emisora" name="txtNombre">
                            <div class="mb-3">
                                <label class="form-label">Direccion:</label>
                                <input type="text" class="form-control" placeholder="Ingresa la direccion" name="txtDireccion">
                                <label class="form-label">Codigo Postal:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el codigo postal" name="txtCodigoPostal">
                                <label class="form-label">Banda HZ:</label>
                                <input type="text" class="form-control" placeholder="Ingresa la banda hz" name="txtBanda">
                                <label for="disabledSelect" class="form-label">Director:</label>
                                <select id="disabledSelect" class="form-select" name="director">
                                    <option selected disabled>Selecciona una opcion</option>
                                    <?php
                                    include("../config/conexion.php");
                                    $sql = $conexion->query("SELECT * FROM director");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['id_dire'] . "'>" . $resultado['nombres'] . "</option>";
                                    }
                                    ?>
                                </select>
                                <label class="form-label">NIF:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el NIF" name="txtNif">
                                <label class="form-label">Provincia:</label>
                                <input type="text" class="form-control" placeholder="Ingresa " name="txtProvincia">
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