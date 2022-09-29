<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "12345678";
   $dbName = "mydb2";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM tb_sengine WHERE title LIKE '%".$strKeyword."%' OR ";
   $sql .= "description LIKE '%".$strKeyword."%' OR ";
   $sql .= "keywords LIKE '%".$strKeyword."%'";

   $query = mysqli_query($conn,$sql);

?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">Id </div></th>
    <th width="98"> <div align="center">Title </div></th>
    <th width="198"> <div align="center">Description </div></th>
    <th width="97"> <div align="center">Keywords </div></th>
    <th width="59"> <div align="center">LinK </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["id"];?></div></td>
    <td><?php echo $result["title"];?></td>
    <td><?php echo $result["description"];?></td>
    <td><div align="center"><?php echo $result["keywords"];?></div></td>
    <td align="right"><?php echo $result["link"];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>