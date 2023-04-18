

<!-- WE CAN USE THIS CODE FOR BOTH DOCTOR AND PATIENT -->


<?php
error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="hospitalproject";
$data=mysqli_connect($host,$user,$password,$db);

if($_GET['patient_id']){
$user_id=$_GET['patient_id'];
$sql="DELETE FROM patient WHERE pid='$user_id'";
$result=mysqli_query($data,$sql);
if($result){
    header("location:display_patient.php");
    $_SESSION['message']='Patient details deleted Successfully!!';
}
}

elseif($_GET['doctor_id']){
$user_id=$_GET['doctor_id'];
$sql="DELETE FROM doctor WHERE did='$user_id'";
$result=mysqli_query($data,$sql);
if($result){
    header("location:display_doctor.php");
    $_SESSION['message']='Doctor details deleted Successfully';
}
}
?>