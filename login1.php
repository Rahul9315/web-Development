<?php
session_start();
include "db_connection.php";

if ( isset($_POST["Username"]) && isset($_POST["Password"]) ) 
{ 
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Username = validate($_POST['Username']);
    $Password = validate($_POST['Password']);

    if (empty($Username)) {
        header( 'Location: index.php?error=NO User Name' ) ; 
        exit();
    }elseif (empty("$Password")) {
        header( 'Location: index.php?error=No Pass Entered' ) ; 
        exit();
    }else{
        $sql = "SELECT * FROM users_table WHERE Username = '$Username' AND Password = '$Password'";
        $result = mysqli_query($connection, $sql);//important

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Username'] === $Username && $row['Password'] === $Password) {
                $_SESSION["FirstName"] = $row["FirstName"];
                header("Location: Page1.php");
                exit();
            }else {
                header( 'Location: login1.php?error= Incorrect Password or User Name');
                exit();
            }

        }else   { 
            header( 'Location: login1.php?error= Incorrect Password or User Name');
            exit();
        }
    }

     
} else {
        header( 'Location: index.php?error' ) ; 
        exit(); 
    } 
?>


