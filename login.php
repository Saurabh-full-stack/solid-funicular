<?php include 'code.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
				<title>online notice board</title>
				<link rel="stylesheet"  href="style.css">
			
				

<link rel="stylesheet" href="bootstrap.min.css">
				<script src= "bootstrap.min.js" charset="utf-8"></script>



</head>

<body>
							<div class="row" id="header">
								<div class="col-md-4"></div>
								<div class="col-md-5">
												<h3>Online Notice Board System</h3>
												
								</div>
								<div class="col-md-3"></div>
				</div>
			
				
				<section id="login-form">
								<div class="row">
							  <div class="col-md-6 m-auto block>
							  				<center><h3>Login Form</h3></center><br>
							  			<form action="login.php" method="POST">
							  							
							  							
							  				<div class="form-group">
							  								<label>email id :</label>
							  							<input class="form-control" type="text" name="email id" placeholder="enter your email">
							  				</div>
							  						<div class="form-group">
							  								<label>password:</label>
							  							<input class="form-control" type="password" name="Password" placeholder="enter your password">
							  				</div>
							  			<button class="btn btn-primary" type="submit"	 name="login">login</button>
							  					</form>
							  					<a href="register.php">click here to register</a>
				
							  </div>
																
												
								</div>
								
				</section>
			
				
</body>
</html>
