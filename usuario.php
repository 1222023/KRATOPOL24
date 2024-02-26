<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud en php mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/54747db56e.js" crossorigin="anonymous"></script>

</head>
<body>
    <h1 class="text-center p-3"> Registro de Usuarios </h1>
        <div class="container-Fluid row">
        <form class="col-4 p-3" method ="POST">
            <h3 class="text-center text-secondary"> Registro de persona </h3>

            <?php
                include "modelo/conexion.php";
                include "controlador/registro_persona.php";

                ?>


            <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">NOMBRE USUARIO</label>
    <input type="text" class="form-control" name="nombre">
     </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">APELLIDO</label>
    <input type="text" class="form-control" name="apellido">
     </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NUMERO DE CIP</label>
    <input type="text" class="form-control" name="cip">
     </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CLAVE</label>
    <input type="text" class="form-control" name="clave">
     </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">correo</label>
    <input type="text" class="form-control" name="correo">
     </div>
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">registrar</button>
</form>
    <div class="col-8 p-4">
         <table class="table">
             <thead class="bg-info">
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">cip</th>
                    <th scope="col">clave</th>
                    <th scope="col">correo</th>
                    <th scope="col"> Acciones </th>
                    </tr>
               </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql= $conexion->query ("select* from login");
                    while ($datos=$sql->fetch_object()) {?>
                    <tr>
                    <td><?= $datos->ID_CIP ?></td>       
                    <td><?= $datos->nombre ?></td>
                    <td><?= $datos->apellido ?></td>
                    <td><?= $datos->cip ?></td>
                    <td><?= $datos->clave ?></td>
                    <td><?= $datos->correo ?></td>
       
                    <td>
                        <a href="modificar_persona.php? ID_CIP=<?= $datos->ID_CIP ?>" class="btn btn-small btn-warning"> <i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn btn-small btn-danger"> <i class="fa-solid fa-trash"></i></a>
                        </td>
                       </tr>
                    <?php }
               ?>
         </tbody>
       </table>
   </div>
</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>