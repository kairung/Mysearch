<html>
<head>
<title> Delete data</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("mydb2");

$strSQL = "SELECT * FROM tb_sengine";

$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">Id </div></th>
    <th width="98"> <div align="center">Title </div></th>
    <th width="198"> <div align="center">Description</div></th>
    <th width="97"> <div align="center">Keywords </div></th>
    <th width="59"> <div align="center">Link </div></th>
    </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><?php echo $objResult["id"]; ?></td>
    <td><?php echo $objResult["title"]; ?></td>
    <td><?php echo $objResult["description"]; ?></td>
    <td><?php echo $objResult["keywords"]; ?></td>
    <td><?php echo $objResult["link"]; ?></td>
    <td><a href="Delete02.php?id=<?php echo $objResult["id"] ?>">Delete</a></td>
  </tr>

<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>