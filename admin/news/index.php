<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

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


$sqlNews="select * from newsclass,news where news.newsclassId = newsclass.id order by shelf desc limit $offset,$length";

 ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<center>
		<h3>查看新闻</h3>
		<table width='700px' border='1px' cellspacing='0'>
			<tr>
				<th>ID</th>
				<th>标题</th>
				<!-- <th>图片</th>				 -->
				<th>摘要</th>
				<th>栏目1</th>
				<th>栏目2</th>
				<th>栏目3</th>
				<th>状态</th>
				<th>发表时间</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
				foreach($pdo->query($sqlNews) as $row){
					// print_r($row);
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['title']}</td>";
					// echo "<td><a href='../../public/uploads/{$row['imgsrc']}' target='_blank'><img src='../../public/uploads/th_{$row['imgsrc']}' width='100' height='100'></a></td>";
					echo "<td>{$row['abstract']}</td>";
					echo "<td>{$row['level1']}</td>";
					echo "<td>{$row['level2']}</td>";
					echo "<td>{$row['level3']}</td>";

					if($row['shelf']){
						echo "<td>上墙</td>";
					}else{
						echo "<td>下墙</td>";
					}

					echo "<td>".date('Y-m-d',$row['regtime'])."</td>";
					echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
					echo "<td><a href='delete.php?id={$row['id']}&image={$row['imgsrc']}'>删除</a></td>";
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