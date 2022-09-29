<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
/*
    echo "รหัส".$_POST["txtId"]."<br>";
    echo "หัวข้อ".$_POST["txtTitle"]."<br>";
    echo "รายละเอียด".$_POST["txtDescription"]."<br>";
    echo "คีย์".$_POST["txtKeywords"]."<br>";
    echo "ลิงค์".$_POST["txtLink"]."<br>";
*/

	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "12345678";
	$dbName = "mydb2";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

    // a+=1 ; a=a+1
    // a.=b ; a=a+b

	$sql = "INSERT INTO tb_sengine (id, title, description, keywords, link)";
    $sql .= " VALUES";
    $sql .= "(".$_POST["txtId"].",";  //int
    $sql .= "'".$_POST["txtTitle"]."',";
    $sql .= "'".$_POST["txtDescription"]."',";
    $sql .= "'".$_POST["txtKeywords"]."',";
    $sql .= "'".$_POST["txtLink"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "Record add successfully";
	}

	mysqli_close($conn);
    
 ?>
</body>
</html>