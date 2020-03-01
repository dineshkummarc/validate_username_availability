<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>	
		<div class="col-md-5">
			<form method="POST" action="">
				<div class="form-group">
					<label>Username:</label>
					<input type="text" name="username" class="form-control" required="required"/>
					<?php include'validate.php'?>
				</div>
				
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
				
				<div class="form-group">
					<label>Firstname:</label>
					<input type="text" name="firstname" class="form-control" required="required"/>
				</div>
				
				<div class="form-group">
					<label>Lastname:</label>
					<input type="text" name="lastname" class="form-control" required="required"/>
				</div>
				
				<div class="form-group">
					<center><button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> Register</button></center>
				</div>
			</form>
		</div>
</body>
</html>