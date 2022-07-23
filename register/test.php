
<!------ Include the above in your HEAD tag ---------->
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" type="text/css" href="register.css">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet"  href="css/bootstrap.min.css">
    
<script src="css/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Register</title>
  </head>
  <body>
    <?php include_once 'connect.php'; ?>
    <?php

  if(isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION["msg_type"]?>">

      <?php
        echo $_SESSION["message"];
        unset($_SESSION["message"]);

      ?>
    </div>
  <?php endif ?>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                       
                        <h3></h3>
                        <h1 style="margin-top: 200px; font-size: 20px;">Already have an account?</h1>
                        <input type="submit" onClick="window.location='../login/login.php'"  name="login" value="Login"/>
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register</h3>
                                <form action="form.php" method="post" enctype="multipart/form-data">
                                <div class="row register-form">
                                   
                                    <div class="col-md-6">
                                       <div class="form-group">
                                            <input type="text" class="form-control" name="anumber" placeholder="Admission Number *" required >
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fname" placeholder="First Name *" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lname" placeholder="Last Name *" required >
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pword" placeholder="Password *"  required>
                                        </div>
                                       <div class="form-group lead">
        <label for="usertype" style="font-weight: bold;">Select Gender:</label>
        <input type="radio"  name="gender"  value="male" class="custom-radio" required>&nbsp;Male |
        <input type="radio"  name="gender"  value="female" class="custom-radio" required>&nbsp;Female 
        
        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group">

                                     <?php if (!empty($msg)): ?>
                                         <div class="alert <?php echo $msg_class ?>" role="alert">
                                   <?php echo $msg; ?>
                                         </div>
                                    <?php endif; ?>
                                         <div class="form-group text-center" style="position: relative;" >
                                         <span class="img-div">
                                          <div class="text-center img-placeholder"  onClick="triggerClick()">
                                        
                                        </div>
                                     <img src="portrait-blank-male.png" onClick="triggerClick()" id="profileDisplay">
                                     </span>
                                      <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;"required>
                                      <label>Profile Image</label>
                                        </div>

                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value=""required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  name="course" class="form-control"  placeholder="Your Course *" value="" required/>
                                        </div>
                                       
                                         	<button type="submit" name="login" class="btn btn-primary">Login</button>

                                    </div>
                                    </form>
                                </div>
                                 
                            </div>
                            
                           

            </body>
</html>
<script src="script.js"></script>