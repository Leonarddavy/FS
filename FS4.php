<?php
session_start();
$_SESSION["logging"] = "TRUE";

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


  $Username = $_POST['username'];
  $Password = $_POST['password'];

  $sql = "SELECT * FROM user_authentication";
  $result = $conn->query($sql);

  
   
  while($row = $result->fetch_assoc()) {
   if ($Username == $row['username'] && $Password == $row['password_1'])
   {
    //$_SESSION["logging"] = "TRUE";

    header("Location: http://localhost/FS/FS.php");
   }else{
    //$_SESSION["logging"] = "FALSE";
    header("Location: http://localhost/FS/FS42.php");
   }
    
}


?>
