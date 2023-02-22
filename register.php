<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/html1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Lab 7</title>
    <style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=tel] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=password] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  margin:auto;
  width:30%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
table {
    width: 100%;
}
    </style>
</head>

<body>

<div class="container">
    <h1>Add New User</h1>
  <form method="post">
    <table>
    <tr><td><label >Username:</label></td></tr>
    <tr><td><input type="text"  name="Username" placeholder="Enter Username.."></td></tr>
    <tr><td><label >Password:</label></td></tr>
    <tr><td><input type="password"  name="Password" placeholder="Type Password.."></td></tr>
    
    <tr><td><label >Firstname:</label></td></tr>
    <tr><td><input type="text"  name="FirstName" placeholder="Your First name.."></td></tr>
    <tr><td><label >Surname:</label></td></tr>
    <tr><td><input type="text"  name="Surname" placeholder="Your last name.."></td></tr>

    <tr><td><label >Address Line 1:</label></td></tr>
    <tr><td><input type="text"  name="AddressLine1" placeholder="Your address.."></td></tr>
    <tr><td><label >Address Line 2:</label></td></tr>
    <tr><td><input type="text"  name="AddressLine2" placeholder="Your address 2 .."></td></tr>

    <tr><td><label >City:</label></td></tr>
    <tr><td><input type="text"  name="City"></td></tr>

    <tr><td><label >Telephone:</label></td></tr>
    <tr><td><input type="tel"  name="Telephone" ></td></tr>
    <tr><td><label >Mobile:</label></td></tr>
    <tr><td><input type="tel"  name="Mobile" ></td></tr>
    <tr><td></td></tr>
    <tr><td><input type="submit" value="Add New"></td></tr>


    </table>
  </form>
  <form action="index.php">
    <input type="submit" value="Back">
  </form>


</div>



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

        if ( isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['FirstName']) && isset($_POST['Surname']) && isset($_POST['AddressLine1']) && isset($_POST['AddressLine2']) && isset($_POST['City']) && isset($_POST['Telephone']) && isset($_POST['Mobile']) )
        {
            $p1 = $_POST['Username'];
            $p2 = $_POST['Password'];
            $p3 = $_POST['FirstName'];
            $p4 = $_POST['Surname'];
            $p5 = $_POST['AddressLine1'];
            $p6 = $_POST['AddressLine2'];
            $p7 = $_POST['City'];
            $p8 = $_POST['Telephone'];
            $p9 = $_POST['Mobile'];

            if (is_numeric($p8)) {
                # code...
            }
            else{
                echo 'Error: You did not enter numbers';
                echo'  ';
            }

            $sql = "INSERT INTO users_table (UserID, Username, Password, FirstName, Surname, AddressLine1, AddressLine2, City, Telephone, Mobile ) VALUES (null, '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9')";
            if ($connection->query($sql) === TRUE)
            {

                echo "New User Added successfully";

            } else 
            {

                echo "Error: " . $sql . "<br>" . $connection->error;
            }

        $connection->close();
        }

    ?>

</body>

</html