<!DOCTYPE html>
<html>
<head>
<?php
    include("include/sources.php");
	require 'include/config.php';
	
	if (isset($_POST['add_patient'])) { 
		$user->add_patient();
	}
?> 
<title> Adding patient </title>
<head>
</head>
<body>

<!-- Add Data -->
<div class="uk-panel uk-padding uk-padding-large uk-position-center">
<table class="uk-table uk-text-center">
<td width="100%" valign="center">
	<h1><img src="Images/plane.png" alt="Smiley face" height="50" width="50"> Add a Patient </h1>
	<p> Register and track health <span class="uk-label uk-label-success">Bloom</span> </p>
	<form class="uk-form" action="add.php" method="POST" >  
		<div class="uk-margin">
			<div class="uk-inline">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
				<input class="uk-input" type="text" name="name" placeholder="Full name" required/>
			</div>
		</div>
		<div class="uk-margin">
			<div class="uk-inline">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: location"></span>
				<input class="uk-input" type="text" name="baby_due_date" placeholder="Baby's due date" required/>
			</div>
        </div>
        <div class="uk-margin">
			<div class="uk-inline">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: paint-bucket"></span>
				<input class="uk-input" type="text" name="blood_type" placeholder="Mother's blood type" required/>
			</div>
        </div>
        <div class="uk-margin">
			<div class="uk-inline">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
				<input class="uk-input" type="text" name="born" placeholder="Is the baby born?" required/>
			</div>
        </div>
        <div class="uk-margin">
			<div class="uk-inline">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: question"></span>
				<input class="uk-input" type="text" name="health_status" placeholder="Health status" required/>
			</div>
        </div>
			<button class="uk-button uk-button-primary uk-button-medium" name="add_patient" type="SUBMIT"> <font size="2.5"color="#ffffff" size="3" >Add</button>
	</form>
</td>
</table>
</div>


</body>
</html>
