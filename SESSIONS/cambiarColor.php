<?php
    include("pagina4.php");

    if(isset($_REQUEST["color"])){
        $_SESSION["color_escogido"] = $_REQUEST["color"];
    } else if (isset($_REQUEST["color_perso"]) && isset($_REQUEST["perso_checkbox"])){
        $_SESSION["color_escogido"] = $_REQUEST["color_perso"];
    } else if (isset($_REQUEST["reset"])){
        session_destroy();
    }

header("location: pagina4.php");
?>