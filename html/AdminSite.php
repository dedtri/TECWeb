<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/loginAccount.php');  // PHP functions file
?>

<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="wrapper" id="wrapper">

        <div class="pageHeader">
            <a class="logoLink" href="./index.php"><span class="" id="logo">
                    <p class="logoName">Skoleoplæringscenter</p>
                </span></a>
                <a class="loginLink" href="./AdminSite.php">
                    <button class="loginButton">Login</button>
               </a>
        </div>
        <div class="AdminPage">
            <form action="./index.php" method="get">

                <p class="AdminTitle">Admin Login</p><br>
    
                <label id="Title" for="fullName">Brugernavn:</label><br>
                <input id="AdminBrugernavn" type="text" checked="checked" name="fullName"><br><br>
    
                <label id="Title" for="email">Password:</label><br>
                <input id="AdminPassword" type="password" name="email"><br><br>
    
                <label><input type="checkbox" checked="checked" name="remember"> Husk mig</label><br><br>

                <button class="SubmitButton" type="submit">Login</button>
            </form>
        </div>
    </div>

</body>

</html>