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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="header">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="index.html">Blood Bank</a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
		      <li><a href="register.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
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
								<div class="link-container">
									<a href="donar/add.php" class="btn btn-info">donar's portal</a>
								</div>
								<div class="link-container">
									<a href="receiver/index.php" class="btn btn-info">receiver's portal</a>
								</div>
								<div class="link-container">
									<a href="admin/stock.php" class="btn btn-info">view stock</a>
								</div>
								<div class="link-container">
									<select>
										<option>Find a donar</option>
										<option>AB+</option>
										<option>AB-</option>
										<option>O+</option>
										<option>O-</option>
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