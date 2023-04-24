<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php");?>
    <title>Empresa</title>
</head>
<body>
    <?php include("./barra.php");?>
    <div class="container">
        <h2 class="text-center">Empresa</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Nuevo</a>
        <table class="table text-center my-3">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Patrocinador</th>
                    <th scope="col">Director</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">CP</th>
                    <th scope="col">NIF</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('../config/conexion.php');
                $sql = $conexion->query("SELECT * FROM empresa
                INNER JOIN patrocinador ON empresa.id_patr = patrocinador.id_patr
                INNER JOIN director ON empresa.id_dire = director.id_dire
                ");
                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $resultado['id_empr'] ?></th>
                        <td><?php echo $resultado['nombreE'] ?></td>
                        <td><?php echo $resultado['nombresP'] ?></td>
                        <td><?php echo $resultado['nombres'] ?></td>
                        <td><?php echo $resultado['direccion'] ?></td>
                        <td><?php echo $resultado['CP'] ?></td>
                        <td><?php echo $resultado['NIF'] ?></td>
                        <td>
                            <a class="btn btn-success" href="./actualizarEmpresa.php?Id=<?php echo $resultado['id_empr']?>">Editar</a>
                            <a class="btn btn-danger" href="../crud/eliminarEmpresa.php?id=<?php echo $resultado['id_empr']?>">Eliminar</a>
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
                    <form action="../crud/insertarEmpresa.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" class="form-control" placeholder="Ingresa el nombre de la empresa" name="txtNombre">
                            <div class="mb-3">


                            <label for="disabledSelect" class="form-label">Patrocinador:</label>
                                <select id="disabledSelect" class="form-select" name="patrocinador">
                                    <option selected disabled>Selecciona una opcion</option>
                                    <?php
                                    include("../config/conexion.php");
                                    $sql = $conexion->query("SELECT * FROM patrocinador");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['id_patr'] . "'>" . $resultado['nombresP'] . "</option>";
                                    }
                                    ?>
                                </select>



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
                                
                            
                            
                            
                                <label class="form-label">Direccion:</label>
                                <input type="text" class="form-control" placeholder="Ingresa la direccion" name="txtDireccion">
                                <label class="form-label">Codigo Postal:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el codigo postal" name="txtCodigo">
                                <label class="form-label">NIF:</label>
                                <input type="text" class="form-control" placeholder="Ingresa el NIF" name="txtNif">
                                
                                
                                
                                
                                
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