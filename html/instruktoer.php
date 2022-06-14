<?php
session_start();
?>

<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruktoer</title>
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
                <h1>Instruktør</h1>
            </div>
           
            <div class="profilmainContent">
                <div class="profiln">
                    <img src="../img/profilbillede.png" alt="">
                    <div class="profiltekst">
                    <p>Navn: Test Person DD</p>
                    <p>E-mail: TP@TEC.dk</p>
                    <p>Tel.: 8888 8888</p>
                    <p>Lokation: Lokale 239E</p>
                </div>
                    </div>     
                        <div class="profiln">
                            <img src="../img/profilbillede.png" alt="">
                        <div class="profiltekst">
                        <p>Navn: Test Person</p>
                        <p>E-mail: TP@TEC.dk</p>
                        <p>Tel.: 8888 8888</p>
                        <p>Lokation: Lokale 239E</p>
                    </div>
                        </div>  
                            <div class="profiln">
                                <img src="../img/profilbillede.png" alt="">
                            <div class="profiltekst">
                            <p>Navn: Test Person</p>
                            <p>E-mail: TP@TEC.dk</p>
                            <p>Tel.: 8888 8888</p>
                            <p>Lokation: Lokale 239E</p>
                        </div>
                            </div>  
                                <div class="profiln">
                                    <img src="../img/profilbillede.png" alt="">
                                <div class="profiltekst">
                                <p>Navn: Test Person</p>
                                <p>E-mail: TP@TEC.dk</p>
                                <p>Tel.: 8888 8888</p>
                                <p>Lokation: Lokale 239E</p>
                            </div>
                                </div>  
                                    <div class="profiln">
                                        <img src="../img/profilbillede.png" alt="">
                                    <div class="profiltekst">
                                    <p>Navn: Test Person</p>
                                    <p>E-mail: TP@TEC.dk</p>
                                    <p>Tel.: 8888 8888</p>
                                    <p>Lokation: Lokale 239E</p>
                                </div>
                                    </div>  
                                        <div class="profiln">
                                            <img src="../img/profilbillede.png" alt="">
                                        <div class="profiltekst">
                                        <p>Navn: Test Person</p>
                                        <p>E-mail: TP@TEC.dk</p>
                                        <p>Tel.: 8888 8888</p>
                                        <p>Lokation: Lokale 239E</p>
                                    </div>
                                        </div>  
                                            <div class="profiln">
                                                <img src="../img/profilbillede.png" alt="">
                                            <div class="profiltekst">
                                            <p>Navn: Test Person</p>
                                            <p>E-mail: TP@TEC.dk</p>
                                            <p>Tel.: 8888 8888</p>
                                            <p>Lokation: Lokale 239E</p>
                                        </div>
                                            </div>  
                                                <div class="profiln">
                                                    <img src="../img/profilbillede.png" alt="">
                                                <div class="profiltekst">
                                                <p>Navn: Test Person</p>
                                                <p>E-mail: TP@TEC.dk</p>
                                                <p>Tel.: 8888 8888</p>
                                                <p>Lokation: Lokale 239E</p>
                                            </div>
                                                </div>  
                                                    <div class="profiln">
                                                        <img src="../img/profilbillede.png" alt="">
                                                    <div class="profiltekst">
                                                    <p>Navn: Test Person</p>
                                                    <p>E-mail: TP@TEC.dk</p>
                                                    <p>Tel.: 8888 8888</p>
                                                    <p>Lokation: Lokale 239E</p>
                                                </div>
                                            </div>  
                                                                                             
            </div>
        </div>
    </div>
</body>

</html>