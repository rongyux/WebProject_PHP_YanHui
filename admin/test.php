<?php 
include 'public/common/acl.inc.php';

include "public/common/config.inc.php";

$sqlId="select id from news order by regtime desc";	
	$stmt = $pdo->query($sqlId);
	$rst = $stmt->fetch();
	$newsId = $rst[id]; 	
	
	$sqlPhoto="insert into photo(imagesrc,newsId) values('{$image}','{$newsId}')";	
	
	print_r($sqlPhoto);
	//$pdo->exec($sqlPhoto);

?>