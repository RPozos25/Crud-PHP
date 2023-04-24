<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Franja</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
        <h2 class="text-center">Franja</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Nuevo</a>
        <table class="table text-center my-3">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Hora de inicio</th>
                    <th scope="col">Dia de la semana</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../config/conexion.php");
                $sql = $conexion->query("SELECT * FROM franja_h");
                while ($resultado = $sql->fetch_assoc()) {

                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado['id_franja'] ?></th>
                        <td><?php echo $resultado['hora_inicio'] ?></td>
                        <td><?php echo $resultado['dia_semana'] ?></td>
                        <td><?php echo $resultado['duracion'] ?></td>
                        <td>
                            <a class="btn btn-success" href="./actualizarFranja.php?Id=<?php echo $resultado['id_franja']?>">Actualizar</a>
                            <a class="btn btn-danger" href="../crud/eliminarFranja.php?id=<?php echo $resultado['id_franja']?>">Eliminar</a>
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
                    <form action="../crud/insertarFranja.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Hora de inicio:</label>
                            <input type="time" name="hora" required>
                            <div class="mb-3">
                                <label class="form-label">Dia de la semana:</label>
                                <select class="form-select" name="semana">
                                    <option selected disabled>Selecciona una opcion</option>
                                    <option value="Domingo">Domingo</option>";
                                    <option value="Lunes">Lunes</option>";
                                    <option value="Martes">Martes</option>";
                                    <option value="Miercoles">Miercoles</option>";
                                    <option value="Jueves">Jueves</option>";
                                    <option value="Viernes">Viernes</option>";
                                    <option value="Sabado">Sabado</option>";
                                </select>
                                <label class="form-label">Duración:</label>
                                <input type="text" class="form-control" placeholder="Ingresa la duración" name="txtDuracion">
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