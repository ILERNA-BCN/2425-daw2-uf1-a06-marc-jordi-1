<?php
    include("includes/header.html");
?>
 <h1>Pàgina 5 </h1>
 <h1>Tria un dels 4 colors</h1>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 5</title>
    <style>
        body {
            background-color: <?php echo isset($_POST['color']) ? $_POST['color'] : '#FFFFFF'; ?>;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .color-options {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .color-option {
            width: 50px;
            height: 50px;
            cursor: pointer;
            border: 2px solid #000;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <form method="post" action="pagina5.php">
        <div class="color-options">
            <label>
                <input type="radio" name="color" value="#FF5733" required>
                <div class="color-option" style="background-color: #FF5733;"></div>
            </label>
            <label>
                <input type="radio" name="color" value="#33FF57" required>
                <div class="color-option" style="background-color: #33FF57;"></div>
            </label>
            <label>
                <input type="radio" name="color" value="#3357FF" required>
                <div class="color-option" style="background-color: #3357FF;"></div>
            </label>
            <label>
                <input type="radio" name="color" value="#F0FF33" required>
                <div class="color-option" style="background-color: #F0FF33;"></div>
            </label>
        </div>
        <button type="submit" name="change_color">Enviar</button>
        <button type="submit" name="reset" value="reset">Reset</button>
    </form>

    <?php
        if (isset($_POST['reset'])) {
            echo "<style>body { background-color: #FFFFFF; }</style>";
        }
    ?>
</body>
</html>
<?php
    include("includes/footer.html");
?>