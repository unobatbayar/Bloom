<?php 
require 'include/config.php';

// Deleter
    // if($mysqli->query("DELETE FROM patients WHERE name='asdf'")){
    // echo 'done'; }
?>
<!DOCTYPE html>
<html>
<head>
<title>Hackathon</title>
<?php 
    include 'include/sources.php';
?>
</head>

<body >
<!-- Header -->
<?php include 'include/header.php'; ?>
<!-- Big Header -->
<div id="welcometobloom" class="uk-text-center">
    <h1 class="uk-heading uk-text-bold"><font size="8" color="white"> Helping pregnant women and new born babies in developing countries </font></h1> 
    <h4></h4> 
    <h1> <a class="uk-button uk-button-secondary" href="chatbot"><img src="Images/chat.png" alt="Smiley face" height="25" width="25"> Chat now</a> </h1>
</div>

<!-- About us -->
<div id="aboutus" class="uk-text-center">
    <h1 class="uk-heading-primary uk-text-center" id="ourstory"><font color="#7eeacd"> Our story</h1>    
        <div class="uk-card uk-card-default uk-card-small">
                <div class="uk-text-left uk-card-small uk-card-body uk-text-break">
                <font size="5"> We aim to help pregant women, doctors, NGOs. Our app Bloom helps women in developing countries through AI bot that they can talk to throughout their pregnancy. Using API that caters to all development front-end applications.<code> happiness = bloom.save(women, babies); </code></font>
                </div>
        </div>
</div>
<!----> 
<!-- Product -->
<div id="product" class="uk-text-center">
    <h1 class="uk-heading-primary uk-text-center uk-text-left" id="ourstory"><font color="white"> Our product</h1>    
    <dl class="uk-description-list uk-description-list-divider uk-text-large uk-text-center">
        <dt><img src="Images/chat.png" alt="Smiley face" height="100" width="100"></dt>
        <dd>Healthcare Artificial Intelligence</dd>
        <dt><img src="Images/note.png" alt="Smiley face" height="100" width="100"></dt>
        <dd>Patient registration, tracking and preventive healthcare.</dd>
        <dt><img src="Images/analytics.png" alt="Smiley face" height="100" width="100"></dt>
        <dd>Analysis, reporting and learning  </dd>
    </dl>

</div>
<!----> 
<!-- Team -->
<div id="team" class="uk-text-center">
<h1 class="uk-heading-primary"><font color="black">Bloom Team <span class="uk-badge">#5 </span></h1>
    <table class="uk-table uk-text-center uk-text-break">
    <div class="uk-container">
        <td class="width="50%" valign="left">
        <ul class="uk-list uk-text-large"><h1>
                <li><img src="Images/steven.png" alt="Smiley face" height="70" width="70"><span uk-icon="icon: linkedin; ratio: 2"></span> <a href="https://www.linkedin.com/in/stevenlua/">Steven Lua</a></li>
                <li><img src="Images/larisa.png" alt="Smiley face" height="70" width="70"><span uk-icon="icon: linkedin; ratio: 2"></span> <a href="https://www.linkedin.com/in/larisa-budaeva-0a175a66/">Larisa Budaeva</a></li>
                <li><img src="Images/uno.png" alt="Smiley face" height="70" width="70"><span uk-icon="icon: linkedin; ratio: 2"></span> <a href="https://www.linkedin.com/in/unobatbayar/">Uno Batbayar</a></li>
                <li><img src="Images/bach.png" alt="Smiley face" height="70" width="70"><span uk-icon="icon: linkedin; ratio: 2"></span> <a href="https://www.linkedin.com/in/bahadylbekov/">Bach Adylbekov</a></li>
                <li><img src="Images/song.png" alt="Smiley face" height="70" width="70"><span uk-icon="icon: twitter; ratio: 2"></span> <a href="https://twitter.com/SongLeare">Leare Song</a></li></h1>
        </ul>
        <div uk-lightbox>
            <a class="uk-button uk-button-primary" href="Images/pregnant.png">together we can</a>
        </div>
        </td>
    </div>  
    <div class="uk-container">
        <td width="50%" valign="center">
        <img class="uk-border-square" width="900" height="900" src="../Images/team.png">
        Bloom (2019)    
        </td>
    </div>
    </table>
</div>
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