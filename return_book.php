<?php
session_start();
include "db_connection.php";
$id = intval($_GET['id']);

echo "Are You Sure!!! , You want to return the book of ID " .$id;

if ( isset($_POST['delete'])) {

    $sql ="SELECT * FROM book_issued WHERE ID = $id";
    $result1 = mysqli_query($connection, $sql);//important

    if ($row1 = mysqli_fetch_array($result1)) {
                            
        $isbn = $row1['ISBN'];                         
    }

    $sql ="UPDATE book_table SET Reservation = 'N' WHERE ISBN LIKE '$isbn%' ";
    $result2 = mysqli_query($connection, $sql);//important

    $sql = "DELETE FROM book_issued Where ID = '$id' ";
    $result = mysqli_query($connection, $sql);//important
    echo "<h1><br>Book Returned....</h1>";
    

}
//$z = $_POST['ID'];
echo "<form method='post'>";
echo "    <button type='submit' name='delete'>Return</button>";
echo "</form>";
echo "<a href='Page3.php'>Continue.....</a>  "



?>