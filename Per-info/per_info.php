<?php
Session_Start();
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


$user = $_SESSION['user'];



$name = $obj['name'];
$age = $obj['age'];
$major = $obj['major'];
$sex = $obj['sex'];

$sql1 = "SELECT * From test.per_info WHERE username == '$user'";

$result = mysqli_query($conn,$sql1);

// if(!$result)
// {
// 	echo "not exist";
// 	$sql = "UPDATE test.per_info SET name = '$name' ,age = '$age' , major = '$major' , sex = '$sex' WHERE username = '$user'";
// }
// else
// {
	echo "exist";
	$sql = "INSERT INTO test.per_info (username,name,age,major,sex) VALUES('$user','$name','$age','$major','$sex') ON DUPLICATE KEY UPDATE username = '$user',name = '$name' ,age = '$age' , major = '$major' , sex = '$sex'";
	
// }
mysqli_query($conn,$sql);


