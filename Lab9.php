<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/html1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Lab 9</title>
</head>

<body>

    <p>Add ADdress User</p>
    <form method="post">
    <p>Address 1:
    <input type="text" name="Address1"></p>
    <p>Address 2:
    <input type="text" name="Address2"></p>
    <p>County:
    <input type="text" name="County"></p>
    <p>EIRCODE:
    <input type="text" name="EIRCODE"></p>
    <p><input type="submit" value="Add New"/></p>
    </form>

    <a href="logout.php">LOgOUT</a>

    <?php

        $DBservername = "localhost";
        $DBusername = "root";
        $DBpassword = "";
        $dbname = "assignment";

        // Create connection
        $connection = new mysqli ($DBservername, $DBusername, $DBpassword, $dbname);

        // Check connection
        if ($connection -> connect_error) {
            die ("Connection failed: ".$connection -> connect_error);
        }

        if ( (isset($_POST['Address1']) && isset($_POST['Address2']) && isset($_POST['County']) && isset($_POST['EIRCODE'])) )
        {
            
            $p5 = $_POST['Address1'];
            $p6 = $_POST['Address2'];
            $p7 = $_POST['County'];
            $p8 = $_POST['EIRCODE'];

            $sql = "INSERT INTO  lab_9 (UserID, Address1, Address2, County, EIRCODE) VALUES (null,'$p5', '$p6', '$p7', '$p8')";
            if ($connection->query($sql) === TRUE)
            {

                echo "New Address Added successfully";

            } else 
            {

                echo "Error: " . $sql . "<br>" . $connection->error;
            }

        $connection->close();
        }

    ?>

</body>

</html