<?php 
include '../public/common/acl.inc.php';

header('content-type:text/html;charset=utf-8');
include '../public/common/config.inc.php';

$id=$_POST['id'];
$level1=$_POST['level1'];
$level2=$_POST['level2'];
$level3=$_POST['level3'];
$regtime=time();

$sqlUser="update newsclass set level1='{$level1}',level2='{$level2}',level3='{$level3}',regtime='{$regtime}' where id={$id}";

if($pdo->exec($sqlUser)){
	echo "<script>alert('修改成功')</script>";
	echo "<script>location='index.php'</script>";
}
 ?>