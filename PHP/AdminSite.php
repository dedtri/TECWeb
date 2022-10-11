<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminside</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<?php
session_start();

if(!isset($_SESSION["loggedin"]) && !$_SESSION["loggedin"] === true){
  header("location: ../index.php");
  exit;
}

require_once('./db_connect.php');
require_once('./buttonCounter.php');
?>
    
<div class="wrapper" id="wrapper">
    <div class="pageHeader">
            <a class="logoLink" href="../index.php"><span class="" id="logo">
                    <p class="logoName">Skoleoplæringscenter</p>
                </span></a>
                <a class="loginLink" href="./LoginSite.php">
                <a href="./logout.php"><Button class="loginButton">Logout</Button></a>
               </a>
    </div>
    <div class="mainSection">
        <div class="topContent">
                <h1>Antal besøg på bestemte sider</h1>
        </div><br>       
        
    <div class="mainContent">



    <p class="stats">
		    <?php
$total_views = total_views($conn); // Returns total views of the website
echo "<strong>Samlet antal besøg på hjemmesiden: " . $total_views;
?>
<br>
<br>
    <?php
$total_page1_views = total_views($conn, 1); // Returns total views of this page
echo "<strong>Antal besøg på IT-support:</strong> " . $total_page1_views;
?>
<br>
<?php
$total_page2_views = total_views($conn, 2); 
echo "<strong>Antal besøg på Programmering:</strong> " . $total_page2_views;
?>  
<br>
<?php
$total_page3_views = total_views($conn, 3); 
echo "<strong>Antal besøg på Infrastruktur:</strong> " . $total_page3_views;
?>  
<br>
<?php
$total_page4_views = total_views($conn, 4); 
echo "<strong>Antal besøg på Drift/Lab:</strong> " . $total_page4_views;
?>  
<br>
<?php
$total_page5_views = total_views($conn, 5); 
echo "<strong>Antal besøg på IT-linje lokaler:</strong> " . $total_page5_views;
?>  
<br>
<?php
$total_page6_views = total_views($conn, 6); 
echo "<strong>Antal besøg på Services:</strong> " . $total_page6_views;
?>  
</p>

        </div>
    </div>
</div>



</body>
</html>
