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
    <h1 class="text-center p-3"> hola mundo </h1>
        <div class="container-Fluid row">
        <form class="col-4 p-3">
            <h3 class="text-center text-secondary"> Registro de persona </h3>
    
            <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">nombre de la persona</label>
    <input type="text" class="form-control" name="nombre">
     </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido d ela persona</label>
    <input type="text" class="form-control" name="Apellido">
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
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>
    <div class="col-8 p-4">
         <table class="table">
             <thead class="bg-info">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">cip</th>
                    <th scope="col">clave</th>
                    <th scope="col">correo</th>
                    <th scope="col">correo</th>
                    </tr>
               </thead>
                <tbody>
                    <tr>

                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href="" class="btn btn-small btn-warning"> <i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn btn-small btn-danger"> <i class="fa-solid fa-trash"></i></a>
                    </td>
                    </tr>
    
  </tbody>
</table>



    </div>
</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>