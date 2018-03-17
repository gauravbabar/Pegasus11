<?php 
include("dbconn.php");
?>

<!DOCTYPE HTML>
<html>
<head><title>Employee
        </title>
      <link rel="stylesheet" href="front.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x !== 10) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>

</head>
    <body>
<center>        
  <form  name="myForm" action="add.php" onsubmit="return validateForm()" method="POST">
  <div class="container">
    <h1>Sign Up</h1><br>
    <p>Please fill in this form to create an account.</p><br>
      <input type="text" placeholder="First name" name="fname" required><br>
            <input type="text" placeholder="Last name" name="lname" required><br>

    <input type="email" placeholder="Enter Email" name="email" required><br>
      
      <input type="number" placeholder="Enter contact" name="contact" id="numb" required><br>
      <p id="demo"></p><br>

    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label><br>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p><br>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
        <div class="input-container" style="font-size:14px;">
            Already Registered ? Click <a href="login.php">here</a> to login
        </div>
    </div>
  </div>
</form>
    </center>
    </body>
</html>