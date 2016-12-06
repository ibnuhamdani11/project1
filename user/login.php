<?php
require_once 'pp/db/dbconnect.php';


session_start();
if (!empty($_SESSION['username'])){
    header('location:login.php');
}

if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<script>alert("Username dan Password tidak terdaftar!"); </script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>


	<!-- General meta information -->
	<title>P3M | POLINDRA</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<!-- // General meta information -->
	
	
	<!-- Load Javascript -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="../js/rainbows.js"></script>
	<!-- // Load Javascipt -->

	<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.css" media="screen" />
	<link type="text/css" rel="stylesheet" href="../css/lgstyle.css" media="screen" />
	<!-- // Load stylesheets -->
	
<!--<script>


	$(document).ready(function(){
 
	$("#submit1").hover(
	function() {
	$(this).animate({"opacity": "0"}, "slow");
	},
	function() {
	$(this).animate({"opacity": "1"}, "slow");
	});
 	});


</script>-->
	
</head>
<body>

	<div id="wrapper">
			<h4>Untuk upload file anda, silahkan login terlebuh dahulu</h4>
		<div id="wrappertop"></div>

		<div id="wrappermiddle">

			<h2>Login</h2>
			<form method="post" action="pp/db/masuk.php">
				<div id="username_input">

					<div id="username_inputleft"></div>

					<div id="username_inputmiddle">
					
						<input type="text" name="username" id="url" placeholder="username" required autofocus>
						<img id="url_user" src="../images/usericon.png" alt="">
					
					</div>

					<div id="username_inputright"></div>

				</div>

				<div id="password_input">

					<div id="password_inputleft"></div>

					<div id="password_inputmiddle">
					
						<input type="password" name="password" id="url" placeholder="password" required>
						<img id="url_password" src="../images/passicon.png" alt="">
					
					</div>

					<div id="password_inputright"></div>

				</div>
				<div id="submit">
	               <button type="submit" style="width:100%" class="btn btn-primary">Login</button>
	            </div>
			</form>
			
			<!--<div id="submit">
				<form>
				<input type="image" src="../images/submit_hover.png" id="submit1" value="Sign In">
				<input type="image" src="../images/submit.png" id="submit2" value="Sign In">
				</form>
			</div>


			<div id="links_left">

			<a href="#">Lupa password?</a>

			</div>-->

			<div id="links_right"><a href="#">Belum punya akun?</a></div>

		</div>

		<div id="wrapperbottom"></div>
		
		<div id="powered">
		<p>Powered by <a href="../index.php">P3M POLINDRA</a></p>
		</div>
	</div>

</body>
</html>