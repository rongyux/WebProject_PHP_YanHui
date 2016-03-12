<?php 
include '../public/common/acl.inc.php';//登录后进入的函数

include "../public/common/config.inc.php";//1.连接数据库

 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
		<h3>查看用户</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>栏目1</th>
				<th>栏目2</th>
				<th>栏目3</th>
				<th>注册时间</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
	<?php
			$length = 10;//一页多少条数据
			$sqlRow = "select count(*) from newsclass";
			$rstRow = $pdo->query($sqlRow);
			$totalRow = $rstRow->fetch();//totalRow总数据条数
			// print_r($totalRow);
			$totalPage = ceil($totalRow[0]/$length);//totalPage总页数
			// print_r($totalPage);
			$page = $_GET['p']?$_GET['p'] : 1;//page当前页

			if($page > $totalPage -1){ $page = $totalPage;}

			$offset = ($page - 1)*$length;//偏移，每页的第一条数据在数据库表中的序列号
			$prepage = $page - 1;//prepage上一页
			$nextpage = $page + 1;//prepage下一页


			//执行SQL查询，并解析与遍历
		   
			$sql = "select * from newsclass limit $offset,$length";
			$pdo->query($sql);
			
			foreach($pdo->query($sql) as $row){
				
				echo "<td>{$row['id']}</td>";
				echo "<td>{$row['level1']}</td>";
				echo "<td>{$row['level2']}</td>";
				echo "<td>{$row['level3']}</td>";
				echo "<td>".date('Y-m-d',$row['regtime'])."</td>";
				echo "<td>
					<a href='edit.php?id={$row['id']}'>修改</a></td><td>
					<a href='delete.php?id={$row['id']}'>删除</a></td>";
				echo "</tr>";
			}

			echo "<h3>
				<a href='?p=1'>首页</a>
				<a href='?p={$prepage}'>上一页</a>
				<a href='?p={$nextpage}'>下一页</a>
				<span>{$page}/{$totalPage}</span>
				<a href='?p=$totalPage'>尾页</a>
			</h3>"
		
		?>

		</table>
		
	</center>
</body>
</html>
