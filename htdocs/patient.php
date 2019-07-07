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
<!-- Header -->
<div class="uk-section-primary uk-preserve-color">
<?php include 'include/header.php'; ?>
        <div class="uk-section uk-light">
            <div class="uk-container uk-text-center">    
                <p id="contact"></p>
                <h1> 
                <img src="Images/note.png" alt="Smiley face" height="100" width="100"> Patient data</h1>
                <h3> Progress of currently registered pregnant mothers or with new-borns </h3>
            </div>
        </div>
</div>

<!-- VISUALISE DATA -->
<div class="uk-background uk-padding uk-text-center uk-text-emphasis">
</div>

<?php 
    include 'include/footer.php';
    include 'include/offcanvas.php';
?>
</body>
</html> 