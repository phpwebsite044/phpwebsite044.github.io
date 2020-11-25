<?php
	include_once "./config.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once "./fragments/head.php";?>
	
	</head>
	<body>
		<nav class="navbar navbar-default">
			<?php include_once "./fragments/header.php";?>
		</nav>
		<div class="container">
			<div class="jumbotron">
				<div class="container">
					<h1>Makers Project</h1>
					<p>10104 김원희 - 메이커스 개인 프로젝트 작품</p>
					<p><a class="btn btn-primary btn-pull" href="list.php" role="button">게시판 바로가기</a></p>
				
				</div>
			</div>
		</div>
		<div class="container"> 
    		<div id="carousel-example-generic" class="carousel slide">
            	<ol class="carousel-indicators">
	              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	            </ol>
	            <div class="carousel-inner">
	            	<div class="item active">
                		<img src="./img/1.jpg" width="1200" height="400" alt="First slide">
                	</div>
	                <div class="item">
	                   <img src="./img/2.jpg" width="1200" height="400" alt="Second slide">               
	                </div>
	                <div class="item">
	                   <img src="./img/3.jpg" width="1200" height="400" alt="Third slide">                 
	                </div>
             	</div>
              	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                	<span class="icon-prev"></span>
              	</a>
              	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                	<span class="icon-next"></span>
              	</a>
          	</div>
  		</div>
	<footer class="footer">
        <div class="container">
            <div class="jumbotron">
                <span class="copyright"> &copy; Wonhee Kim 2020</span>
            </div>
        </div>
    </footer>
		
		
  		<script src="./js/login.js"></script> 
	</body>
</html>