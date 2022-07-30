
<?php

session_start();
include 'includes/conn.php';



if(isset($_POST['send']))
{
$Admission_number=$_POST["anumber"];

$Ftype=$_POST["ftype"];
$Msg=$_POST["tarea"];


	$query="INSERT INTO feedback(admission_number,feedback_type,message)VALUES('$Admission_number','$Ftype','$Msg')";
	mysqli_query($conn,$query);
      echo "<script>alert('Feedback has been sent')</script>";
      echo "<script>window.location='index.php'</script>";
}
else
{
	echo "error";
}


?>