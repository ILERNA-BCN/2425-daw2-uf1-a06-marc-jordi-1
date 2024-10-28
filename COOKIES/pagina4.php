<?php
    include("includes/cookie.php");
    include("includes/header.html");
?>
    <style>
        html, body{
            background-color: <?php if(isset($_REQUEST["color"])) echo $_REQUEST["color"]; else if (isset($_REQUEST["colorPersonalitzat"])) echo $_REQUEST["colorPersonalitzat"];?>
        }
    </style>
<body>
    <h1>Tria color</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
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
        <label>
            <input type="color" name="colorPersonalitzat" value="<?php if(!isset($_REQUEST["color"])) echo "#adfac6"; else echo $_COOKIE[$cookie_name]?>">
        </label>
        <label class="SubmitColor">
            <input type="submit">
        </label>
    </form>
<?php
    include("includes/footer.html");
?>