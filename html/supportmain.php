<?php
session_start();
?>
<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    
    <div class="wrapper" id="wrapper">

        <div class="pageHeader">
            <a class="logoLink" href="./index.php"><span class="" id="logo">
                    <p class="logoName">Skoleoplæringscenter</p>
                </span></a>
                <div>
       <a class="AdminLogin" href="./LoginSite.php"><Button class="loginButton" <?php if((isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Login</Button></a>
       <a class="AdminLogin" href="./AdminSite.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Admin</Button></a> 
       <a class="AdminLogin" href="../php/logout.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Logout</Button></a> 
    </div>
        </div>

        <div class="mainSection">

            <div class="topContent">
                <h1>Support</h1>
            </div>
           
            <div class="mainContent">
                <div class="textBox">
                <p>Har du problemer i forhold til hjemmesiden?</p>
                <p>eller foreslag til forbedringer?</p>
                <br>
                <p>Kom i kontakt med os:</p>
                <br>
                <p class="boldText">Tlf: 48287198</p> 
                <p class="boldText">Mail: MogM@TEC.dk</p>
                <br>
                <img src="../img/help1.jpg" alt="">
            </div>
        </div>
    
    </div>
</body>

</html>