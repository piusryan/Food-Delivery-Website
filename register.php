<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
	<link rel="stylesheet" href="si.css">
    <link rel="icon" href="logo.jpeg">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>


	
<section class="hero">
	<h2>Create an account</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Sign up
    </button>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="post" action="register.php">
                    <div class="modal-body">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo $username; ?>">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
                        </div>


                        <div class="form-group">
                            <label>Phone no</label>
                            <input type="text" class="form-control" id="currency" placeholder="Enter no" name="currency" value="<?php echo $currency; ?>">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_1">
                        </div>

                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="password_2">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
                       

    

        

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	</section>


</body>
</html>