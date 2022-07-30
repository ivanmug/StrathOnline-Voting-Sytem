<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
    <title>Student Council | Strathmore University</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link rel="stylesheet" href="css/style.css">

    </head>
    <style>
      .feed{
         background-image: url("images/alumni.jpg");
    background-position: center;
    background-size: cover;
      }
      i{
        color: black!important;
      }
    </style>
    <body class="feed">
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
        <h2 style="padding-top: 0px;"><a href="index.php" class="navbar-brand headerFont text-lg" style="color: white;"><strong><img itemprop="image" class="mobile" src="https://susa.strathmore.edu/wp-content/uploads/2019/09/studentaffairslogo.png" alt="Logo" style="height: 200%;"></strong></a></h2>

        <div class="login-lefti">

          <h2>Give us your feedback</h2>
          <form action="processfeedback.php" method="post">

          <div class="form-group">
          <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Admission Number" name="anumber"  class="form-control" required>
        
        </div>


        <div class="form-group">
           <label for="usertype" style="font-weight: bold;">Feedback Type:</label>
         <select name="ftype" id="ftype" class="form-control"required>
               <option value="Comments">Comments</option>
                <option value="Suggestions">Suggestions</option>
                <option value="Questions">Questions</option>
        
          </select>
        </div>

         <div class="form-group">
          <i class="fa fa-pen" aria-hidden="true"></i>
           <textarea cols="15" rows="5" placeholder="Enter your opinion here" name="tarea"  class="form-control"></textarea>
        </div>
                
        
        <button type="submit" name="send" class="btn btn-primary">Send</button>
          
        
          
          </form>
        </div>  



          


      </div>



      </div>
    </div>
    </body>