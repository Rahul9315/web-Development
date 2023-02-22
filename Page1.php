<?php session_start() ; 
?>
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
        input[type=text], select {
            width: 50%;
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
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
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
                    <h1>Type Book Name</h1>

                    <div Class="form_container">
                    <form method="post">
                             
                            <input type="text" name="searchbook" placeholder="Type Book Name or Authur Name">
                                                  
                            <input type="submit" value="  Send  ">
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

                    if ( isset($_POST['searchbook']) ) 
                    {
                        $search = $_POST['searchbook'];
                        

                        $sql = "SELECT * FROM book_table WHERE BookTitle LIKE '%{$search}%' OR  Author LIKE '%{$search}%' ";
                        $result = mysqli_query($connection, $sql);//important

                        echo "<table Class='styled-table' >";//table Start
                        //first row of Headings
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>BookID</th>";
                        echo "<th>ISBN</th>";
                        echo "<th>BookTitle</th>";
                        echo "<th>Author</th>";
                        echo "<th>Edition</th>";
                        echo "<th>Year</th>";
                        echo "<th>Category</th>";
                        echo "<th>Reservation</th>";
                        echo "<th>Click to Reserve</th>";
                        echo "</tr>"; // first row of Headings ends
                        echo "</thead>";


                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result))
                        {
                            //echo $row['BookTitle'] . " " . $row['Year'];
                            //echo "<br>";
                            echo "<tr>";
                            echo "<td>". $row['BookID']. "</td>";
                            echo "<td>". $row['ISBN']. "</td>";
                            echo "<td>". $row['BookTitle']. "</td>";
                            echo "<td>". $row['Author']. "</td>";
                            echo "<td>". $row['Edition']. "</td>";
                            echo "<td>". $row['Year']. "</td>";
                            echo "<td>". $row['Category']. "</td>";
                            echo "<td>". $row['Reservation']. "</td>";
                            echo "<td>";
                            echo '<a href="reserve.php?ibsn='.$row['ISBN'].' "> Reserve </a>  ';
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>"; // Table Ends
                    }
                ?>
                </div>
                
            </div>     
           
    </body>
</html>