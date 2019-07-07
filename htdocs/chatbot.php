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
<?php include 'include/header.php'; ?> 
<div id="tabnavigations" class="uk-text-center">
    <div class="uk-section uk-light">
            <div class="uk-container uk-text-center">    
                <h1> 
                Healthcare AI</h1>
                <!-- <h3> Experienced Healthcare Artificial Intelligence at global scale</h3> -->
            </div>
        </div>
</div>

<div class="uk-background uk-padding uk-text-center uk-text-emphasis">
<legend class="uk-legend uk-text-secondary"><img src="Images/chat.png" alt="Smiley face" height="90" width="50"> Chat with Bloomie <span class="uk-label uk-label-success">live</span></legend>
<div class="uk-child-width-1-3@s" uk-grid>
    <div>
        <div class="uk-height-large uk-card uk-card-hover uk-card-body uk-flex uk-flex-center uk-flex-middle"></div>
    </div>
    <div>
        <div class="uk-height-large uk-card uk-card-default uk-card-body uk-flex uk-flex-center uk-flex-middle">
    <!-- Chatbot -->
        <div class="uk-margin uk-text-emphasis">
            <div class="uk-container" id="output"></div>
        </div>
        </div>
        <div class="uk-margin uk-text-emphasis uk-text-center">
            <input class="uk-input uk-background-muted" type="text" id="input" onkeydown="if (event.keyCode == 13){talk()}" name="message" placeholder="Message">
            <p uk-margin>
                <button class="uk-button uk-button-primary uk-button-large">Send</button>
            </p>
        </div>
    </div>
    <div>
        <div class="uk-height-large uk-card uk-card-hover uk-card-body uk-flex uk-flex-center uk-flex-middle"></div>
    </div>

</div>


<?php 
    include 'include/footer.php';
    include 'include/offcanvas.php';
?>
</body>
</html> 