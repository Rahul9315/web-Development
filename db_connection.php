<?php

$dbservername= "localhost";
$dbusername= "root";
$dbpassword= "";
$db_name= "assignment";

// Create connection
$connection = new mysqli ($dbservername, $dbusername, $dbpassword, $db_name);

// Check connection
if ($connection -> connect_error) {
    die ("Connection failed: ".$connection -> connect_error);
}


?>