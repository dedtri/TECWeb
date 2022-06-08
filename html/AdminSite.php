<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/buttonCounter.php');  // PHP functions file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<script type="text/javascript"></script>

<body>
    <div class="wrapper" id="wrapper">
        <header class="pageHeader">
            <a Class="logoLink" href="./index.php"><p class="logoName">Skoleoplæringscenter</p></a>
            <a class="AdminLogin" href="./LoginSite.php"><Button class="loginButton">Login</Button></a>
        </header>
        <br>
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
<br>
  <a center href="../php/logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
</div>

        <div class="pageHeader">
            <a class="logoLink" href="./index.php"><span class="" id="logo">
                    <p class="logoName">Skoleoplæringscenter</p>
                </span></a>
                <a class="loginLink" href="./AdminSite.php">
                    <button class="loginButton">Login</button>
               </a>
        </div>
        
        <div class="AdminPage">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="Post">

    
                <label id="Title" for="fullName">Brugernavn:</label><br>
                <input id="AdminBrugernavn" type="text" checked="checked" name="username" class="form-control<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?><br><br>
    
                <label id="Title" for="email">Password:</label><br>
                <input id="AdminPassword" type="password" name="password" class="form-control<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?><br><br>
                <?php 
        if(!empty($login_err)){
            echo '<span style="color: red;>"<strong><div class="alert alert-danger"><strong>' . $login_err . '</div>';
        }        
        ?><br>


                <button class="SubmitButton" type="submit">Login</button>
            </form>
            
        </div>
    </div>

</body>

</html>
