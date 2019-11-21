<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width,initial-scale = 0.2">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Temporary Kennels</title>


	
	<?php

	echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend+Deca|Muli&display=swap&subset=vietnamese"/>';
	echo '<link rel="stylesheet" type="text/css" href="../layout/randomname.css"/>';
	echo '<link rel="stylesheet" type="text/css" href="../layout/side_bar_style.css"/>';
	echo '<link rel="stylesheet" type="text/css" href="temporarykennel.css"/>'; 

	echo '<script src="https://kit.fontawesome.com/57217439de.js" crossorigin="anonymous"></script>';
	echo '<script type="text/javascript" src="../layout/menu.js"></script>';

	echo '<script type="text/javascript" src="temporarykennel.js"></script>';

	?>

	
</head>


<body>

	<header>

		<a href="../index.html">
			<img src="../images/logo.png">
			<div>
				<h1>Destination</h1>
				<h2>Kennel</h2>
				<h4>We are your helping paws 🐾</h4>
			</div>
		</a>

	</header>

	
	<div id = "main">
		<img src="../images/menu.png" onclick= "openSlideMenu()">
		<h3> ⇛ Find A Temporary Kennel</h3>
	</div>



	<div id = "side-menu" class="side-nav">
		<a href="#" class = "btn-close" onclick="closeSlideMenu()">↩</a>
				
		<div id = "menu-header">
			<img src="../images/logo.png">
			<div>
				<h1>Destination</h1>
				<h2>Kennel</h2>
				<h4>We are your helping paws 🐾</h4>
			</div>
		</div>
		<hr style="background-color: black;">

		<ul>
            
            <li><a href=""  onclick="closeSlideMenu()"><i class="fas fa-home"  ></i> Temporary Kennels</a></li>
            
            <li><a href="../findahome/form.php" ><i class="fas fa-home"  ></i> Find a Home</a></li>
            
            
            <li><a href="../adopt/adopt.php" ><i class="fas fa-paw"  ></i> Adopt</a></li>
            
            <li><a href="../rescue/rescue.html" ><i class="fas fa-first-aid"  ></i> Rescue</a></li>
            
            <li><a href="../storesnearme/petstore_data_select.php"><i class="fas fa-shopping-cart"></i> Pet Stores near me</a></li>
            
            <li><a href="../trainer/trainer_data_select.php" ><i class="fas fa-user"  ></i> Pet Trainer</a></li>

            <li><a href="../events/event_data_select.php" ><i class="far fa-list-alt"></i> Events</a></li>
            
            <li><a href="../vet/vet_data_select.php" ><i class="fas fa-user-md" ></i> Contact A Vet</a></li>
            
            <li><a href="../generalcare/generalcare.html" ><i class="fas fa-paw" ></i> General Pet Care</a></li>
             
            <li><a href="../donate/donate.html" ><i class="fas fa-hand-holding-usd"></i> Donate</a></li>
                                                          
            <li><a href="../contact/contact.html" ><i class="fas fa-address-book" ></i> Name For Pet?</a></li>


		</ul>
			
	</div>



	<div class="containerr">

		<span id="successful-submit">
			<p>Requested kennel has been booked succesfully !</p>
			<img src="../images/verified1.png">
		</span>


		

		<form action="inserttemp.php" method="post" id="temp-kennel-form">

			<div class="form-fields">
				<label id="your-name">Your Name<span>*</span></label>
				<input type="text" name="ownerName" class="input-style" required  >
			</div>

			<div class="form-fields">
				<label id ="pet-name">Pet's Name<span>*</span></label>
				<input type="text" name="petName" class="input-style" required >
			</div>


			<div class="form-fields">
				<label id ="checkin-date">Check-in Date<span>*</span></label>
				<input type="date" name="inDate" class="input-style" required >
			</div>

			<div class="form-fields">
				<label id ="checkout-date">Check-out Date<span>*</span></label>
				<input type="date" name="outDate" class="input-style" required >
			</div>
		

			<div class="form-fields">
		
				<label id="organization">Select Temporary Kennel<span>*</span></label>
				<select class="input-style" name = "kennelName">
					<option>Dog's Shine, Bangalore</option>
					<option>Woof!, Bangalore</option>
					<option>MyBone, Mumbai</option>
					<option>Gush Puppies, Mumbai</option>
					<option>Paws for Paws, Delhi</option>
				</select>
			</div>


			<button id="button" >Book Kennel</button>

		</form>
		

	</div> 
	
	<script type="text/javascript" src="temporarykennel.js"></script>


</body>	


</html>