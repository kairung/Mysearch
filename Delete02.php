<html>
<head>
<title>Delete Data</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("mydb2");
$strSQL = "DELETE FROM tb_sengine ";
$strSQL .="WHERE id = '".$_GET["id"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "Record Deleted.";
}
else
{
	echo "Error Delete [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>
