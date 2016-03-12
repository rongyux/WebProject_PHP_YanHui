<?php
			//1.连接数据库
			try{
				$pdo = new PDO("mysql:host=localhost;dbname=yanhui;","root","");
				$pdo->exec("SET CHARACTER SET UTF8");//编码问题：解决插入中文数据乱码问题
				$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT );
			}catch(PDOException $e){
				die("数据库连接失败".$e->getMessage());
			}
?>