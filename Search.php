<html>
<head>
<title>MySearch</title>
</head>
<body>
<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?php
if($_GET["txtKeyword"] != "")
	{
	$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
	$objDB = mysql_select_db("mydb2");
	// Search By Name or Email
	$strSQL = "SELECT * FROM tb_sengine WHERE (title LIKE '%".$_GET["txtKeyword"]."%' or description LIKE '%".$_GET["txtKeyword"]."%' or keywords LIKE '%".$_GET["txtKeyword"]."%' )";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">id </div></th>
		<th width="98"> <div align="center">title </div></th>
		<th width="198"> <div align="center">description </div></th>
		<th width="97"> <div align="center">keywords </div></th>
		<th width="59"> <div align="center">link </div></th>		
	  </tr>
	<?php
	while($objResult = mysql_fetch_array($objQuery))
	{
	?>
	  <tr>
		<td><div align="center"><?php echo $objResult["id"];?></div></td>
		<td><?php echo $objResult["title"];?></td>
		<td><?php echo $objResult["description"];?></td>
		<td><div align="center"><?php echo $objResult["keywords"];?></div></td>
		<td align="right"><?php echo $objResult["link"];?></td>		
	  </tr>
	<?php
	}
	?>
	</table>
	<?php
	mysql_close($objConnect);
}
?>
</body>
</html>