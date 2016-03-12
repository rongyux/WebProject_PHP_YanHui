<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$id=$_GET['id'];
$sqlUser="select * from newsclass where id={$id}";
$rstUser=$pdo->query($sqlUser);
if($rstUser->rowCount() > 0){
	$rowUser = $rstUser->fetch(PDO::FETCH_ASSOC);  //解析数据
}else{
	die("没要有修改的数据");
}
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>	
		<h3>修改用户</h3>
		<form action="update.php" method='post'>
			<table width='' border='1px' cellspacing='0'>
				<tr>
					<td>栏目1:</td>
					<td><input type="text" name='level1' value='<?php echo $rowUser['level1'] ?>'></td>
				</tr>
				<tr>
					<td>栏目2:</td>
					<td><input type="text" name='level2' value='<?php echo $rowUser['level2'] ?>'></td>
				</tr>
				<tr>
					<td>栏目3:</td>
					<td><input type="text" name='level3' value='<?php echo $rowUser['level3'] ?>'></td>
				</tr>
				<tr>
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<td><input type="submit" value="修改"></td>
					<td align='center'><input type="reset" value="重置"></td>
				</tr>
			</table>
		</form>
	</center>	
</body>
</html>