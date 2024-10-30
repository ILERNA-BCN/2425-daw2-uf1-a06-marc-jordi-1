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
    <a href="pagina1.php">Pàgina 1</a> <a href="pagina2.php">Pàgina 2</a> <a href="pagina3.php">Pàgina 3</a> <a href="pagina4.php">Pàgina 4</a>   <a href="pagina5.php">Pàgina 5</a>
    </nav>
    <br/><br/>
    <h1>PÀGINA 3</h1>
    <table>
            <tr>
                <td><img src="images/logo.png"></td>
        </tr>
    </table>
    
<?php
    include("includes/footer.html");
?>