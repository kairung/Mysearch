<html>
<head>
<title>MySearch Engine</title>
</head>
<body>
<?php
$objConnect = mysql_connect("127.0.0.1","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("mydb2");

$strSQL="INSERT INTO `Tb1`(`id`) VALUES (3)";

$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "บันทึกข้อมูลเรียบร้อยแล้ว";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>