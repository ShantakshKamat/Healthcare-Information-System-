
<!--THIS CODE SEARCHES PATIENT DETAILS AND  UPDATE/DELETES THEM ON REQUEST-->



<?php
error_reporting(0);
session_start();
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'hospitalproject');

if(isset($_POST['search'])){
    $id=$_POST['id'];
    $query="SELECT * FROM patient WHERE pid='$id'";
    $query_run=mysqli_query($connection,$query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
                <a class="btn btn-primary" href="prescription.php">Prescription Details</a>
            </li>

        </ul>
    </aside>

    <!-- only this part changes -->
    <div>
        <center>
        <div>
            <h1>Patient Table</h1>
            <form action="" method="POST">
            <input type="text" name="id" placeholder="Enter Patient ID">
            <input type="submit" name="search" value="search by ID">
            </form>
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
                <th class="table_th">pid</th>
                <th class="table_th">First Name</th>
                <th class="table_th">Last Name</th>
                <th class="table_th">Gender</th>
                <th class="table_th">Phone Number</th>
                <th class="table_th">Email</th>
                <th class="table_th">Delete</th>
                <th class="table_th">Update</th>
            </tr>


            <?php
            while($row=mysqli_fetch_array($query_run)){
                ?>
                <tr>
                    <td class="table_th"> <?php echo $row['pid']; ?></td>
                    <td class="table_th"> <?php echo $row['fname']; ?></td>
                    <td class="table_th"> <?php echo $row['lname']; ?></td>
                    <td class="table_th"> <?php echo $row['gender']; ?></td>
                    <td class="table_th"> <?php echo $row['phone']; ?></td>
                    <td class="table_th"> <?php echo $row['email']; ?></td>
                    <td class="table_th"> 
                        <?php 
                            echo "<a onClick=\"javascript:return confirm('Are you sure to delete?');\"
                            class='btn btn-danger' href='delete.php?patient_id={$row['pid']}'>Delete</a>";
                        ?>
                    </td>
                    <td class="table_th"> 
                        <?php 
                            echo "<a onClick=\"javascript:return confirm('Are you sure to update?');\"
                            class='btn btn-primary'href='update_patient.php?patient_id={$row['pid']}'>Update</a>";
                        ?>
                    </td>
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