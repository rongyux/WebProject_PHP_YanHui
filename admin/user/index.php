<?php 
include '../public/common/acl.inc.php';//登录后进入的函数

include "../public/common/config.inc.php";//1.连接数据库

 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
	 <script>
	 	function doDel(id){
	 		if(confirm("确定要删除吗？")){
	 			window.location='action.php?action=del&id='+id;
	 		}
	 	}
	 </script>
</head>
<body>
	<center>
		<h3>查看用户</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>用户名</th>
				<th>注册时间</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
	<?php
			
			//2.执行SQL查询，并解析与遍历
		   
			$sql = "select * from user";
			$pdo->query($sql);
			
			foreach($pdo->query($sql) as $row){
				
				echo "<td>{$row['id']}</td>";
				echo "<td>{$row['username']}</td>";
			
				echo "<td>".date('Y-m-d',$row['regtime'])."</td>";
				echo "<td>
					<a href='delete.php?id={$row['id']}'>删除</a></td><td>
					<a href='edit.php?id={$row['id']}'>修改</a></td>";
				echo "</tr>";
			}
		
		?>

		</table>
		
	</center>
</body>
</html>
