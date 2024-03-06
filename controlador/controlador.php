<?php 

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) 
    and empty($_POST["password"])){
        echo '<div class="alert alert-danger">los campos estan vacio</div>';
      
       } else{
            $usuario = $_POST['usuario'];
            $clave= $_POST['password'];
            $sql= $conexion->query("select * from login where cip='$usuario' and clave='$clave'");
          if ($datos=$sql->fetch_object()) {
            header("location:usuario.php");
    } else{
      echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';

    }
        
}
}
?>
