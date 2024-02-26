
<?php
include "modelo/conexion.php";
$id=$_GET["ID_CIP"];
 $sql=$conexion->query ("select* from login where ID_CIP=$id");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<form class="col-4 p-3 m-auto" method ="POST">
 <h3 class="text-center text-secondary"> modificar de persona </h3>
    
 <?php
include "controlador/modificar_persona.php";
     while($datos =$sql->fetch_object()) { ?>
    <div class="mb-3">
<label for="exampleInputEmail1" class="form-label">nombre de la persona</label>
<input type="text" class="form-control" name="nombre" value="<?=$datos->nombre?>">
</div>
<div class="mb-1">
<label for="exampleInputEmail1" class="form-label">Apellido d ela persona</label>
<input type="text" class="form-control" name="Apellido"value="<?=$datos->apellido?>">
</div>
<div class="mb-1">
<label for="exampleInputEmail1" class="form-label">NUMERO DE CIP</label>
<input type="text" class="form-control" name="cip"value="<?=$datos->cip?>">
</div>
<div class="mb-1">
<label for="exampleInputEmail1" class="form-label">CLAVE</label>
<input type="text" class="form-control" name="clave"value="<?=$datos->clave?>">
</div>
<div class="mb-1">
<label for="exampleInputEmail1" class="form-label">correo</label>
<input type="text" class="form-control" name="correo"value="<?=$datos->correo?>">
</div>
    <?php }
     ?>


 
<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar usuario</button>
</form>
</body>
</html>