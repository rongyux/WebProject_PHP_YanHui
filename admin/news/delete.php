<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

$id=$_GET['id'];
$image=$_GET['image'];

$sqlNews="delete from news where id={$id}";
$sqlClass="delete from photo where newsId={$id}";
// print_r($sqlNews);
if($pdo->exec($sqlNews) && $pdo->exec($sqlClass)){
	unlink('../../public/uploads/'.$image);
	unlink('../../public/uploads/th_'.$image);
	echo "<script>location='index.php'</script>";
}
 ?>