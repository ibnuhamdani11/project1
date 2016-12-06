<?php
require_once 'db/dbconnect.php';


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
  <!-- // Load Javascipt -->

  <!-- Load stylesheets -->
  <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css" media="screen" />
  <link type="text/css" rel="stylesheet" href="assets/css/login-style.css" media="screen" />
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
    <div id="wrappertop"></div>

    <div id="wrappermiddle">

      <h2>Login</h2>
      <form method="post" action="db/masuk.php">
        <div id="username_input">

          <div id="username_inputleft"></div>

          <div id="username_inputmiddle">
          
            <input type="text" name="username" id="url" placeholder="username"  required autofocus>
            <img id="url_user" src="assets/img/usericon.png" alt="">
          
          </div>

          <div id="username_inputright"></div>

        </div>

        <div id="password_input">

          <div id="password_inputleft"></div>

          <div id="password_inputmiddle">
          
            <input type="password" name="password" id="url" placeholder="password" required>
            <img id="url_password" src="assets/img/passicon.png" alt="">
          
          </div>

          <div id="password_inputright"></div>

        </div>
        <div id="submit">
                 <button type="submit" style="width:100%;height:40px;" class="btn btn-primary">Login</button>
              </div>
      </form>


    </div>

    <div id="wrapperbottom"></div>
    
    <div id="powered">
    </div>
  </div>

</body>
</html>