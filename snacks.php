<?php 

	$conexion=mysqli_connect('localhost','root','','grupo1dsw');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    
<br>

<table border="1" >
    <tr>
        <td>ID BAR</td>
        <td>ID</td>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Disponible</td>	
    </tr>

    <?php 
    $sql="SELECT * from snack";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>
        <td><?php echo $mostrar['bar_id'] ?></td>
        <td><?php echo $mostrar['sna_id'] ?></td>
        <td><?php echo $mostrar['sna_nombre'] ?></td>
        <td><?php echo $mostrar['sna_precio'] ?></td>
        <td><?php echo $mostrar['sna_disponible'] ?></td>
    </tr>
<?php 
}
 ?>
</table>

</body>
</html>