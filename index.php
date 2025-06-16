<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>


<header>
    <div class="sidebar" id="mySidebar"> 
    <nav>
      <ul class="nav-list">
        <li><a href="others/home.html" class="nav-link">Home</a></li>
        <li><a href="others/why.html" class="nav-link">Why You'll Love us</a></li>
        <li><a href="others/about.html" class="nav-link">About</a></li>
        <li><a href="others/faq.html" class="nav-link">Contact</a></li>
        <li><a href="others/member.html" class="nav-link">MEMBERSHIP</a></li>
        <li><a href="others/management.html" class="nav-link">MANAGEMENT</a></li>
      </ul>
    </nav>
    </div>

	</header>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome:&#x1F600 <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <img src="tick.gif" alt="Tick mark"></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>


</div>
</body>
</html>