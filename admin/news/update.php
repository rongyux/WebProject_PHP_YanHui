<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";
include "../public/common/functions.inc.php";

$id=$_POST['id'];
$shelf=$_POST['shelf'];


$sql="update news set shelf='{$shelf}' where id='{$id}'";
$pdo->exec($sql);
echo "<script>location='index.php'</script>";


 ?>