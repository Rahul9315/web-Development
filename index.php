<?php
session_start();
echo "\n";
?>
<!DOCTYPE html>

<html>
<head>
</head>
<body style="font-family: sans-serif;">

<?php
echo "\n";
?>
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
<h1>Login Page</h1>
  <form action="login1.php" method="post">
    <table>
    <tr><td><label>Username:</label></td></tr>
    <tr><td><input type="text" name="Username" placeholder="Your name.."></td></tr>
    <tr><td><label >Password:</label></td></tr>
    <tr><td><input type="text"  name="Password" placeholder="Your last name.."></td></tr>
    
    <tr><td></td></tr>

    <tr><td><input type="submit" value="Log In"></td></tr>


    </table>
  </form>
  <form action="register.php">
    <input type="submit" value="Register">
  </form>
</div>

</body>
</html>