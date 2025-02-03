<?php
    include("includes/header.html");
    require("session.php");
?>
<style>
            body {
            background-color: <?php echo $_SESSION["color_escogido"]; ?>;
        }
</style>
    <h1>PÀGINA 3</h1>
    <table>
            <tr>
                <td><img src="images/logo.png"></td>
        </tr>
    </table>
    
<?php
    include("includes/footer.html");
?>