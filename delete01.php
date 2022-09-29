<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "12345678";
	$dbName = "mydb2";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strID = $_GET["id"];

	$sql = "DELETE FROM tb_sengine
			WHERE id = '".$strID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "Record delete successfully";
	}else{
         echo "Record delete doesn't successfully";
    }

	mysqli_close($conn);
?>
</body>
</html>

