<?php
	include_once('../action/connection.php');

	if(isset($_POST['submit']))	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$bloodtype = $_POST['selectbox'];
		

		$sql = "insert into receiver values('','$fname','$lname','$contact','$address','$age','$bloodtype')";

		if(mysqli_query($conn,$sql)){
		header('location:../post_login.php');
		}else{
			echo "data inserted failed";
		}
	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Blood Bank | Homepage</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
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
		      <a class="navbar-brand" href="index.php">Blood Bank</a>
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
					<div class="section1">
						<h2>I am in need of blood</h2>
					  <form class="form form-horizontal" action="index.php" method="POST">
					    <div class="form-group">
					      <label class="control-label col-sm-3" for="fname">First Name:</label>
					      <div class="col-sm-8">
					        <input type="fname" class="form-control" id="fname" placeholder="Enter first name" name="fname">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-3" for="lname">Last Name:</label>
					      <div class="col-sm-8">
					        <input type="lname" class="form-control" id="lname" placeholder="Enter last name" name="lname">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-3" for="contact">Contact:</label>
					      <div class="col-sm-8">
					        <input type="contact" class="form-control" id="contact" placeholder="Enter your phone number" name="contact">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-3" for="address">Address:</label>
					      <div class="col-sm-8">
					        <input type="address" class="form-control" id="address" placeholder="Enter your residential address " name="address">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-3" for="email">Age:</label>
					      <div class="col-sm-8">
					        <input type="age" class="form-control" id="age" placeholder="Enter age" name="age">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-3" for="contact">Blood type:</label>
					      <div class="col-sm-8">
					        <select class="as" name  = "selectbox">
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="O+">O+</option>
								<option value="o-">O-</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
							</select>
					      </div>
					    </div>
					    <div class="form-group">        
					      <div class="col-sm-offset-3 col-sm-8">
					        <button type="submit" name = "submit" class="btn btn-default">Submit</button>
					      </div>
					    </div>
					  </form>
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
<?php

?>