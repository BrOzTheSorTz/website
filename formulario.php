<?php 

    include("cx_db.php");

    
    if(isset($_POST['registrarse'])){
        $name = trim($_POST['user']);
        $email = trim($_POST['email']);
        $mensaje = trim($_POST['mensaje']);
    
        $insertarDatos = "INSERT INTO datos(nombre,email,mensaje) VALUES('$name','$email', '$mensaje')";
    
        $ejecutarInsertar = mysqli_query($enlace ,$insertarDatos);
    
        if(!$ejecutarInsertar){
            echo "hay un problema con los datos del formulario";
        }
    
    
    }
?>