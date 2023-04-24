<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Cadena</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
        <h2 class="text-center">Cadena</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Nuevo</a>
        <table class="table text-center my-3">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">sede</th>
                    <th scope="col">Director</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('../config/conexion.php');
                $sql = $conexion->query("SELECT * FROM cadena
                INNER JOIN director ON cadena.id_dire = director.id_dire
                INNER JOIN empresa ON cadena.id_empr = empresa.id_empr
                ");
                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $resultado['id_cad'] ?></th>
                        <td><?php echo $resultado['sede'] ?></td>
                        <td><?php echo $resultado['nombres'] ?></td>
                        <td><?php echo $resultado['nombreC'] ?></td>
                        <td><?php echo $resultado['nombreE'] ?></td>
                        <td>
                            <a class="btn btn-success" href="./actualizarCadena.php?Id=<?php echo $resultado['id_cad']?>">Editar</a>
                            <a class="btn btn-danger" href="../crud/eliminarCadena.php?id=<?php echo $resultado['id_cad']?>">Eliminar</a>
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
                    <form action="../crud/insertarCadena.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Sede:</label>
                            <input type="text" class="form-control" placeholder="Ingresa la sede" name="txtSede">
                            <div class="mb-3">
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
                                <label class="form-label">Nombre de la cadena:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el nombre de la cadena" name="txtCadena">
                                <label for="disabledSelect" class="form-label">Empresa:</label>
                                <select id="disabledSelect" class="form-select" name="empresa">
                                    <option selected disabled>Selecciona una opcion</option>
                                    <?php
                                    include("../config/conexion.php");
                                    $sql = $conexion->query("SELECT * FROM empresa");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['id_empr'] . "'>" . $resultado['nombreE'] . "</option>";
                                    }
                                    ?>
                                </select>
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