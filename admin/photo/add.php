<?php 
include '../public/common/acl.inc.php';
include '../public/common/config.inc.php';

$sql = "select * from news order by news.regtime desc";
$rst = $pdo->query($sql);
$row = $rst->fetch();
// print_r($row[title]);
// exit;
 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>	
		<h3>添加图片</h3>
		<form action="insert.php" method='post' enctype='multipart/form-data'>
			<table width='' border='1px' cellspacing='0'>
				<tr>
					<td>新闻ID</td>
					<td><select name='newsId'>
						<option value="">--请选择新闻ID--</option>
						<?php 
							foreach ($pdo->query($sql) as $row) {
								echo "<option value='{$row[id]}'>{$row['id']}</option>"; 
							}
							
						?>
					</select></td>
					
				</tr>
				<tr>
					<td>新闻标题</td>
					<td><label type="text" name='title'><?php echo $row[title]; ?></td>
				</tr>
				<tr>
					<td>添加图片:</td>
					<td><input type="file" name='image'></td>
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