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
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="wrapper" id="wrapper">

        <div class="pageHeader">
            <a class="logoLink" href="./index.php"><span class="" id="logo">
                    <p class="logoName">TEC</p>
                </span></a>
                <a class="loginLink" href="./AdminSite.php">
                    <button class="loginButton">Login</button>
               </a>
        </div>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
        <div class="AdminPage">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="Post">

                <p class="AdminTitle">Admin Login</p><br>
    
                <label id="Title" for="fullName">Brugernavn:</label><br>
                <input id="AdminBrugernavn" type="text" checked="checked" name="username" class="form-control<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?><br><br>
    
                <label id="Title" for="email">Password:</label><br>
                <input id="AdminPassword" type="password" name="password" class="form-control<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?><br><br>
    
                <label><input type="checkbox" checked="checked" name="remember"> Husk mig</label><br><br>

                <button class="SubmitButton" type="submit">Login</button>
            </form>
        </div>
    </div>

</body>

</html>