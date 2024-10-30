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
    <h1>PÀGINA 2</h1>
    <table>
            <tr>
                <td><p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Vivamus placerat, arcu quis tempus gravida, odio magna luctus arcu, ut bibendum turpis urna eu lorem. In laoreet semper odio vel pretium. Donec molestie eget est sed facilisis. Suspendisse consectetur non lacus nec sollicitudin. Morbi tempor, lorem id sodales tincidunt, sem mauris imperdiet magna, at dictum ex massa eu odio. Aliquam sagittis ligula sed porta finibus. Donec vel mauris nec nisi malesuada volutpat non vitae nulla. Vivamus felis nulla, laoreet non vestibulum vitae, imperdiet ut odio. Integer vitae turpis diam. Suspendisse volutpat ligula ante, nec convallis neque sagittis nec. Curabitur sodales, justo in laoreet consectetur, libero nisl laoreet nulla, non congue ligula risus vitae lorem.</p></td>
        </tr>
    </table>
    
<?php
    include("includes/footer.html");
?>