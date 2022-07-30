
<!Doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" type="text/css" href="register.css">

    
     <link rel="stylesheet"  href="css/bootstrap.min.css">
    
<script src="css/bootstrap.min.js"></script>


    <title>STUDENT COUNCIL-REGISTER</title>
     <link rel="icon" href="https://strathmore.edu/wp-content/uploads/2021/02/scouncil.png" type="image/icon type">
  </head>
  <body>
  
    <?php

  if(isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION["msg_type"]?>">

      <?php
        echo $_SESSION["message"];
        unset($_SESSION["message"]);

      ?>
    </div>
  <?php endif ?>
  <?php include_once 'processregister.php'; ?>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                       
                        <h3><a href="../index.php" class="navbar-brand headerFont text-lg" style="color: white;"><strong><img itemprop="image" class="mobile" src="https://susa.strathmore.edu/wp-content/uploads/2019/09/studentaffairslogo.png" alt="Logo" style="width:100%;"></strong></a></h3>
                        <h1 style="margin-top: 200px; font-size: 20px;">Already have an account?</h1>
                        <input type="submit" onClick="window.location='../login/login.php'"  name="login" value="Login"/>
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading" style="font-size: 40px;">REGISTER</h3>
                                <form action="processregister.php" method="post" enctype="multipart/form-data">
                                <div class="row register-form">
                                   
                                    <div class="col-md-6">
                                        <input type="hidden" name="id" value="">
                                       <div class="form-group">
                                            <input type="text" class="form-control" name="anumber" placeholder="Admission Number *"value="" maxlength="6" required >
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fname" placeholder="First Name *" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lname" placeholder="Last Name *" value="" required >
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pword" placeholder="Password *" value=""  required>
                                        </div>
                                       <div class="form-group lead">
        <label for="usertype" style="font-weight: bold;">Select Gender:</label>
        <input type="radio"  name="gender"  value="male" class="custom-radio" required checked>&nbsp;Male |
        <input type="radio"  name="gender"  value="female" class="custom-radio" required>&nbsp;Female 
        
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
                                      <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" value=""required>
                                      <label>Profile Image</label>
                                        </div>

                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="example@strathmore.edu *" value="" pattern=".+@strathmore.edu" required />
                                        </div>
                                        
                                        <div class="form-group">
                                            <select name="course" id="course" class="form-control" value=""required>
                                                 <option value="BBIT">BBIT</option>
                                                  <option value="BICS">BICS</option>
                                                  <option value="BCOM">BCOM</option>
                                                  <option value="LAW">LAW</option>
                                            </select>
                                        </div>
                                        
                                       
                                         	<button type="submit" name="register" class="btn btn-primary">Register</button>
                                                      

                                    </div>
                                    </form>
                                </div>
                                 
                            </div>
                            
                           

            </body>
</html>
<script src="script.js"></script>