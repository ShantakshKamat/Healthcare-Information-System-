
<?php
error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="hospitalproject";

$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['doctor_id'];
$sql="SELECT * FROM doctor WHERE did='$id'";
$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();

if(isset($_POST['update'])){
    $dname=$_POST['dname'];
    $email=$_POST['email'];
    $specialization=$_POST['specialization'];
    $contact=$_POST['contact'];

    $query="UPDATE doctor SET dname ='$dname', email='$email',specialization='$specialization',contact='$contact'
    WHERE did='$id'";

    $result2=mysqli_query($data,$query);
    
    if($result2){

        echo "update success";
        header("location:display_doctor.php");
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
            <h1>Update Patient</h1>
        </div>
     
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label >Name</label>
                    <input type="text" name="dname" value="<?php echo"{$info['dname']}";?>">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo"{$info['email']}";?>">
                </div>
                <div>
                    <label>Specialization</label>
                    <input type="text" name="specialization" value="<?php echo"{$info['specialization']}";?>">
                </div>
                <div>
                    <label>Contact</label>
                    <input type="number" name="contact" value="<?php echo"{$info['contact']}";?>">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="update" value="Update">
                </div>

            </form>
        </div>
        </center>

    </div>
</body>
</html>