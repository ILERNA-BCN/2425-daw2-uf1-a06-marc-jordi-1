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
    <h1>Tria color</h1>

    <form class="colorForm" action="includes/cookie.php" method="get">
        <div class="radioInputs" style:="display:block;">
            <label class="custom-radio">
                <input type="radio" name="color" value="#FFFF00">
            </label>
            <label class="custom-radio">
                <input type="radio" name="color" value="#FF7070">
            </label>
            <label class="custom-radio">
                <input type="radio" name="color" value="#00AAFF">
            </label>
            <label class="custom-radio">
                <input type="radio" name="color" value="#FF9500">
            </label>
        </div>
            <br/>
            <label class="customColor" style="width: 150px;">
                <input type="color" name="colorPersonalitzat" value="<?php if (isset($_COOKIE[$cookie_name])) echo $_COOKIE[$cookie_name]; else echo "#adfac6";?>">
            </label>
        <div class="submitColor" style="width: 20%;">
            <label class="pag4">
                <input type="submit">
            </label>
        </div>
    </form>
    <form class="colorForm" action="includes/cookie.php" method="get">
        <div class="submitColor" style="width: 10%;">
            <label class="pag4">
                <input type="submit" name="reset" value="Reset" style="margin-top: 10px;">
            </label>
        </div>
    </form>
<?php
    include("includes/footer.html");
?>