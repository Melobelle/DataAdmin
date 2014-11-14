

<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "441248818.";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$obj = $_POST;

$Rusername = $obj['username'];
$Rpassword = $obj['password'];
$Rname = $obj['name'];
$Remail = $obj['email'];



$sql = "INSERT INTO test.login_info (username,password,name,email) VALUES('$Rusername','$Rpassword','$Rname','$Remail')";


$result = mysqli_query($conn,$sql);



?>