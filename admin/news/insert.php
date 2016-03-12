<?php 
include '../public/common/acl.inc.php';

include "../public/common/config.inc.php";
include "../public/common/functions.inc.php";

 // print_r($_POST);
// print_r($_FILES);			//$_FILES的输出：	Array ( [image] => Array ( [name] => logo2.png [type] => image/png [tmp_name] => D:\Program Files\wamp\tmp\phpD641.tmp 
// exit;

// print_r($_POST['content1']);
// exit();

$title=$_POST['title'];
$newsclassId=$_POST['newsclassId'];
$abstract=$_POST['abstract'];
$shelf=$_POST['shelf'];
$content=$_POST['content1'];
$regtime=time();
$thumb=$_POST['thumb'];

$sql="insert into news(title,newsclassId,abstract,shelf,content,regtime) values('{$title}','{$newsclassId}','{$abstract}','{$shelf}','{$content}','{$regtime}')";	

if($pdo->exec($sql)){
	echo "插入新闻成功！";
	echo "<script>location='index.php'</script>";

}

// if ($_FILES) {
	
// 	$imgname=$_FILES['image']['name'];//logo2.png
// 	$imgpath=pathinfo($imgname);
// 	//print_r($imgpath);Array ( [dirname] => . [basename] => logo2.png [extension] => png [filename] => logo2 ) 
// 	$imgext=$imgpath['extension'];//png
// 	$src=$_FILES['image']['tmp_name'];//D:\Program Files\wamp\tmp\phpD641.tmp 
// 	$image=time().'_'.mt_rand().'.'.$imgext;
// 	$dst='../../public/uploads/'.$image;

// 	// print_r($src);
// 	// print_r($dst);
// 	// exit;

// 	if(move_uploaded_file($src, $dst)){		
// 		thumb($dst,200,200);	//图片缩放	
// 	}

// 	$sqlthumb="update news set thumb={$thumb} where regtime=$regtime";	


// 	if($pdo->exec($sqlthumb)){
// 		echo "<script>location='index.php'</script>";
// 	}
// }

// echo "<script>location='index.php'</script>";


 ?>