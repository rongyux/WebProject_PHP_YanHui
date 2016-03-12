<?php
include '../public/common/acl.inc.php';
include "../public/common/config.inc.php";
include "../public/common/functions.inc.php";

$newsId=$_POST['newsId'];
$regtime=time();

// print_r($newsId);
// exit;

 if ($_FILES) {//有图片
	$imgname=$_FILES['image']['name'];//logo2.png
	$imgpath=pathinfo($imgname);
	//print_r($imgpath);Array ( [dirname] => . [basename] => logo2.png [extension] => png [filename] => logo2 ) 
	$imgext=$imgpath['extension'];//png
	$src=$_FILES['image']['tmp_name'];//D:\Program Files\wamp\tmp\phpD641.tmp 
	$image=time().'_'.mt_rand().'.'.$imgext;
	$dst='../../public/uploads/'.$image;

	// print_r($src);
	// print_r($dst);
	// exit;

	if(move_uploaded_file($src, $dst)){		
		thumb($dst,200,200);	//图片缩放	
	}

	$sqlPhoto="insert into photo(imagesrc,newsId,regtime) values('{$image}','{$newsId}','{$regtime}')";	


	if($pdo->exec($sqlPhoto)){
		echo "<script>location='index.php'</script>";
	}
	
}

?>