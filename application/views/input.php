<?php

?>

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 		</head>
 		<body>
 			<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 					<legend class="jumbotron">Sign Up</legend>
 					<?php 
 						echo form_open_multipart('login/create'); 
 						echo validation_errors();

 					?>

 					<div class="form-group">
 						<label>Username</label>
 						<input type="text" class="form-control" id="username" name="username" placeholder="username">
 					</div>
 					<div class="form-group">
 						<label>Password</label>
 						<input type="password" class="form-control" id="password" name="password" placeholder="password">
 					</div>
 					<div class="form-group">
 						<label>Confirm Password</label>
 						<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="confirm password">
 					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo "<a href='".base_url()."index.php/login' class='btn btn-info'>Kembali</a>"; ?>
 					<?php echo form_close(); ?>
 				</div>
 				<div class="col-md-4"></div>
 			</div>

 			<!-- jQuery -->
 			<script src="//code.jquery.com/jquery.js"></script>
 			<!-- Bootstrap JavaScript -->
 			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 			<script src="Hello World"></script>
 		</body>
 		</html>