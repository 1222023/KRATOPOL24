<?php   
if(!empty($_POST["btnregistrar"])) {
    echo "boton funciona  presionado";
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) 
    and !empty($_POST["cip"]) and!empty($_POST["clave"]) 
and !empty($_POST["correo"])){
    $id=$_POST["ID_CIP"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cip=$_POST["cip"];
    $clave=$_POST["clave"];
    $correo=$_POST["correo"];

    $sql= $conexion->query (" update login set nombre='$nombre',apellido='$apellido',cip='$cip',clave='$clave',correo='$correo'
         where ID_CIP=$id");
  if($sql==1){
    header("location:usuario.php");
  }else {
    echo "<div class='alert alert-danger'>ERROR MODIFICAR</div>";
 }

}else{
    echo "<div class='alert alert-warning'>campo vacios</div>";
 }
}
 ?>