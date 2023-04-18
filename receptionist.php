<!-- parent php of dashboard -->

<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Dashboard</title>
    <link rel="stylesheet" href="receptionist.css">
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
            <li>
                <a class="btn btn-primary" href="prescription2.php">View Prescription Details</a>
            </li>

        </ul>
    </aside>

    <div>
        <center>
        <table>
        <tr>
        <td><img class="gy"src="gynac.jpg"></td>
        <td><img class="gy"src="ortho.png"></td>
        <td><img class="gy"src="opthalm.jpg"></td>
        </tr></table>
        </center>
    </div>
</body>
</html>