<?php

 include('action/connection.php');
 if(isset($_REQUEST['login'])){
  $email = $_REQUEST['email'];
  $pass = $_REQUEST['pwd'];

  $query = "SELECT * from register where username='$email' and password='$pass'";
  $fetch = $conn->query($query);

  if($row = $fetch->fetch_assoc()){
    header('Location: post_login.php');
  }
  else{
    echo "Invalid username and password";
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
		      <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
		      <li><a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
		    </ul>
		  </div>
		</nav>
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row ngr">
				<div class="col-md-12 ngc">
					<div class="section1">
						<h2>Login Portal</h2>
					  <form class="form form-horizontal" action="login.php" method="POST">
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="email">Email:</label>
					      <div class="col-sm-10">
					        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="pwd">Password:</label>
					      <div class="col-sm-10">          
					        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
					      </div>
					    </div>
					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" name="login" class="btn btn-default">Submit</button>
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