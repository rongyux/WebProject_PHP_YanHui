<?php 
include '../public/common/acl.inc.php';

header('content-type:text/html;charset=utf-8');

include '../public/common/config.inc.php';
$id=$_GET['id'];

$sqlUser="delete from photo where id={$id}";
// print_r($sqlUser);
// exit;
if($pdo->exec($sqlUser)){
	echo "<script>alert('删除成功')</script>";
	echo "<script>location='index.php'</script>";
}
 ?>