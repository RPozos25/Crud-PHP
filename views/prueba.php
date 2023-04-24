<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Document</title>
</head>

<body>
    <a href="" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary">Nuevo</a>

    <div class="modal" tabindex="-1" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Duración</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="hh:">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Coste</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <input type="time" id="appt" name="appt">


</body>

</html>