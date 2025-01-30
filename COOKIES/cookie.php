<?php

    $cookie_name ="Color_escogido";

    if(isset($_REQUEST["color"])){
        $cookie_value = $_REQUEST["color"];
        setcookie($cookie_name, $cookie_value, time() + 3600, "/"); 
    } else if (isset($_REQUEST["color_perso"]) && isset($_REQUEST["perso_checkbox"])){
        $cookie_value = $_REQUEST["color_perso"];  
        setcookie($cookie_name, $cookie_value, time() + 3600, "/");
    } else if (isset($_REQUEST["reset"])){
        setcookie($cookie_name, $cookie_value, time() - 1, "/");
    }
    header("Location: pagina4.php");
?>