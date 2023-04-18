<!-- using this page ..we are able to delete,update -->
<!-- to update we have update_patient.php -->
<?php
error_reporting(0);
session_start();
// if(!isset($_SESSION['username'])){
//     header("location:login.php");
// }
$host="localhost";
$user="root";
$password="";
$db="hospitalproject";
$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM medrecs";
$result=mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Dashboard</title>
    <link rel="stylesheet" href="display_patient.css">
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
            .table_th{
                padding-left 20px;
                padding: 20px;
                font-size: 15px;
            }
            body div{
                padding-left:20px;
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
                <a class="btn btn-primary" href="prescription.php">Add Prescription Details</a>
            </li>
            <li>
                <a class="btn btn-primary" href="prescription2.php">View Prescription Details</a>
            </li>

        </ul>
    </aside>

    <!-- only this part changes -->
    <div>
        <center>
        <div>
            <h1>Prescriptions</h1>
            <?php
            if($_SESSION['message']){
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
            ?>

        </div>
     
        <div class="content">

        <table border="1px">
            <tr>
                <th class="table_th">Patient id</th>
                <th class="table_th">First Name</th>
                <th class="table_th">Last Name</th>
                <th class="table_th">Medicine</th>
            </tr>


            <?php
            while($info=$result->fetch_assoc()){
            ?>

            <tr>
                <td class="table_th"><?php echo "{$info['pid']}";?></td>
                <td class="table_th"><?php echo "{$info['fname']}";?></td>
                <td class="table_th"> <?php echo "{$info['lname']}";?></td>
                <td class="table_th"> <?php echo "{$info['medicine']}";?></td>
                <td class="table_th"> 

            </tr>
            <?php
            }
            ?>

            
        </table>

        </div>
        </center>
    </div>
</body>
</html>