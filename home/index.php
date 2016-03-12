<?php
	include 'common/config.inc.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>大连海事大学研究生会</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/mycss.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Refinement Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Italiana' rel='stylesheet' type='text/css'><script src="js/jquery-1.11.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/mycss.css">
<script src="js/bootstrap.js"></script>
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>

</head>
<body>
		<!--header-->
			<div class="header">
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
										<h1><img src="images/logo.png" height="80" width="80" alt=""><a href="index.html">海小研</a></h1>
									</div>
								</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
									<li class="active"><a href="index.php">首页 <span class="sr-only">(current)</span></a></li>
									<li><a href="about.html">研会简介</a></li>
									<li><a href="services.php">活动资讯</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">预告通知 <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="predict_edu.php">学术氛围</a></li>
									<li><a href="predict_compus.php">校园文化</a></li>
								</ul>
									</li>
									<li><a href="results.php">成果展示</a></li>
									<li><a href="contact.html">下载专区</a></li>
								</ul>
							  
							</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
						</nav>

					</div>
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						 <li>	 
							<div class="caption">
								<h3>欢迎您登陆大连海事大学研究生会网站 </h3>
							</div>
						 </li>
						 <li>
							<div class="caption">						 
								<h3>欢迎您登陆大连海事大学研究生会网站</h3>  
							</div>
						</li>
						 <li>	          
							<div class="caption">
								<h3>欢迎您登陆大连海事大学研究生会网站</h3>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!--header-->

<!--news-->
<div class="mynews">
	<div class="content">
		<div class="container">
			<div class="row">
			  <div class="col-md-6">
			  		<br>
					<img src="images/tj002.png"><br><br>
			  		
			  		    <?php
			  		      $sql = "select * from news where newsclassId=1 order by id desc";
			  		      foreach ($pdo->query($sql) as $row) {
			  		      	if ($row['shelf']) {
			  		      	    echo "<a href='detail.php?id={$row['id']}'><p><small>[".date('Y-m-d',$row['regtime'])."]</small>{$row['title']}</p></a>";
			  		      	}
			  		      }
			  		    ?>					  	
			  							  		
			  </div>
			  

			  <div class="col-md-6">
			  		<br>
					<img src="images/tj001.png"><br><br>
			  		
			  		    <?php
			  		      $sql = "select * from news where newsclassId=3 order by id desc";
			  		      foreach ($pdo->query($sql) as $row) {
			  		      	if ($row['shelf']) {
			  		      	    echo "<a href='detail.php?id={$row['id']}'><p><small>[".date('Y-m-d',$row['regtime'])."]</small>{$row['title']}</p></a>";
			  		      	}
			  		      }
			  		    ?>					  	
			  							  		
			  </div>
			</div>
		</div>
	</div>	
</div>



				
<!--about-->
<div class="content">
	<div class="container">
		<div class="row">
			<p style="font-size: 20px;font-weight: 1">  友情链接</p>
		  	<!-- <img src="images/tj003.png"><br><br>	 -->
  			<br>
			  <div class="col-md-1">
			    <a href="images/x1.png" class="thumbnail">
			      <img src="images/x1.png" alt="图片加载失败">
			      <center>海大研院</center>
			    </a>
			  </div>
			   <div class="col-md-1">
			    <a href="http://grs.dlmu.edu.cn/" class="thumbnail">
			      <img src="images/校徽.png" alt="图片加载失败">
			      研院官网
			    </a>
			  </div>
			  <div class="col-md-1">
			    <a href="images/x2.png#" class="thumbnail">
			      <img src="images/x2.png" alt="图片加载失败">
			     <center>海大</center>
			    </a>
			  </div>
			  <div class="col-md-1">
			    <a href="http://www.dlmu.edu.cn/" class="thumbnail">
			      <img src="images/校徽.png" alt="图片加载失败">
			      海大官网
			    </a>
			  </div>
			 
			  <div class="col-md-1">
			    <a href="http://weibo.com/DLMU?is_hot=1" class="thumbnail">
			      <img src="images/x4.png" alt="图片加载失败">
			      海大微博
			    </a>
			  </div>
			  <div class="col-md-1">
			    <a href="http://202.118.89.183/iask/?/article/11" class="thumbnail">
			      <img src="images/x5.png" alt="图片加载失败">
			    	海大微信
			    </a>
			  </div>
			  <div class="col-md-1">
			    <a href="http://www.dlmu.edu.cn/html/2015/hdgg_0727/1094.html" class="thumbnail">
			      <img src="images/i海大.png" alt="图片加载失败">
			      <center>i海大</center>
			    </a>
			  </div>
			  <div class="col-md-1">
			    <a href="http://i.dlmu.edu.cn/smilecampus_dlmu/index/index.php?s=/Index/trial.html" class="thumbnail">
			      <img src="images/海大在线.png" alt="图片加载失败">
			     海大在线
			    </a>
			  </div>
			 <!--  <div class="col-md-1">
			    <a href="#" class="thumbnail">
			      <img src="images/x2.png" alt="图片加载失败">
			    
			    </a>
			  </div>
			  <div class="col-md-1">
			    <a href="http://weibo.com/DLMU?is_hot=1" class="thumbnail">
			      <img src="images/x4.png" alt="图片加载失败">
			    	
			    </a>
			  </div>
			  <div class="col-md-1">
			    <a href="#" class="thumbnail">
			      <img src="images/x5.png" alt="图片加载失败">
			    
			    </a>
			  </div>
			  <div class="col-md-1">
			    <a href="#" class="thumbnail">
			      <img src="images/x5.png" alt="图片加载失败">
			    
			    </a>
			  </div> -->
			  <!-- <br><br><br><br><br><br><br><br> -->
		 </div>		  
	  </div>
	</div>
	<!---end--> 


<!--footer-->
	<div class="footer-section">
		<div class="container">
			<div class="footer-top">
				<p>版权：大连海事大学研究生会 </p>
			</div>						
		</div>
	</div>
<!--footer-->

</body>
</html>
