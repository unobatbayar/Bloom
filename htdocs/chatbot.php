<?php 
session_start();

if (isset($_POST['send'])) { 
    $message = $this->mysqli->escape_string($_POST['message']);
}

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
                <img src="include/chat.png" alt="Smiley face" height="100" width="100"> Healthcare AI</h1>
                <h3> Healthcare Chatbot at your ease</h3>
            </div>
        </div>
</div>

</body>
</html> 