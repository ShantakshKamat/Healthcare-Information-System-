
<?php
session_start();
// if(!isset($_SESSION['username'])){
//     header("location:login.php");
// }
$host="localhost";
$user="root";
$password="";
$db="hospitalproject";
$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_patient'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    
    $check="SELECT * FROM patient WHERE fname='$fname' AND lname='$lname'";
    $check_user=mysqli_query($data,$check);

    $row_count=mysqli_num_rows($check_user);
    
    if($row_count==1){
        echo "<script type='text/javascript'>
        alert('Already Exists..try another');
        </script";
    }
    else
    {

    $sql="INSERT INTO patient(fname,lname,gender,phone,email) VALUES('$fname','$lname','$gender','$phone','$email')";
    $result=mysqli_query($data,$sql);

    if($result){
        echo "<script type='text/javascript'>
        alert('Data Upload Success');
        </script";
    }else
    {
        echo "upload failed";
    }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Dashboard</title>
    <link rel="stylesheet" href="add_patient.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <a href="">Receptionist Dashboard</a>


        <div class="logout">
            <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
                

        <style type="text/css">
            label{
                display:inline-block;
                text-align:right;
                width: 100px;
                padding-top: 10px;
                padding-bottom: 10px;

            }

            .div_deg{
                background-color:skyblue;
                width:400px;
                padding-top:70px;
                padding-bottom:70px;
            }
        </style>



    </header> 
    

    <aside>
        <ul>
            <li>
                <a class="btn btn-primary" href="add_patient.php">Add Patient</a>
            </li>
            <li>
                <a class="btn btn-primary" href="display_patient.php">View Patient</a>
            </li>

            <li>
                <a class="btn btn-primary" href="add_doctor.php">Add Doctor</a>
            </li>
            <li>
                <a class="btn btn-primary" href="display_doctor.php">View Doctor</a>
            </li>
            <li>
                <a class="btn btn-primary" href="searchupdate.php">Search Patient</a>
            </li>
            <li>
                <a class="btn btn-primary" href="prescription.php">Prescription Details</a>
            </li>

        </ul>
    </aside>

    <!-- only this part changes -->
    <div>
        <center>
        <div>
            <h1>Add Patient</h1>
        </div>
     
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label for="">First Name</label>
                    <input type="text" name="fname">
                </div>
                <div>
                    <label for="">Last Name</label>
                    <input type="text" name="lname">
                </div>
                <div>
                    <label for="">Gender</label>
                    <input type="text" name="gender">
                </div>
                <div>
                    <label for="">Phone Number</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary"name="add_patient" value="Add Patient">
                </div>

            </form>
        </div>
        </center>

    </div>
</body>
</html>