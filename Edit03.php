<html>
<head>
<title>Edite03</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("mydb2");
$strSQL = "UPDATE tb_sengine SET ";
$strSQL .="id = '".$_POST["txtId"]."' ";
$strSQL .=",title = '".$_POST["txtTitle"]."' ";
$strSQL .=",description= '".$_POST["txtDescription"]."' ";
$strSQL .=",keywords = '".$_POST["txtKeywords"]."' ";
$strSQL .=",link = '".$_POST["txtLink"]."' ";

$strSQL .="WHERE id = '".$_GET["id"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{
	echo "Edite Done.";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mysql_close($objConnect);
?>
</body>
</html>