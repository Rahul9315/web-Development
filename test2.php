<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}



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

<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <table>
    <tr><td><label for="fname">First Name</label></td></tr>
    <tr><td><input type="text" id="fname" name="firstname" placeholder="Your name.."></td></tr>
    <tr><td><label >Last Name</label></td></tr>
    <tr><td><input type="text" id="lname" name="lastname" placeholder="Your last name.."></td></tr>
    <tr><td><label for="country">Country</label></td></tr>
    <tr><td><select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select></td></tr>
    <tr><td><label for="subject">Subject</label></td></tr>
    <tr><td><textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea></td></tr>
    <tr><td></td></tr>
    <tr><td><input type="submit" value="Submit"></td></tr>


    </table>
  </form>
</div>

</body>
</html>
