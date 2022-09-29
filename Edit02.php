<html>
<head>
<title>Edit02</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","12345678") or die("Error Connect to Database");
$objDB = mysql_select_db("mydb2");
$strSQL = "SELECT * FROM tb_sengine WHERE id ='".$_GET["id"]."'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

if(!$objResult)
{
	echo "Not found Link id=".$_GET["id"];
}
else
{
?>
<form action="Edit03.php?id=<?php echo $_GET["id"];?>" name="frmEdit" method="post">
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">id </div></th>
    <th width="160"> <div align="center">title </div></th>
    <th width="198"> <div align="center">description </div></th>
    <th width="97"> <div align="center">keywords </div></th>
    <th width="70"> <div align="center">link </div></th>
</tr>
  <tr>
    <td><div align="center"><input type="text" name="txtId" size="5" value="<?php echo $objResult["id"];?>"></div></td>
    <td><input type="text" name="txtTitle" size="20" value="<?php echo $objResult["title"];?>"></td>
    <td><input type="text" name="txtDescription" size="20" value="<?php echo $objResult["description"];?>"></td>
    <td><div align="center"><input type="text" name="txtKeywords" size="2" value="<?php echo $objResult["keywords"];?>"></div></td>
    <td align="right"><input type="text" name="txtLink" size="5" value="<?php echo $objResult["link"];?>"></td>
    
  </tr>
  </table>
  <input type="submit" name="submit" value="Edite">
  <?php
  }
  mysql_close($objConnect);
  ?>
  </form>
</body>
</html>