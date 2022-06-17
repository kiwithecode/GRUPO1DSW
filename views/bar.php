<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tabla Bar</title>
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
                <h4> Listado Bar </h4>
              </div>
              <div>
                <input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar bar...">
              </div>
            </div>
          </div>

          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-bordered table-sm">
                <thead class="thead">
                  <tr>
                    <th>ID Campus</th>
                    <th>ID Bar</th>
                    <th>Nombre Bar</th>
                    <th>Abierto</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Belisario Quevedo</td>
                    <td>Bar central</td>
                    <td>Bar pepito</td>
                    <td>Abierto</td>
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