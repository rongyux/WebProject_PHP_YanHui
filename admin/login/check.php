<?php 
session_start();
// include '../public/common/config.inc.php';
include '../public/common/config.inc.php';


$username=$_POST['username'];
$password=md5($_POST['password']);

$sqlAdmin="select * from user where username='{$username}' and password='{$password}'";
// print_r($sqlAdmin);

$rstAdmin=$pdo->query($sqlAdmin);

// print_r($rstAdmin->fetchColumn());
// exit;

if($rstAdmin->fetchColumn()){
	$_SESSION['adminname']=$username;
	$_SESSION['adminlogin']=1;
	 // print_r($_SESSION);exit;
	echo "<script>location='../index.php'</script>";
}else{
	echo "<script>location='login.php'</script>";
}


 ?>