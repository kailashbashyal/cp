<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Blood Bank | Homepage</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.bt').on('change', function() {
				window.location.href= 'saving.php?id='+$(this).val();
			});
		});
	</script>
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="index.php">Blood Bank</a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
		    <?php if($_SESSION['loggedin'] == 1) { ?>
		    	<li><a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a></li>	
		    <?php } else { ?>
		      <li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
		      <li><a href="register.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
		    <?php } ?>
		    </ul>
		  </div>
		</nav>
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row ngr">
				<div class="col-md-12 ngc">
					<div class="dashboard">
						<div class="row">
							<div class="col-md-4 col-md-offset-4">
								<?php 
									if($_SESSION['is_admin'] == 0) {
								?>
								<div class="link-container">
									<a href="donar/add.php" class="btn btn-info">donar's portal</a>
								</div>
								<div class="link-container">
									<a href="receiver/index.php" class="btn btn-info">receiver's portal</a>
								</div>
								<?php 
									} else {
								?>
								<div class="link-container">
									<a href="admin/stock.php" class="btn btn-info">view stock</a>
								</div>
								
								<?php 
									}
								?>
								<div class="link-container">
									<select class="bt">
										<option>Find a blood</option>
										<option value="AB Positive">AB+</option>
										<option value="AB Negative">AB-</option>
										<option value="O Positive">O+</option>
										<option value="O Negative">O-</option>
										<option value="A Positive">A+</option>
										<option value="A Negative">A-</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container-fluid">
			<div class="row ngr">
				<div class="col-md-12 ngc">
					<h4>Copyright &copy; 2017</h4>
				</div>
			</div>
		</div>
	</div>
</body>
</html>