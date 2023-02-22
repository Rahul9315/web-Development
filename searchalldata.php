<!DOCTYPE html>
<?php session_start() ; ?>
<head>
    <title>All Book</title>
</head>
<body>
    <header>
    <div class="headpic">
        <p class="Heading">Contact Us</p>
    </div>
    <nav>
        <ul>
            <li class="nav_li"><a href="searchalldata.php">HOME</a></li>
            <li class="nav_li"><a href="logout.php">logout</a></li>
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
                    <li><a class="mainmenu_link" href="Page_2.html">Purna Swaraj</a></li>
                    <li><a class="mainmenu_link" href="Page_3.html">Swami Vivekanand</a></li>
                    <li><a class="mainmenu_link" href="Page_4.html">India Independent</a></li>
                    <li><a class="mainmenu_link" href="contact_us.html">Contact Us</a></li>
                </ol>
                </nav>
            </div>
            <div class="main_part">
                <h1 align="center">Contact Us</h1>
                <p class="contactUs">Email us with any Questions or inquiries or call +353-83-87-9317. We would be Happy to answer your questions and set up a meeting with you.</p>
                
                <table align="center">
                    <form>
                        <tr>
                            <td><label>Name ::</label> </td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td><label>Email :: </label> </td>
                            <td><input type="email"></td>
                        </tr>
                        <tr>
                            <td><label>Subject :: </label> </td>
                            <td><input type="text"><br></td>
                        </tr>
                        <tr>
                            <td>Message :: </td>
                            <td><textarea> Hi, </textarea></td>
                        </tr>
                        <tr>
                            <td><input type="reset" value="  Reset  "></td>
                            <td><input type="submit" value="  Send  "></td>
                        </tr>
                    </form>
                </table>
                <p class="contactUs">For Expert Solution contact :: <strong>jonathan.mccarthy@TUDublin.ie</strong></p>

                <br><br>
                <nav class="pagination">
                    <a href="Page_3.html"> &larr; </a> 
                    <a href="index.html"> 1 </a> 
                    <a href="Page_1.html"> 2 </a> 
                    <a href="Page_2.html"> 3 </a> 
                    <a href="Page_3.html"> 4 </a> 
                    <a href="Page_4.html"> 5 </a> 
                    <a href="contact_us.html"> 6 </a> 
                    <a href="contact_us.html"> &rarr; </a> 
                </nav>
            </div>
        </div>
        <footer>
            <p class="footer_1">Site By ::: Rahul </p>
        </footer>      
    </body>
</html>