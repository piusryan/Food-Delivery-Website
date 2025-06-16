<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Review</title>

  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="pk.css">
  <link rel="icon" href="pk1.jpeg">
</head>



<body>


	<main>
    <section class="hero">
      <h2>Get food delivery & more from local restaurants</h2>




	  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login/Signup</button>

<div class="modal" id="loginModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Login/Signup</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<div class="modal-body">
				<form method="post" action="login.php">
					<?php include('errors.php'); ?>
					<div class="input-group">
						<label>Username</label>
						<input type="text" class="form-control" id="username" name="username" >
					</div>


					<div class="input-group">
						<label>Password</label>
						<input type="password" class="form-control" id="pwd" name="password">
						
</div>

						<div class="input-group">
					<button type="submit" class="btn btn-primary" name="login_user">Login</button>
					</div>
					
			
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.href='register.php'">Sign-up</button>
			</div>

</div>
		</div>
	</div>
</div>
</body>
</html>