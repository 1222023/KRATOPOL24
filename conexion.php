<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $enlace = mysqli_connect("localhost","root","","kratopol24");
    if(!$enlace){
        die("no pudo conectarse a la base de datos".mysqli_error());
    }
    echo "conexion exitosa";
    mysqli_close($enlace);
?>
    </body>
</html>