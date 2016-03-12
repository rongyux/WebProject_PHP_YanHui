<?php 
include '../public/common/acl.inc.php';

header('content-type:text/html;charset=utf-8');

include "../public/common/config.inc.php";

$level1=$_POST['level1'];
$level2=$_POST['leve2'];
$level3=$_POST['level3'];
$time=time();

$sqlUser="insert into newsclass(level1,level2,level3,regtime) values('{$level1}','{$level2}','{$level3}',{$time})";
// echo $sqlUser;
if($pdo->exec($sqlUser)){
	echo "<script>alert('添加成功')</script>";
	echo "<script>location='index.php'</script>";
}
 ?>