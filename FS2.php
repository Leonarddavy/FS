<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname="citizenship";
$port =3308;

$conn =new mysqli($servername,$username,$password,$dbname,$port);        

 if($conn -> connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }
 else
  {
   echo "HI FINTCH"."<br>";
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>

    </header>
    <footer>
        <table border="4"> 
            <caption><h2>CITIZENSHIP CANDIDATE<hr></h2> </caption>
             <tr>                             
                 <th>Firstname</th>            
                 <th>Lastname</th>        
                 <th>Email</th>
                 <th>Country</th>
             </tr>
             <?php
             $sql = "SELECT * FROM Registration";
             $result = $conn->query($sql);
              
             while($row = $result->fetch_assoc()) {
             echo "<tr>
                 <td>". $row["first_name"] ."</td>
                 <td>". $row["last_name"] ."</td>
                 <td>". $row["email"] ."</td>
                 <td>". $row["country"] ."</td>
             </tr>";
             }
             ?>
           
    </footer>
    
</body>
</html>