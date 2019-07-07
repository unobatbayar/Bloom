<?php
	require 'sources.php';
?> 
<!-- Desktop navigation -->
    <nav class="uk-navbar uk-visible@l" data-uk-sticky="" style="background:white">
    <ul class="uk-navbar-nav" >
        <li>
            <a href="../index" style="text-decoration:none ">
            <h1><img class="uk-border-square" width="150" height="150" title="Bloom" src="../Images/bloom.png"></h1>
            </a> 
        </li>
        <li>
    </ul>

    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav"> 
        <!-- <li ><a href="index#ourstory"> <font color="#7eeacd" size="2" >Our story</font></a></li>  
        <li ><a href="index#product"> <font color="#7eeacd" size="2" >Our product</font></a></li>   -->
        <li ><a href="chatbot"> <font color="#7eeacd" size="2" >Healthcare AI</font></a></li>  
        <li ><a href="patient"> <font color="#7eeacd" size="2" >Patient Data</font></a></li>  
        <li ><a href="analytics"> <font color="#7eeacd" size="2" >Analytics</font></a></li>  
        <li ><a href="add"><button class="uk-button uk-button-secondary uk-button-small"><font color="#ffffff" size="2.5" >add patient</font></button></a></li> 
        </ul>
    </div>
    </nav>
<!-- navigation ends -->


<!-- Mobile navigation -->
<nav class="uk-navbar uk-hidden@s" uk-navbar style="background:white">

		<div class="uk-navbar-right">
			<a uk-toggle="target: #mobile-header"><font color="black"> <span uk-icon="icon: menu; ratio: 2.5"></span> </font>  </a>
        </div>
</nav>

<div id="mobile-header" uk-offcanvas="flip: true">
<div class="uk-offcanvas-bar">
    <div class="uk-nav uk-nav-offcanvas">
	<ul class="uk-list"> 
        <li ><a href="patient"> <font color="white" size="2" >Our story</font></a></li>  
        <li ><a href="patient"> <font color="white" size="2" >Our product</font></a></li>  
        <li ><a href="chatbot"> <font color="white" size="2" >Healthcare AI</font></a></li>  
        <li ><a href="patient"> <font color="white" size="2" >Patient Data</font></a></li>  
        <li ><a href="analytics"> <font color="white" size="2" >Analytics</font></a></li>  
        <li ><a href="add"><button class="uk-button uk-button-default uk-button-small"><font color="#ffffff" size="2.5" >add patient</font></button></a></li> 
        </ul>
	</div>
</div>
</div>
<!-- navigation ends -->