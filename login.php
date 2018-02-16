<?php
session_start();
$new = new PDO("mysql:host=localhost;dbname=emenyqgroup","root","");

?>
<!DOCTYPE HTML>
<html>
<head>
<title> Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Admin Login</h1>
			</div>
			<div class="login-block">
				<div class="col-md-4">
      
				</div>
				<form method="POST">
				 <?php
    if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
      $select = $new->prepare("SELECT * FROM stafftable WHERE username='$name' AND password='$pass'");
	$select->setFetchMode(PDO::FETCH_ASSOC);
	$select->execute();
	$data = $select->fetch();
	if ($data['username']!=$name OR $data['password']!=$pass) { 
		echo "<center style='color:red;'>invalid username 0r password</center>";
	}
	elseif ($data['email']==$email OR $data['pass']==$pass) {
	  	
      $_SESSION['username']=$data['username'];
     
      header("location:index.php");

	}

}
?>
					<input type="text" name="username" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								
							</ul>
						</div>
						<div class="forgot">
							<a href="#"></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="submit" value="Login">	
									
					
				</form>
				
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 </p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
