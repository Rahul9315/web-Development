<?php
session_start();
include "db_connection.php";
$isbn = strval($_GET['ibsn']);

echo "Are You Sure!!! ,You want to reserve this book : " .$isbn;


if ( isset($_POST['reserve'])) {
    

    $sql ="SELECT * FROM book_table WHERE ISBN LIKE  '$isbn%'  ";
    $result1 = mysqli_query($connection, $sql);//important

    if ($row1 = mysqli_fetch_array($result1)) {
        $booktitle = $row1['BookTitle'];
        $reservation = $row1['Reservation'];
    }

    $firstname = $_SESSION["FirstName"];

    $sql ="UPDATE book_table SET Reservation = 'Y' WHERE ISBN LIKE '$isbn%' ";
    $result2 = mysqli_query($connection, $sql);//important

    $sql = "SELECT * FROM users_table WHERE FirstName LIKE '$firstname' ";
    $answer1 = mysqli_query($connection, $sql);//important

    if ($row2 = mysqli_fetch_array($answer1)) {
                            
        $username = $row2['Username'];
        $userID = $row2['UserID']; 
        
    }
    if ($reservation == 'N') {
        echo "<h1> You added Book Sucessful ....</h1>";

        $d=strtotime("+1 Months");
        $s = date("Y-m-d", $d);

        $k = date("Y-m-d");
       

        $sql ="INSERT INTO book_issued (UserName , UserID, ISBN, BookTitle, DateIssued, DueDate) Values ('$username','$userID','$isbn', '$booktitle','$k','$s' )";
        $result2 = mysqli_query($connection, $sql);//important

        $sql = "UPDATE book_table SET Reservation = 'Y' WHERE ISBN LIKE '$isbn%' ";
        $result3 = mysqli_query($connection, $sql);//important

    }else {
        echo "<br><br> <h1>Soory Book is already Reserved</h1> ";
    }

    

}
//$z = $_POST['ID'];
echo "<form method='post'>";
echo "    <button type='submit' name='reserve'>Reserve</button>";
echo "</form>";
echo "<a href='page1.php'>Continue.....</a>  "



?>