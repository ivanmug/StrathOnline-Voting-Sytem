<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: ../home.php');
    }
?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet"  href="../bootstrap.min.css">

    <title>Login</title>
  </head>
  <body class="loginphp">
    <?php

    if(isset($_SESSION['message'])):?>
        <div class="alert alert-<?=$_SESSION["msg_type"]?>">

            <?php
                echo $_SESSION["message"];
                unset($_SESSION["message"]);

            ?>
        </div>
    <?php endif ?>


  	



<div class="container">
    	<div class="login-box">
    	<div class="row">
    		<h2 style="padding-top: 200px;"><a href="../index.php" class="navbar-brand headerFont text-lg" style="color: white;"><strong><img itemprop="image" class="mobile" src="https://susa.strathmore.edu/wp-content/uploads/2019/09/studentaffairslogo.png" alt="Logo" style="height: 200%;"></strong></a></h2>

    		<div class="login-lefti">

    			<h2>Login</h2>
    			<form action="processlogin.php" method="post">

    			<div class="form-group">
    			<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Admission Number" name="anumber"  class="form-control" required>
				
				</div>

				<div class="form-group">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" placeholder="Enter password" name="password" id="myInput"   class="form-control" required>
					<input type="checkbox"   
					onclick="myFunction()">

					<script>
						
						function myFunction(){
							var x=
							document.getElementById("myInput");
							if(x.type ==="password")
							{
								x.type="text";
							}
							else
							{
								x.type="password";
							}
						}
					</script>
				</div>
                
				
				<button type="submit" name="login" class="btn btn-primary">Login</button>
    			
    			<p style="color: #0073a5;">Dont have an account?<a style="color: green;" href="../register/register.php">Sign Up</a></p>
    			
    			</form>
    		</div>	



    			


    	</div>



    	</div>
    </div>

</body>
</html>