<?php
include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['propose'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$phone = mysqli_real_escape_string($con, $_POST['phone']);
	$content = mysqli_real_escape_string($con, $_POST['content']);
	
	
	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(!preg_match("/^[0-9]{10}$/", $phone)) {
		$error = true;
		$phone_error = "Invalid phone number";
	}
	if (!$error) {
		if(mysqli_query($con, "INSERT INTO proposals(name,email,phone,content) VALUES('" . $name . "', '" . $email . "', '" . $phone . "','" . $content . "')")) {
			$successmsg = "Successfully Submitted! <a href='index.html'>Go To Homepage</a>";
		} else {
			$errormsg = "Error in submission...Please try again later!";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Event Proposal</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body style="color=red">

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">NSS ASIET</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login.php">Login</a></li>
				<li class="active"><a href="register.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 well">
			<form role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="propose">
				<fieldset>
					<legend>Event Proposal</legend>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Email id</label>
						<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Phone Number</label>
						<input type="phone" name="phone" placeholder="e.g 0123456789" required class="form-control" />
						<span class="text-danger"><?php if (isset($phone_error)) echo $phone_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Abstract of your idea</label>
						<br>
						<textarea name="content" placeholder="max 1000 char." rows="10" cols="115" style="resize: none;"></textarea>
					</div>

					<div class="form-group">
						<input type="submit" name="propose" value="Submit" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



