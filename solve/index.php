<?php 
include("dbconn.php");
?>

<html>
<head>
<title>front page</title>
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
         #professor {
    width: 300px;
    height: 70px;
    border: 1px solid #73AD21;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-align-content: center;
        align-self: center;
}

#professor div {
    width: 70px;
    height: 70px;
}
</style>
<link rel="stylesheet" type="text/css" href="front/front.css">
</head>
<body>
        <div class="container" style="margin-top:20%;">
            <div class="input-container">
                <div id="main">
                    <font size=6>
                        <a href="admin.php"><mark>Admin</mark></a>
                    </font>
            </div>
                    <div id="professor">
                        <font size=6><p align="center">
                            <a href="professor.php"><mark>Professor</mark></a></p>
                        </font>
    </div>
        
</div>
        </div>
</body>