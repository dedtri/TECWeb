<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drift</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/scripts.js"></script>
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
                <h1>Lokaler</h1>
            </div>



            <div class="topContent2">

            <button class="loginButton"
                 onclick=lokale1();>
             Service Disk
         </button>

         <button class="loginButton"
                 onclick=lokale2();>
             Vejleder
         </button>

         <button class="loginButton"
                 onclick=lokale3();>
             Lab
         </button>

         <button class="loginButton"
                 onclick=lokale4();>
             Chef
         </button>

         <button class="loginButton"
                 onclick=lokale5();>
             Personale
         </button>

            </div>  
           
            <div class="mainContent">

               <img id="myImage" class="kort" src="../img/BilledeAfSkole.jpg" alt="">


        </div>
                    

         
         
        </div>
    </div>

    <?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/buttonCounter.php');  // PHP functions file

session_start();

$page_id = 4;

add_view($conn, $page_id);
?>
</body>

</html>