<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/functions.php');  // PHP functions file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<script type="text/javascript"></script>

<body>
    <div class="wrapper" id="wrapper">
        <header class="pageHeader">
            <a Class="logoLink" href="./index.php"><p class="logoName">TEC</p></a>
            <a class="AdminLogin" href="./AdminSite.php"><Button class="loginButton">Login</Button></a>
        </header>
        <p class="ITFagTitle">Du nu logget ind</p>
        <p class="ITFagTitle">
            
        <br>
        <?php
  $total_page1_views = total_views($conn, 1); // Returns total views of this page
  echo "<strong>Antal besøg på IT-support:</strong> " . $total_page1_views;
  ?>
  <br>
  <?php
  $total_page2_views = total_views($conn, 2); // Returns total views of this page
  echo "<strong>Antal besøg på Programmering:</strong> " . $total_page2_views;
  ?>  
  <br>
  <?php
  $total_page2_views = total_views($conn, 3); // Returns total views of this page
  echo "<strong>Antal besøg på Infrastruktur:</strong> " . $total_page2_views;
  ?>  
  <br>
  <?php
  $total_page2_views = total_views($conn, 4); // Returns total views of this page
  echo "<strong>Antal besøg på Drift:</strong> " . $total_page2_views;
  ?>  
  <br>
  <?php
  $total_page2_views = total_views($conn, 5); // Returns total views of this page
  echo "<strong>Antal besøg på Lab:</strong> " . $total_page2_views;
  ?>  
  <br>
  <?php
  $total_page2_views = total_views($conn, 6); // Returns total views of this page
  echo "<strong>Antal besøg på Services:</strong> " . $total_page2_views;
  ?>  
  

</p>


    </div>

</body>