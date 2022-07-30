<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<style>
  body{
    background: url('https://strathmore.edu/wp-content/uploads/2020/02/DSC06107-Chaplaincy.jpg')!important;
    background-position: center!important;
    background-size: auto!important;
  }

</style>
<body class="hold-transition login-page">
<div class="login-box" >
  	<div class="login-logo">
  		<h2><a href="../index.php" class="navbar-brand headerFont text-lg" style="color: white;"><strong><img itemprop="image" class="mobile" src="https://susa.strathmore.edu/wp-content/uploads/2019/09/studentaffairslogo.png" alt="Logo" style="height: 205%;"></strong></a></h2>
  	</div>
  
  	<div class="login-box-body" style="background-color: #E4B43A;height: 250px!important;">
    	<p class="login-box-msg" style="color: red;font-size: 20px;">ADMIN </p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>