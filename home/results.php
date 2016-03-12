<?php
	include 'common/config.inc.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>大连海事大学研究生会</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Refinement Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="js/bootstrap.js"></script>
</head>
<body>
		<!--header-->
				<div class="header banr">
					<div class="container">
						<div class="header-top">
							<nav class="navbar navbar-default">
								<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
										  </button>
										<div class="navbar-brand">
											<h1><a href="index.php">海小研</a></h1>
										</div>
									</div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								  <ul class="nav navbar-nav">
										<li><a href="index.php">首页<span class="sr-only">(current)</span></a></li>
										<li ><a href="about.html">研会简介</a></li>
										<li ><a href="services.php">活动资讯</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">预告通知 <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="predict_edu.php">学术氛围</a></li>
										<li><a href="predict_compus.php">校园文化</a></li>
									</ul>
										</li>
										<li class="active"><a href="results.php">成果展示</a></li>
										<li><a href="contact.html">下载专区</a></li>
									</ul>
								  
								</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
							</nav>

						</div>
				</div>
		</div>
	<!--header-->

	<!--detail -->
	<div class="content">
		<div class="container">
			<div class="mynewsdetail">
				<div class="mynewsdetailborder">	
				<pre>
				   <?php
		  		      $sql = "select * from news where newsclassId=2 order by id desc";
		  		      foreach ($pdo->query($sql) as $row) {
		  		      	if ($row['shelf']) {
		  		      	    echo "<a href='detail.php?id={$row['id']}'><p><small>[".date('Y-m-d',$row['regtime'])."]</small>{$row['title']}</p></a>";
		  		      	}
		  		      }
		  		    ?>				
				    
				</pre>
				<!-- <br><br><br><br><br><br><br><br><br><br> -->
				</div>
			</div>
		</div>
	</div>
	<!--detail -->
		
	<!--footer-->
		<div class="footer-section">
			<div class="container">
				<div class="footer-top">
					<p>大连海事大学研究生会</p>
				</div>						
			</div>
		</div>
	<!--footer-->
</body>
</html>
