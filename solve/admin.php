<?php 
include("dbconn.php");
?>

<html>
<head>
<title>Admin</title>
    <link href="css/style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
    #main {
    width: 300px;
    height: 70px;
    border: 1px solid #73AD21;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-align-content: center;
    align-content: center;
        align-self: center;
}

#main div {
    width: 70px;
    height: 70px;
}
    </style>
</head>
<body>
    
    <div class="input-container" style="font-size:14px;">  
        <div id="main">
            <a href="signup.php">Register Here</a></div>
    </div>
    <div class="input-container" style="font-size:15px;">
        <div id="main">
            <a href="login.php">Login Here</a></div>
    </div>
    </body>
</html>