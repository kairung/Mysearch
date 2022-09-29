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

	$sql = "SELECT * FROM tb_sengine";

	$query = mysqli_query($conn,$sql);

?>
<table width="650" border="1">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="98"> <div align="center">Title </div></th>
    <th width="198"> <div align="center">Description </div></th>
    <th width="97"> <div align="center">Keywords </div></th>
    <th width="59"> <div align="center">Link </div></th>
    <th width="50"> <div align="center">Edit </div></th>
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
    <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete01.php?id=<?php echo $result["id"];?>';}">Delete</a></td>
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