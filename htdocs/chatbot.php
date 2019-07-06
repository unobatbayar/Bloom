<?php 
session_start();

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
                <img src="Images/dr.png" alt="Smiley face" height="100" width="100"> Healthcare AI</h1>
                <h3> Experienced Healthcare Artificial Intelligence at global scale</h3>
            </div>
        </div>
</div>

<!-- Chatbot -->
<div class="uk-background uk-padding uk-text-center uk-text-emphasis">
        <legend class="uk-legend"><img src="Images/chat.png" alt="Smiley face" height="90" width="50"> Chat with Dr. Botson <span class="uk-label uk-label-success">live</span></legend>
        <div class="uk-margin uk-text-emphasis">
            <div class="uk-container" id="output"></div>
        </div>

        <div class="uk-margin uk-text-emphasis">
            <input class="uk-input uk-background-muted" type="text" id="input" onkeydown="if (event.keyCode == 13){talk()}" name="message" placeholder="Message">
        </div>
</div>
<?php 
    include 'include/footer.php';
?>
</body>
</html> 