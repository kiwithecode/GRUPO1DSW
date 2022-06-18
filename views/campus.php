<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tabla Campus</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<style>
  body {
    background-image: url("https://c4.wallpaperflare.com/wallpaper/1015/628/1024/tomato-hamburger-patty-sandwich-wallpaper-preview.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<body>
    <?php require '../partials/header.php' ?>
    <br><br>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-left">
                                <h4> Listado Campus </h4>
                            </div>
                            <div>
                                <input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar campus...">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr>
                                        <th>ID Campus</th>
                                        <th>Nombre Campus</th>
                                        <th>Dirección</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Belisario Quevedo</td>
                                        <td>Guillermo Rodriguez Lara</td>
                                        <td>Belisario Quevedo</td>
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