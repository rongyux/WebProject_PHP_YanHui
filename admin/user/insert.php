<?php 
include '../public/common/acl.inc.php';

header('content-type:text/html;charset=utf-8');

include "../public/common/config.inc.php";

$username=$_POST['username'];
$password=md5($_POST['password']);
$time=time();

$sqlUser="insert into user(username,password,regtime) values('{$username}','{$password}',{$time})";
echo $sqlUser;
if($pdo->exec($sqlUser)){
	echo "<script>alert('添加成功')</script>";
	echo "<script>location='index.php'</script>";
}
 ?>