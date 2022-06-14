<?php
require_once "../php/db_connect.php";
require_once('../php/buttonCounter.php');

$query = "select * from antalBesøg";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin site</title>
    <link rel="stylesheet" href="../css/style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

          <?php

        while($chart = mysqli_fetch_assoc($result))
                {
                    echo "['".$chart['navn']."',".$chart['samlet_besøg']."],";
                }

          ?>

        ]);

        var options = {
          title: 'Antal besøg på de bestemte sider'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data);
      }
    </script>

</head>
<body>
<div class="wrapper" id="wrapper">
<div class="pageHeader">
            <a class="logoLink" href="./index.php"><span class="" id="logo">
                    <p class="logoName">Skoleoplæringscenter</p>
                </span></a>
                <a class="loginLink" href="./LoginSite.php">
                <a href="../php/logout.php"><Button class="loginButton">Logout</Button></a>
               </a>
        </div>
        <div class="mainSection">
        <div class="topContent">
                <h1>Antal besøg på bestemte sider</h1>
            </div>
        <div class="mainContent">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
    <div class="mainContent">

    <p class="stats">
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
echo "<strong>Antal besøg på Drift/Lab:</strong> " . $total_page2_views;
?>  
<br>
<?php
$total_page2_views = total_views($conn, 5); // Returns total views of this page
echo "<strong>Antal besøg på IT-linje lokaler:</strong> " . $total_page2_views;
?>  
<br>
<?php
$total_page2_views = total_views($conn, 6); // Returns total views of this page
echo "<strong>Antal besøg på Services:</strong> " . $total_page2_views;
?>  

</p>


    </div>
    </div>

</div>
</body>
</html>
