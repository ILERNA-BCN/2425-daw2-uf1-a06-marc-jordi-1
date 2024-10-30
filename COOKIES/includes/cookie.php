<?php

    $cookie_name ="Color_escogido";

    if(isset($_REQUEST["color"])){
        $cookie_value = $_REQUEST["color"];
        setcookie($cookie_name, $cookie_value, time() + 3600, "/"); 
    } else if (isset($_REQUEST["colorPersonalitzat"])){
        $cookie_value = $_REQUEST["colorPersonalitzat"];  
        setcookie($cookie_name, $cookie_value, time() + 3600, "/");
    }

    header("Location: ../pagina4.php");
?>