<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data by its ID</title>
</head>


<body>
    
<h1>Search from database</h1>

    <div class="container">
        <form action="" method="POST">
            <input type="text" name="id" placeholder="Enter Patient ID">
            <input type="submit" name="search" value="search by ID">
        </form>
        <table>
            <tr>

                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
            </tr> <br>


            <?php
            $connection=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,'hospitalproject');

            if(isset($_POST['search'])){
                $id=$_POST['id'];
                $query="SELECT * FROM patient WHERE pid='$id'";
                $query_run=mysqli_query($connection,$query);

                while($row=mysqli_fetch_array($query_run)){
                    ?>
                    <tr>
                        <td> <?php echo $row['fname']; ?></td>
                        <td> <?php echo $row['lname']; ?></td>
                        <td> <?php echo $row['gender']; ?></td>
                        <td> <?php echo $row['phone']; ?></td>
                        <td> <?php echo $row['email']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>



    </div>


</body>
</html>