<?php
session_start();
print($_SESSION["logging"]); 

if ($_SESSION["logging"]=="FALSE")
{
    //exit();
    header("Location: http://localhost/FS/FS4.html");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN </title>
    <link rel="stylesheet" href="FS1.css">
</head>
<body>
    <header>

    </header>
    <footer>
        <form action="FS1.php" method="POST" class="form">
            <div class="input-group">
            <label for="firstname"></label>
            FIRST NAME:<input type="text" name="firstname" id="fname">
            <br>
            LAST NAME :<input type="text" name="lastname" id="lname">
            <br>
            Email     :<input type="email" name="email" id="e_mail">
            <br>
            </div>
            
            <label for="country">COUNTRY</label>
            <select name="country" id="cntry">
                <option value="kenya">Kenya</option>
                <option value="somalia">Somalia</option>
                <option value="SA">South Africa</option>
                <option value="tanzania">Tanzania</option>
                <option value="nigeria">Nigeria</option>
            </select>
            <br>
            <input type="submit" value="REGISTER" class="submit-button">
 

        </form>

    </footer>
    
</body>
</html>