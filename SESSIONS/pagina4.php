<?php
    include("includes/header.html");
    require("session.php");
?>
 <h1>Pàgina 4 </h1>
 <h1>Tria un dels 4 colors</h1>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 5</title>
    <link rel="Stylesheet" href="../COOKIES/styles/style.css">
<?php
    if(!isset($_SESSION["color_escogido"])){
        $_SESSION["color_escogido"] = "#adfac6";
    }
?>
    <style>
        body {
            background-color: <?php echo $_SESSION["color_escogido"];;?>;
        }
    </style>
</head>
<body>
<form class="colorForm" action="cambiarColor.php" method="get">
        <table>
            <tr style="height: 30px;">
                <td><input type="radio" name="color" value="yellow"></td>
                <td><input type="radio" name="color" value="#FF7070"></td>
                <td><input type="radio" name="color" value="#00AAFF"></td>
                <td><input type="radio" name="color" value="#FF9500"></td>
            </tr>
            <tr style="height: 60px;">
                <td style="background-color: #FFFF00;"></td>
                <td style="background-color: #FF7070;"></td>
                <td style="background-color: #00AAFF;"></td>
                <td style="background-color: #FF9500;"></td>
            </tr>
        </table>
        <br/>
        <label for="perso_color">Utilitzar color personlitzat
            <input type="checkbox" id="perso_color" name="perso_checkbox">
            <input type="color" name="color_perso" value="<?php echo $_SESSION["color_escogido"];?>">
        </label>
        <br/>
        <input type="submit" style="width: 200px;">
        <input type="submit" name="reset" value="Reset" style="margin-top: 10px; width: 100px;">
    </form>
</body>
</html>
<?php
    include("includes/footer.html");
?>