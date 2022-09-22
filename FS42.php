<?php
session_start();
print($_SESSION["logging"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="FS1.css">
</head>
<body>
    <form action="FS4.php" method="POST" class="form">
        <div class="input-group">
        <label for="firstname"></label>
        USERNAME:<input type="text" name="username" id="username">
        <br>
        PASSWORD :<input type="password" name="password" id="password">
        <br><br>
        <p>If you don't have an account proceed to:
            <a href="FS3.html">Registering page</a>
        </p>
        
        </div>

        <input type="submit" value="LOG IN" class="submit-button">
    </form>
</body>
</html>