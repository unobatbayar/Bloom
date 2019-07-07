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
      google.charts.load('current', {'packages':['timeline']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var container = document.getElementById('timeline');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();

        dataTable.addColumn({ type: 'string', id: 'President' });
        dataTable.addColumn({ type: 'date', id: 'Start' });
        dataTable.addColumn({ type: 'date', id: 'End' });
        dataTable.addRows([
          [ 'Joan Doe', new Date(2019, 5, 21), new Date(2020, 2, 4) ],
          [ 'Adela Jumana', new Date(2018, 11, 29), new Date(2019, 8, 25) ],
          [ 'Lorisa Jane',  new Date(2019, 1, 2),  new Date(2019, 9, 24) ],
          [ 'Jefferson',  new Date(2019, 7, 7),  new Date(2020, 2, 4) ]
        
        ]);

        chart.draw(dataTable);
      }
    </script>

</head>
<body>
<!-- Header -->
<div class="uk-section-primary uk-preserve-color">
<?php include 'include/header.php'; ?>

<div id="tabnavigations" class="uk-text-center">
<div class="uk-section uk-light">
                <h1> 
                <img src="Images/analytics.png" alt="Smiley face" height="  " width="100"> Analytics</h1>
                <h3> Maternal, new-born and child health data, checkups and progress with visual analysis </h3>
            </div>
        </div>
</div>

<!-- VISUALISE DATA -->
<div class="uk-background uk-padding uk-text-center uk-text-emphasis">
    <h1> Births coming up </h1>
    <div id="timeline" style="height: 1200px;"></div>

<?php 
    include 'include/footer.php';
    include 'include/offcanvas.php';
?>
</body>
</html> 