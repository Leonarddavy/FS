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


$Username = $_POST['username'];
$Password = $_POST['password'];
$Cpassword = $_POST['c_password'];
//$Admin = $_POST['admin'];

$sql = "INSERT INTO user_authentication (username, password_1, password_2)
VALUES ('$Username', '$Password', '$Cpassword')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("Location: http://localhost/FS/FS4.html");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>
