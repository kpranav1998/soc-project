<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	
	<style>
		#navigation-bar {
			border-top: 3px solid #a33939;
			box-shadow: 0 2px 1px #eee;
		/*
			height: 60px;
			padding-top: 5px;
		*/}

		.btn {
			border-radius: 0 !important;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id="navigation-bar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand" >QUERY!!</a>
				</div>

				<div class="collapse navbar-collapse" id="nav-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="homepage.php" ><span class="glyphicon glyphicon-home"></span></a></li>
						<li><a href="notification.php" style="font-size: 20px;">Notifications</a></li>
						<li><a href="questions.php" style="font-size: 20px;" >Questions</a></li>
						<li><a href="feedbacks.php" style="font-size: 20px;"  >Feedback</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						
                <a href="<?php session_start(); echo "user_profile.php?userId=".$_SESSION['user_id']; ?>" class="btn navbar-btn"><span class="glyphicon glyphicon-user"></span></a>          
                	</ul>	

					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
						<button type="button" class="btn btn-info btn-md"><strong>Log Out</strong></button>
					</form>
				</div>
			</div>	
		</nav>

		
</body>
</html>