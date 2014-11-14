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




$data = [];
$data['status'] = false;

$Lusername = $_POST['username'];
$Lpassword = $_POST['password'];


if(!empty($Lusername))
$_SESSION['user'] = $Lusername;


$sql = "SELECT * FROM test.login_info";

$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($result))
{
	if($Lusername == $row['username'] && $Lpassword == $row['password'])
	{
		$resulta = array("status" => 1);
		$data['status'] = true;
		echo json_encode($data);
		return;
	}
	// echo $row['username'].''.$row['password'];
	// echo "<br/>";
}
echo json_encode($data);
return;





