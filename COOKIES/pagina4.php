<?php
    $cookie_name = "Color";
    $cookie_value = "#FFFFFF";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    include("includes/header.html");
?>
    <h1>Tria color</h1>
    <style>
        html, body{
            background-color: <?php echo htmlspecialchars($cookie_value)?>;
        }
    </style>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
        <label class="custom-radio">
            <input type="radio" name="Colorvalue" value="#FFFF00">
        </label>
        <label class="custom-radio">
            <input type="radio" name="Colorvalue" value="#FF7070">
        </label>
        <label class="custom-radio">
            <input type="radio" name="Colorvalue" value="#00AAFF">
        </label>
        <label class="custom-radio">
            <input type="radio" name="Colorvalue" value="#FF9500">
        </label>
        <label>
            <input type="color" name="Colorvalue" value="#FFFFFF">
        </label>
        <label class="SubmitColor">
            <input type="submit">
        </label>
    </form>
    
<?php
    $cookie_value = $_POST[]
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    echo $cookie_name;
    echo $cookie_value;
    include("includes/footer.html");
?>