<?php session_start() ; ?>
<!DOCTYPE html>
    <style>
        html{
            background:rgb(217, 217, 217);
        }
        .imglogo{
            margin:auto;
        }
        .innerdiv {
            text-align:center;
            margin :100px;

        }
        .leftinnerdiv{
            float: left;
            width: 25%;
        }
        .rightinnerdiv {
            float: right;
            width: 75%;

            
        }
        .innerright {
            background-color: #f3bd7e;
        }
        .graybutton{
            background-color:rgb(139, 145, 138);
            color:white;
            width:95%;
            height: 40px;
            margin-top: 8px;
        }
        .styled-table {
            border-collapse: collapse;
            
            margin: 25px 35px;
            align: center;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }


    </style>

    <body>
        <header>
            <div class="headpic">
                <p class="Heading">
                
                <?php
                // to say Welcome Alan
                echo "Welcome, " .$_SESSION["FirstName"];
                ?> 

                </p>
            </div>
        </header>

        <div class="Container">
        <div class="innerdiv">
            <div class="row"><img class="imglogo" src="images/logo1.png"></div>
                <div class="leftinnerdiv">
                    <button class = "graybutton" >
                    <?php
                    // to say Welcome Alan
                    echo "Welcome, " .$_SESSION["FirstName"];
                    ?> 
                    </button>
                    <form action="Page1.php">
                        <button class="graybutton" type="submit">Search Book</button>
                    </form>
                    <form action="Page2.php">
                        <button class="graybutton" type="submit">Search book by Category</button>
                    </form> 
                    <form action="Page3.php">
                        <button class="graybutton" type="submit">Issued Book</button>
                    </form>
                    
                    <form action="logout.php">
                        <button class="graybutton" type="submit">Logout</button>
                    </form>       
                </div>





                <div class="rightinnerdiv">
                    <h1>Books You Reserved</h1>

                    <table align="center">
                    
                <?php
                    include "db_connection.php";
                    $firstname = $_SESSION["FirstName"];

                    $sql = "SELECT * FROM users_table WHERE FirstName LIKE '$firstname' ";
                    $answer1 = mysqli_query($connection, $sql);//important

                    if ($row1 = mysqli_fetch_array($answer1)) {
                        
                        $username = $row1['Username'];
                        $userID = $row1['UserID']; 

                        echo "UserName:  ".$username;
                        echo "<br> UserId:  ".$userID;
                    }

                    $sql = "SELECT * FROM book_issued WHERE UserName LIKE '$username' ";
                            $result = mysqli_query($connection, $sql);//important
    
                            echo "<table Class='styled-table'>";//table Start
                            //first row of Headings
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>UserName</th>";
                            echo "<th>UserID</th>";
                            echo "<th>ISBN</th>";
                            echo "<th>Book Title</th>";
                            echo "<th>Date Issued</th>";
                            echo "<th>Due Date</th>";
                            echo "<th>Return</th>";
                            echo "</tr>"; // first row of Headings ends
                            echo "</thead>";

                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result))
                            {
                                //echo $row['BookTitle'] . " " . $row[''];
                                //echo "<br>";
                                echo "<tr>";
                                echo "<td>". $row['ID']. "</td>";
                                echo "<td>". $row['UserName']. "</td>";
                                echo "<td>". $row['UserID']. "</td>";
                                echo "<td>". $row['ISBN']. "</td>";
                                echo "<td>". $row['BookTitle']. "</td>";
                                echo "<td>". $row['DateIssued']. "</td>";
                                echo "<td>". $row['DueDate']. "</td>";
                                echo "<td>";
                                echo '<a href="return_book.php?id='.$row['ID'].' "> Return </a>  ';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>"; // Table Ends 
                    
                ?>

                </div>
        </div>        
    </body>
</html>