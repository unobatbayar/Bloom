<?php 
    require 'include/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Chatbot</title>
<?php 
    include 'include/sources.php';
?>
</head>
<body>
<?php include 'include/header.php'; ?>
<!-- Header -->
<div id="tabnavigations" class="uk-text-center">
<div class="uk-section uk-light">
            <div class="uk-container uk-text-center">    
                <h1> 
                <img src="Images/note.png" alt="Smiley face" height="70" width="70"> Patient data</h1>
                <h3> Progress of currently registered pregnant mothers or with new-borns </h3>
            </div>
        </div>
</div>

<!-- VISUALISE DATA -->
<br>
</div>
<?php
$i = 1 + rand();
$data = $mysqli->query("SELECT * FROM patients");  
while($row = $data->fetch_assoc()) {
    echo'<form action="../p/view" method="GET"> ';
    echo'<button type="submit" class="uk-background-muted uk-button uk-button-default uk-button-large uk-width-1-1"> Patient generated ID: '.$i.'<div class="uk-container uk-container-small uk-text-break">';
    echo '<span class="uk-text-large uk-text-bold">'.htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8').' <span class="uk-label uk-label-warning">'.htmlspecialchars($row['major'], ENT_QUOTES, 'UTF-8').'</span>'.'</span></br>';
    echo '<div class="uk-text-small">Blood type: '.htmlspecialchars($row['blood_type'], ENT_QUOTES, 'UTF-8').' <div class="uk-text-success">Health status: '.htmlspecialchars($row['health_status'], ENT_QUOTES, 'UTF-8').'</div></br>';
    echo '<div class="uk-text-small">Expecting baby: '.htmlspecialchars($row['baby_due_date'], ENT_QUOTES, 'UTF-8').' <div class="uk-text-emphasis">Child born: '.htmlspecialchars($row['born'], ENT_QUOTES, 'UTF-8').'</div></br></br>';
    echo '</div></div></button><p></p>';
    echo '</form>';
    $i++;
}
?>


<?php 
    include 'include/footer.php';
    include 'include/offcanvas.php';
?>
</body>
</html> 