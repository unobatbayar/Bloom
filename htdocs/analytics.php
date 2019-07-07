<!DOCTYPE html>
<html>
<head>
<title>Chatbot</title>
<?php 
    include 'include/sources.php';
    require 'include/config.php';
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var ngo = google.visualization.arrayToDataTable([
          ['Region', 'Members'],
          ['Africa Region',     147],
          ['Americas Region',     126],
          ['South East Asia Region', 87],
          ['Europe',  71],
          ['Eastern Mediterranean',      29],
          ['Western Pacific Region',    12],
        //   ['Total',    7]

        ]);
        var total = google.visualization.arrayToDataTable([
          ['Constitutes', 'Total'],
          ['Non-governmental Organisation (NGO)',   472],
          ['Academic, Research and Training Institutes (ART)', 124],
          ['Healthcare Professionals Associations (HCPA)',      42],
          ['Private Sector (PS)',  38],
          ['Donors and Foundations (D&F)',    25],
          ['Partner Countries (PC)',    21],
          ['Multilateral Organisations (MO)',    13],
          ['Adolescents and Youth (A&Y)',    5],

        ]);

        var options = {
          title: '',
          is3D: true,
        };
        

        var chart = new google.visualization.PieChart(document.getElementById('total'));
        var chart2 = new google.visualization.PieChart(document.getElementById('ngo'));

        chart.draw(total, options);
        chart2.draw(ngo, options);
      }
    </script>
</head>
<body>
<!-- Header -->
<div class="uk-section-primary uk-preserve-color">
<?php include 'include/header.php'; ?>

        <div class="uk-section uk-light">
            <div class="uk-container uk-text-center">    
                <p id="contact"></p>
                <h1> 
                <img src="Images/analytics.png" alt="Smiley face" height="100" width="100"> Analytics</h1>
                <h3> Maternal, new-born and child health data, checkups and progress with visual analysis </h3>
            </div>
        </div>
</div>

<!-- VISUALISE DATA -->
<div class="uk-background uk-padding uk-text-center uk-text-emphasis">
    <h3> Non-govermental organisations (NGO) </h3>
    <div id="ngo" style="width: 1000px; height: 700px;"></div>
    <h3> Total </h3>
    <div id="total" style="width: 1000px; height: 700px;"></div>

</body>
</html> 