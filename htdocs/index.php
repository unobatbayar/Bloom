<?php 
session_start();

// if (isset($_POST['send'])) { 
//     $message = $this->mysqli->escape_string($_POST['message']);
// }
?>
<!DOCTYPE html>
<html>
<head>
<title>Hackathon</title>
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
                <img src="include/m1.png" alt="Smiley face" height="100" width="100">
                <img src="include/m2.png" alt="Smiley face" height="100" width="100">
                <img src="include/m3.png" alt="Smiley face" height="100" width="100"> 
                <br>
                Pmnch 9X
                </h1>
                <h3> Accelerate global access to high-grade maternal, newborn and child health care through technology</h3>
            </div>
        </div>
</div>
<!----> 
<!-- Registration -->
<!-- <div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div class="uk-light uk-background-secondary uk-padding">
            <h3>Login</h3>
            <p>Already registered? Login here.</p>
            <button class="uk-button uk-button-default">Login</button>
        </div>
    </div>
    <div>
        <div class="uk-dark uk-background-muted uk-padding">
            <h3>Register</h3>
            <p>Sign up to get started.</p>
            <button class="uk-button uk-button-default">Sign up</button>
        </div>
    </div>
</div> -->
<!-- Messenger -->
<!-- <div class="uk-background uk-padding uk-text-center uk-text-emphasis">
<form class="uk-form" action="index.php" method="POST" >  
        <legend class="uk-legend">Prototype <span uk-icon="facebook"></span></legend>

        <div class="uk-margin uk-text-emphasis">
            <input class="uk-input" type="text" name="message" placeholder="Message">
        </div>
        <button class="uk-button uk-button-primary uk-button-medium" name="send" type="Send"> <font size="2.5"color="#ffffff" size="3" >Send</button>
</form>
</div> -->

<!-- AI Chatbot -->
</div>
</body>
</html> 