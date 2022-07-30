
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <title>Student Council | Strathmore University</title>
    <link rel="icon" href="https://strathmore.edu/wp-content/uploads/2021/02/scouncil.png" type="image/icon type">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>

    body{
      margin:0px;
      padding:0px;

    }
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }

      a {
        color: #FFFFFF;
        text-decoration: none;
      }

      a:link {
        color: #FFFFFF;
        text-decoration: none;
      }

      /* visited link */
      a:visited {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* mouse over link */
      a:hover {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* selected link */
      a:active {
          color: #FFFFFF;
          text-decoration: none;
      }
      .ivan{
        background-image: url("images/sc3.jpg");
        background-position: center;
    background-size: cover;

      }
    </style>


    
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
	
	<div class="container">
  	<nav style="background-image: url(images/header-background.png);
    background-repeat: no-repeat; background-size: cover;
    color: #671010;" class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          
          <a href="index.php" class="navbar-brand headerFont text-lg" style="color: white;"><strong><img itemprop="image" class="mobile" src="https://susa.strathmore.edu/wp-content/uploads/2019/09/studentaffairslogo.png" alt="Logo" style="height: 150%;"></strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
           
            <li class="nav-item"><a href="#aboutTab" ><span class="subFont"><strong>About Us</strong></span></a></li>
            <li class="nav-item"><a href="#feedbackTab"><span class="subFont"><strong>Contact Us</strong></span></a></li>
        	
          </ul>
          
          <span style="" class="normalFont"><a href="register/register.php" style="padding-left:24px;background-color: #dd9933!important;border-color: #dd9933!important;" class="btn btn-success navbar-right navbar-btn"><strong>Sign Up</strong></a></span>
          <span class="normalFont"><a href="login/login.php" style="padding-left:24px;background-color: #dd9933!important;border-color: #dd9933!important;" class="btn btn-success navbar-right navbar-btn"><strong>Login</strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>
    </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 ">
      <div class="jumbotron text-center text-block ivan" style="padding-top:170px;">
              <img src="https://strathmore.edu/wp-content/uploads/2021/02/scouncil.png" alt="">
                  <h1 class="specialHead" style="color: white;">Student Council Voting System</h1>
                  <p class="normalFont" style="color: white; font-style: italic;font-family: sans-serif;"> Secure and Fast </p>

                  <a href="login/login.php" class="btn btn-primary btn-md specialHead"> <span class="glyphicon glyphicon-tag"></span> Cast Your Vote</a>
            </div>
          </div>
        </div>
      </div>

      <div class="conatiner" id="featuresTab">
        <div class="row">
          
        </div>
      </div>


      <div class="conatiner" style="padding:50px;" id="aboutTab">
        <div class="row">

          <div class="col-sm-12 text-center">
            <div class="page-header" style="padding-top:50px;padding-bottom:50px">
              <h1 class="normalFont" style="font-size:44px;" >WHAT IS IT?</h1>
              <p class="subFont" style="font-size:24px;"><em>A solution for Traditional voting.</em></p>
            
          

          <div class="col-sm-4 text-center">
            
            <img src="images/Nominee.png" width="100" height="100" alt=""/>
            <h2 class="normalFont" style="font-size:28px;">ONLINE VOTING</h2>
            <p><em>You will have details of candidates on the voting page and you can only vote once.</em></p>

          </div>
          <div class="col-sm-4 text-center">

            <img src="images/Vote.png" width="100" height="100" alt=""/>
             <h2 class="normalFont" style="font-size:28px;" style=" ">CANDIDATES</h2></a>
            <p><em> Candidates and positions are managed in the admin's control panel.</em></p>

          </div>
          <div class="col-sm-4 text-center"> 
            
            <img src="images/Stats.png" width="100" height="100" alt=""/>
            <h2 class="normalFont" style="font-size:28px;" >REPORT</h2>
            <p><em>The report shows the graphical representation of votes and it is in admin's Control Panel.</em></p>

          </div>
</div>
</div>
         
        </div>
      </div>
        <hr>
        <div class="container" id="feedbackTab">
          <div class="row">
            <div class="col-sm-12 text-center" style="">
              <div class="page-header" style="padding-top:30px;padding-bottom:30px;">
                <img src="images/MailBoy.png" width="100" height="100" alt="">
                <br>
                <h1 class="specialHead">CONTACT</h1>
                <p style="font-size:16px;">For all enquiries,click the button below</p>
                
              
                <br>
                <a  class="btn btn-info" href="feedback.php"> <strong>Feedback</strong></a>
              </div>
            </div>
          </div>
        </div>
      
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-center">
             <h2 class="specialHead">Mugunga Ivan<br>Kudwoli Claudia</h2>
            </div>
            <div class="col-sm-6 text-center">
              <img src="images/Facebook.png" width="50" height="50" alt="">
              <img src="images/Twitter.png" width="50" height="50" alt="">
              <img src="images/GitHub.png" width="50" height="50" alt="">
            </div>

          </div>
        </div>
      </footer>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <script src="includes/scripts.php"></script>
  </body>
</html>
