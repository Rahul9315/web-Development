<?php session_start() ; ?>
<!DOCTYPE html>
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
            <nav>
                <ul>
                    <li class="nav_li"><a href="index.html">HOME</a></li>
                    <li class="nav_li"><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </header>
    
        <div id="grid_container">
            <div class="main_menu">
                <h3 style="padding-left: 40%;">Menu :</h3><hr>
                <nav>
                <ol>
                    <li><a class="mainmenu_link" href="searchalldata.php">HOME</a></li>
                    <li><a class="mainmenu_link" href="searching.php">Search by book name</a></li>
                    <li><a class="mainmenu_link" href="Page_2.html">j</a></li>
                    <li><a class="mainmenu_link" href="Page_3.html">Sw</a></li>
                    <li><a class="mainmenu_link" href="Page_4.html">a Independent</a></li>
                    <li><a class="mainmenu_link" href="contact_us.html">Contact Us</a></li>
                </ol>
                </nav>
            </div>
            <div class="main_part">
                <h1 align="center">Contact Us</h1>
                <p class="contactUs">Em.</p>
                
                <table align="center">
                    <form method="post">
                        <tr>
                            <td><label>Book Name ::</label> </td>
                            <td><input type="text" name="searchbook"></td>
                        </tr>
                        <tr>
                            <td><input type="reset" value="  Reset  "></td>
                            <td><input type="submit" value="  Send  "></td>
                        </tr>
                    </form>
                </table>
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

                    if ( isset($_POST['searchbook'])) 
                    {
                        $search = $_POST['searchbook'];

                        $sql = "SELECT * FROM book_table WHERE BookTitle LIKE '%{$search}%' OR  Author = '%{$search}%' ";
                        $result = mysqli_query($connection, $sql);//important

                        echo "<table align='center' border='1'>";//table Start
                        //first row of Headings
                        echo "<tr>";
                        echo "<td>BookID</td>";
                        echo "<td>ISBN</td>";
                        echo "<td>BookTitle</td>";
                        echo "<td>Author</td>";
                        echo "<td>Edition</td>";
                        echo "<td>Year</td>";
                        echo "<td>Category</td>";
                        echo "<td>Reservation</td>";
                        echo "<td>Click to Reserve</td>";
                        echo "</tr>"; // first row of Headings ends

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
                            echo "<td>Click</td>";
                            echo "</tr>";
                        }
                        echo "</table>"; // Table Ends

                    }
                ?>


            </div>
        </div>
        <footer>
            <p class="footer_1">Site By ::: Rahul </p>
        </footer>  
    </body>
</html>