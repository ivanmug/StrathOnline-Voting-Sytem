<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Student Council | Strathmore University</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="plugins/iCheck/all.css">
  	
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
        background-image: url("images/Student 2.jpg");
        background-position: center;
    background-size: cover;
      }
      
      	.logout:focus,	
		.logout:hover
			{
    background-color: red !important;
    color: white !important;
			}
      
    </style>


    
  </head>
<body class="hold-transition skin-blue layout-top-nav">
	<?php include_once 'includes/conn.php'; ?>
    <?php

    if(isset($_SESSION['message'])):?>
        <div class="alert alert-<?=$_SESSION["msg_type"]?>">

            <?php
                echo $_SESSION["message"];
                unset($_SESSION["message"]);

            ?>
        </div>
    <?php endif ?>
<div class="wrapper">

	<nav style="background-color: #364f9e!important;" class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          
          <a href="index.html" class="navbar-brand headerFont text-lg" style="color: white;"><strong><img itemprop="image" class="mobile" src="https://susa.strathmore.edu/wp-content/uploads/2019/09/studentaffairslogo.png" alt="Logo" style="height: 200%;"></strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
           
            <li><a href="#aboutTab"><span class="subFont"><strong>About Us</strong></span></a></li>
            <li><a href="#contactTab"><span class="subFont"><strong>Contact Us</strong></span></a></li>
        	
          </ul>
          
         <ul class="nav navbar-nav pull-right">
          <li class="user user-menu">
            <a href="">
              <img style="height: 30px;border-radius: 50%;" src="<?php echo (!empty($voter['photo'])) ? 'register/'.$voter['photo'] : 'images/profile.jpg' ?>" class="user-image" alt="User Image">
             
            </a>
          </li>
          <li class="user user-menu">
            <a href="">
              <span style="color: white;" class="hidden-xs text-capitalize"><?php echo $voter['firstname'].' '.$voter['lastname']; ?></span>
            </a>
          </li>
          <li style="padding-top: 5px;"><a style="font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  border-radius: 10%;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;" class="logout" href="logout.php" class="btn btn-success"><i class="fa fa-sign-out"></i> LOGOUT</a></li>  
        </ul>
        </div>

 
      </div> <!-- end of container -->
    </nav>
</div>
	 
	  <div class="content-wrapper" style="padding-top: 50px;">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	      	<?php
	      		$parse = parse_ini_file('admin/config.ini', FALSE, INI_SCANNER_RAW);
    			$title = $parse['election_title'];
	      	?>
	      	<h1 class="page-header text-center title"><b><?php echo strtoupper($title); ?></b></h1>
	        <div class="row">
	        	<div class="col-sm-10 col-sm-offset-1">
	        		<?php
				        if(isset($_SESSION['error'])){
				        	?>
				        	<div class="alert alert-danger alert-dismissible">
				        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					        	<ul>
					        		<?php
					        			foreach($_SESSION['error'] as $error){
					        				echo "
					        					<li>".$error."</li>
					        				";
					        			}
					        		?>
					        	</ul>
					        </div>
				        	<?php
				         	unset($_SESSION['error']);

				        }
				        if(isset($_SESSION['success'])){
				          	echo "
				            	<div class='alert alert-success alert-dismissible'>
				              		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				              		<h4><i class='icon fa fa-check'></i> Success!</h4>
				              	".$_SESSION['success']."
				            	</div>
				          	";
				          	unset($_SESSION['success']);
				        }

				    ?>
 
				    <div class="alert alert-danger alert-dismissible" id="alert" style="display:none;">
		        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			        	<span class="message"></span>
			        </div>

				    <?php
				    	$sql = "SELECT * FROM votes WHERE voters_id = '".$voter['id']."'";
				    	$vquery = $conn->query($sql);
				    	if($vquery->num_rows > 0){
				    		?>
				    		<div class="text-center">
					    		<h3>You have voted for this election.</h3>
					    		<a href="#view" data-toggle="modal" class="btn btn-flat btn-primary btn-lg">View Ballot</a>
					    	</div>
				    		<?php
				    	}
				    	else{
				    		?>
			    			<!-- Voting Ballot -->
						    <form method="POST" id="ballotForm" action="submit_ballot.php">
				        		<?php
				        			include 'includes/slugify.php';

				        			$candidate = '';
				        			$sql = "SELECT * FROM positions ORDER BY priority ASC";
									$query = $conn->query($sql);
									while($row = $query->fetch_assoc()){
										$sql = "SELECT * FROM candidates WHERE position_id='".$row['id']."'";
										$cquery = $conn->query($sql);
										while($crow = $cquery->fetch_assoc()){
											$slug = slugify($row['description']);
											$checked = '';
											if(isset($_SESSION['post'][$slug])){
												$value = $_SESSION['post'][$slug];

												if(is_array($value)){
													foreach($value as $val){
														if($val == $crow['id']){
															$checked = 'checked';
														}
													}
												}
												else{
													if($value == $crow['id']){
														$checked = 'checked';
													}
												}
											}
											$input = ($row['max_vote'] > 1) ? '<input type="checkbox" class="flat-red '.$slug.'" name="'.$slug."[]".'" value="'.$crow['id'].'" '.$checked.'>' : '<input type="radio" class="flat-red '.$slug.'" name="'.slugify($row['description']).'" value="'.$crow['id'].'" '.$checked.'>';
											$image = (!empty($crow['photo'])) ? 'images/'.$crow['photo'] : 'images/profile.jpg';
											$candidate .= '
												<li>
													'.$input.'<button type="button" class="btn btn-primary btn-sm btn-flat clist platform" data-platform="'.$crow['platform'].'" data-fullname="'.$crow['firstname'].' '.$crow['lastname'].'"><i class="fa fa-search"></i> Platform</button><img src="'.$image.'" height="100px" width="100px" class="clist"><span class="cname clist">'.$crow['firstname'].' '.$crow['lastname'].'</span>
												</li>
											';
										}

										$instruct = ($row['max_vote'] > 1) ? 'You may select up to '.$row['max_vote'].' candidates' : 'Select only one candidate';

										echo '
											<div class="row">
												<div class="col-xs-12">
													<div class="box box-solid" id="'.$row['id'].'">
														<div class="box-header with-border">
															<h3 class="box-title"><b>'.$row['description'].'</b></h3>
														</div>
														<div class="box-body">
															<p>'.$instruct.'
																<span class="pull-right">
																	<button type="button" class="btn btn-success btn-sm btn-flat reset" data-desc="'.slugify($row['description']).'"><i class="fa fa-refresh"></i> Reset</button>
																</span>
															</p>
															<div id="candidate_list">
																<ul>
																	'.$candidate.'
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										';

										$candidate = '';

									}	

				        		?>
				        		<div class="text-center">
					        		<button type="button" class="btn btn-success btn-flat" id="preview"><i class="fa fa-file-text"></i> Preview</button> 
					        		<button type="submit" class="btn btn-primary btn-flat" name="vote"><i class="fa fa-check-square-o"></i> Submit</button>
					        	</div>
				        	</form>
				        	<!-- End Voting Ballot -->
				    		<?php
				    	}

				    ?>

	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
  	<?php include 'includes/ballot_modal.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$('.content').iCheck({
		checkboxClass: 'icheckbox_flat-green',
		radioClass: 'iradio_flat-green'
	});

	$(document).on('click', '.reset', function(e){
	    e.preventDefault();
	    var desc = $(this).data('desc');
	    $('.'+desc).iCheck('uncheck');
	});

	$(document).on('click', '.platform', function(e){
		e.preventDefault();
		$('#platform').modal('show');
		var platform = $(this).data('platform');
		var fullname = $(this).data('fullname');
		$('.candidate').html(fullname);
		$('#plat_view').html(platform);
	});

	$('#preview').click(function(e){
		e.preventDefault();
		var form = $('#ballotForm').serialize();
		if(form == ''){
			$('.message').html('You must vote atleast one candidate');
			$('#alert').show();
		}
		else{
			$.ajax({
				type: 'POST',
				url: 'preview.php',
				data: form,
				dataType: 'json',
				success: function(response){
					if(response.error){
						var errmsg = '';
						var messages = response.message;
						for (i in messages) {
							errmsg += messages[i]; 
						}
						$('.message').html(errmsg);
						$('#alert').show();
					}
					else{
						$('#preview_modal').modal('show');
						$('#preview_body').html(response.list);
					}
				}
			});
		}
		
	});

});
</script>
</body>
</html>