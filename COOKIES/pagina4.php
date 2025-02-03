<?php
    include("includes/header.html");
?>
    <style>
        html, body{
            background-color: <?php echo $_COOKIE["Color_escogido"];?>
        }
    </style>
<body>
    <nav>
    <a href="pagina1.php">Pàgina 1</a> <a href="pagina2.php">Pàgina 2</a> <a href="pagina3.php">Pàgina 3</a> <a href="pagina4.php">Pàgina 4</a>
    </nav>
    <br/><br/>
    <h1>Tria color de fons</h1>
    <form class="colorForm" action="cookie.php" method="get">
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
            <input type="color" name="color_perso" value="<?php if(isset($_COOKIE["Color_escogido"])){echo $_COOKIE["Color_escogido"];}else{echo "#adfac6";};?>">
        </label>
        <br/>
        <input type="submit" style="width: 200px;">
        <input type="submit" name="reset" value="Reset" style="margin-top: 10px; width: 100px;">
    </form>
<?php
    include("includes/footer.html");
?>