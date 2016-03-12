<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";

$id=$_GET['id'];
$sqlNews="select * from news where id={$id}";
$rstNews=$pdo->query($sqlNews);
$rowNews=$rstNews->fetch();

$sqlClass='select * from newsclass order by id';
$rstClass=$pdo->query($sqlClass);

 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>编辑新闻页面</title>
	
</head>
<body>
	<center>
	<h3>修改新闻</h3>	

	<form action="update.php" method='post' enctype='multipart/form-data'>
		<table width='' border='1px' cellspacing='0'>
			<tr>
				<td>新闻标题:</td>
				<td><?php echo $rowNews['title'] ?></td>
			</tr>	
	

			<tr>
				<td>上墙</td>	
				<td>
					<?php 
					if($rowNews['shelf']){
						echo '<input type="radio" name="shelf" id="r1" value="1" checked><label for="r1">上墙</label>';
						echo '<input type="radio" name="shelf" id="r2" value="0"><label for="r2">下墙</label>';
					}else{
						echo '<input type="radio" name="shelf" id="r1" value="1"><label for="r1">上墙</label>';
						echo '<input type="radio" name="shelf" id="r2" value="0" checked><label for="r2">下墙</label>';
					}

					 ?>
				</td>	
			</tr>

			<input type="hidden" name='id' value='<?php echo $id ?>'>

			<tr>
				<td><input type="submit" value="修改"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</table>
	</form>

	</center>
</body>
</html>