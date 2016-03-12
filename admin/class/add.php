<?php 
include '../public/common/acl.inc.php';

 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>	
		<h3>添加用户</h3>
		<form action="insert.php" method='post'>
			<table width='' border='1px' cellspacing='0'>
				<tr>
					<td>栏目1:</td>
					<td><input type="text" name='level1'></td>
				</tr>
				<tr>
					<td>栏目2:</td>
					<td><input type="text" name='level2'></td>
				</tr>
				<tr>
					<td>栏目3:</td>
					<td><input type="text" name='level3'></td>
				</tr>
								<tr>
					<td><input type="submit" value="添加"></td>
					<td align='center'><input type="reset" value="重置"></td>
				</tr>
			</table>
		</form>
	</center>	
</body>
</html>