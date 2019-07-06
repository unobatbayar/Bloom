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
<?php include 'include/header.php'; ?>
<!-- Big Header -->
<div id="welcometobloom" class="uk-text-center">
    <h1 class="uk-heading-primary">
    <img class="uk-border-square" width="170" height="170" title="Bloom" src="../Images/pregnant.png">
        <!-- <img src="Images/m4.png" alt="Smiley face" height="100" width="100"> 
        <img src="Images/m1.png" alt="Smiley face" height="100" width="100">
        <font color="black"> Bloom <span class="uk-badge">hackathon</span>
        <img src="Images/m2.png" alt="Smiley face" height="100" width="100">
        <img src="Images/m3.png" alt="Smiley face" height="100" width="100">  -->
    </h1>
    <h3 class="uk-heading"><font color="black" size="5"> Creating global access to high-grade maternal, newborn and child health care through technology</h3> 
    <h4></h4> 
    <h1> <a class="uk-button uk-button-secondary" href="chatbot">Try now</a> </h1>
</div>

<!-- About us -->
<div id="aboutus" class="uk-text-center">
    <table class="uk-table uk-text-center uk-text-break">
    <div class="uk-container">
        <td class="width="50%" valign="left">
            <h1 class="uk-heading-primary"><font color="black"> About us <span class="uk-badge">✓</span></h1>
            <h3> hello <br>
             hello </h3>
        </td>
    </div>  
    <div class="uk-container">
        <td width="50%" valign="center">
        <h1 class="uk-heading-primary"><font color="black">Bloom Team <span class="uk-badge">5</span></h1>
            <ul class="uk-list">
                <li><img src="Images/steven.png" alt="Smiley face" height="50" width="50"><span uk-icon="linkedin"></span> Steven Lua</li>
                <li><img src="Images/larisa.png" alt="Smiley face" height="50" width="50"><span uk-icon="linkedin"></span> Larisa Budaeva</li>
                <li><img src="Images/uno.png" alt="Smiley face" height="50" width="50"><span uk-icon="linkedin"></span> Uno Batbayar</li>
                <li><img src="Images/bach.png" alt="Smiley face" height="50" width="50"><span uk-icon="linkedin"></span> Bach Adylbekov</li>
                <li><img src="Images/song.png" alt="Smiley face" height="50" width="50"><span uk-icon="twitter"></span> Leare Song</li>
            </ul>
        </td>
    </div>
    </table>
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
<?php 
    include 'include/footer.php';
    include 'include/offcanvas.php';
?>
</body>
</html> 