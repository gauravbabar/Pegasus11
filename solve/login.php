<?php 
include("dbconn.php");
?>

<!DOCTYPE HTML>
<html>
<head><title>Employee
        </title>
      <link rel="stylesheet" href="front.css">
</head>
    
    <body>
        <center>
<form name="myform" action="action_page.php">
  <div class="container">
    <input type="text" placeholder="Enter Username" name="uname" required>

    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
     <div class="input-container" style="font-size:14px;">
            Not Registered ? Click <a href="signup.php">here</a> to register
        </div>
</form>
        </center>
</body>
</html>