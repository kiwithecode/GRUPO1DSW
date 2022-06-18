<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tabla Menú</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php require '../partials/header.php' ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-left">
                                <h4> Listado Menú </h4>
                            </div>
                            <div>
                                <input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar menú...">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr>
                                        <th>ID Bar</th>
                                        <th>ID Menú</th>
                                        <th>Nombre Menú</th>
                                        <th>Precio Menú</th>
                                        <th>Disponibilidad Menú</th>
                                        <th>Descripción Menú</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bar central</td>
                                        <td>Desayuno</td>
                                        <td>Continental</td>
                                        <td>4.82</td>
                                        <td>20</td>
                                        <td>Leche, café, huevo revuelto c:, pan</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>