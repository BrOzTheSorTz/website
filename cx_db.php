<?php

    $enlace = mysqli_connect("localhost", "root","");

    mysqli_select_db($enlace, "formulario");
    if(!$enlace){
        echo "No connected";
    }

?>