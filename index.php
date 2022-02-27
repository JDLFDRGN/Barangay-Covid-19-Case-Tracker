<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<style>";
        include "style.css";
        echo "</style>";
    ?>
    <div class="login-container" style="text-align: center">
        <div id="login-form" style="height: inherit; width: inherit">
        <h1>Covid Tracker</h1>      
            <form id="login">         
                <div>
                    <input id="username" type="text" placeholder="Enter username">
                    <input id="password" type="password" placeholder="Enter password">
                </div>
                <input type="submit" value="Enter">
            </form>
        </div>
    </div>
</body>
</html>
<?php
     echo "<script>";
     include "script.js";
     echo "</script>"
?>