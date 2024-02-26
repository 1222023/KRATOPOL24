
<?php   
if(!empty($_POST["btnregistrar"] )) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) 
    and !empty($_POST["cip"]) and!empty($_POST["clave"]) 
and !empty($_POST["correo"])) {

    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cip=$_POST["cip"];
    $clave=$_POST["clave"];
    $correo=$_POST["correo"];

    $sql= $conexion->query (" insert into login (nombre,apellido,cip,clave,correo)
         values('$nombre','$apellido','$cip',
        '$clave','$correo')");
        
        if($sql==1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
          echo  '<div class="alert alert-danger">Persona NO registrada </div>';
        }
 }else {
    echo  '<div class="alert alert-warning">alguno d elos campo esta vacio </div>';
 }
}

?>
