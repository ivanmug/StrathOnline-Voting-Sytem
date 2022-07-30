
<?php

session_start();
include '../includes/conn.php';


if(isset($_POST['register']))
{
$Admission_number=$_POST["anumber"];
$Firstname=$_POST["fname"];
$Lastname=$_POST["lname"];
$Password=password_hash($_POST['pword'], PASSWORD_DEFAULT);
$Gender=$_POST["gender"];
$Email=$_POST["email"];
$Course=$_POST["course"];
$file=$_FILES["profileImage"];

      $filename = $_FILES["profileImage"]["name"]; 
      $fileTmpName=$_FILES["profileImage"]["tmp_name"];
      $fileSize=$_FILES["profileImage"]["size"];
      $fileError=$_FILES["profileImage"]["error"];
      $fileType=$_FILES["profileImage"]["type"];

      $fileExt= explode('.', $filename);
      $fileActualExt=strtolower(end($fileExt));
      $allowed=array('jpg','jpeg','png');
      $fileNameNew=uniqid('', true).".".$fileActualExt;

      $folders='uploads/'.$fileNameNew;

      $fileDestination='uploads/'.$fileNameNew;
      move_uploaded_file($fileTmpName, $fileDestination);


            $sql = "SELECT * FROM voters WHERE admission_number = '$Admission_number'";
            $query = $conn->query($sql);

            if($query->num_rows > 1)

                  {
                    echo "<script>alert('Admission number is already taken!!')</script>";
                    echo "<script>window.location='register.php'</script>";

                   
                  }
            else
                  {

	             $query="INSERT INTO voters(admission_number,firstname,lastname,password,photo,gender,email,course)VALUES('$Admission_number','$Firstname','$Lastname','$Password','$folders','$Gender','$Email','$Course')";
	             mysqli_query($conn,$query);

	             $_SESSION['message']="Record has been saved";
	             $_SESSION['msg_type']="success";

	             header('location:../login/login.php');

                  }
}




    





?>