<?php 
session_start();

if(!$_SESSION['adminlogin']){
	echo "<script>location='/yanhui/admin/login/login.php'</script>";
}
 ?>