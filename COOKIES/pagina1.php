<?php
    include("includes/cookie.php");
    include("includes/header.html");
?>
    <style>
        html, body{
            background-color: <?php echo $_COOKIE[$cookie_name];?>
        }
    </style>
<body>
    <nav>
        <a href="pagina1.php">Pàgina 1</a> <a href="pagina2.php">Pàgina 2</a> <a href="pagina3.php">Pàgina 3</a> <a href="pagina4.php">Pàgina 4</a>
    </nav>
    <br/><br/>
    <h1>PÀGINA 1</h1>
    <form action="formulari.php" method="GET">
        <table>
            <tr>
                <td><label for="nom">Nom</label></td>
                <td><input id="nom" name="nom" type="text" size="20"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
    
<?php
    include("includes/footer.html");
?>