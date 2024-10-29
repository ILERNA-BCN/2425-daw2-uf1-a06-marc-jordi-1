<?php
    if(isset($_REQUEST["color"])) $cookie_value = $_REQUEST["color"];
    else if (isset($_REQUEST["colorPersonalitzat"])) $cookie_value = $_REQUEST["colorPersonalitzat"];
    else $cookie_value = "#FFFFFF";
    
    $cookie_name ="Color_escogido";

    setcookie($cookie_name, $cookie_value, time() + 3600, "/");
?>