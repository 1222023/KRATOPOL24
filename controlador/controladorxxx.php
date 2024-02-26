<?php 

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) 
    and empty($_POST["password"])){
        echo "todo okey";
        #code...
       } else{
        echo "alguno de los campos esta vacio";
      #code...
        
    }
        
}

?>
