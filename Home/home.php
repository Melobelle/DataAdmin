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
$user = $_SESSION['user'];
$sql = "SELECT * FROM test.per_info WHERE username = '$user' ";
$result = mysqli_query($conn,$sql);

if (!$result) {
 echo "wrong";
 return;
}

while ($row = mysqli_fetch_array($result)) {
	$data = [];
	$data['n'] = $row['name'];
	$data['age'] = $row['age'];
	$data['major'] = $row['major'];
	$data['sex'] = $row['sex'];
	echo json_encode($data);
	return;
}
return;






