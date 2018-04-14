<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>MAAS Reviews</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="images/favicon.ico">
    </head>
    <body>
    <header>
		<a href="index.php"><img src="images/groupclasslogo.png" alt="MAAS Reviews"></a>
		
		<!--use the nav area for to add hyperlinks to other pages within the website - ma-->
		<nav>
    	    <a href="#" id="menu-icon"></a> <!-- For Hamburger menu - SA -->
    	   <ul>
    			<li><a href="index.php">Home</a></li>
    			<li><a href="books.php">Books</a></li>
    			<li><a href="tvshows.php">TV Shows</a></li>
    			<li><a href="movies.php">Movies</a></li>
    			<li><a href="videogames.php">Video Games</a></li>
    			<li><a href="about.php">About Us</a></li>
    		</ul>
    	</nav>
		
	</header>

	<!--use the container area to add the main content of the webpage - ma-->
	<div id="container">

    <!-- form for contacting us - AS -->
		<h2>Get in touch with us!</h2>
		<h3>Fill out the form below:</h3>
			
		<form method="post" action="feedback.php" ><!-- Start Form -->
		<fieldset>
		<legend>Personal Information</legend>
			<label for="fName">First Name<span>*</span></label>
			<input type="text" id="fName" name="fName" required>
			<label for="lName">Last Name<span>*</span></label>
			<input type="text" id="lName" name="lName" required>
			<label for="email">Email<span>*</span></label>
			<input type="email" name="email" id="email" required>
			<label for="phone">Phone</label>
			<input type="tel" id="phone" name="phone">
			
				
		</fieldset>
		<br>
		<fieldset>
		<legend>Best way to contact you?</legend>
		    <input class="chkbox" type="checkbox" name="email1" id="email1" value="Email" ><label class="chkbox" for="email1">Email</label>
			<input  class="chkbox" type="checkbox" name="phone1" id="phone1" value="Phone"><label class="chkbox" for="phone1">Phone</label>
		
		</fieldset>
		<br>
		<fieldset>
		<legend>Rate your overall experience with our website</legend>
		<label class="select1" for="rate">Rating:</label>
		<select class="select1" name="rate" id="rate">
			<option value="10">10</option>
			<option value="9">9</option>
			<option value="8">8</option>
			<option value="7">7</option>
			<option value="6">6</option>
			<option value="5">5</option>
			<option value="4">4</option>
			<option value="3">3</option>
			<option value="2">2</option>
			<option value="1">1</option>
			
		</select>
		</fieldset>
		<br>
		<fieldset>
		<legend>Questions, Comments, or Suggestions?</legend>
		<textarea id="questions" name="questions" rows="3" cols="30" placeholder="Include information that you think is important regarding our website so we can either improve, change, or add things to it."></textarea>
		</fieldset>
		<br>
		<fieldset>
		    <input type="submit" id="submit" value="Submit" class="btn">
		    <input type="reset" id="reset" value="Reset Form" class="btn">
		</fieldset>
		<br>
		<fieldset>
		<legend>Want to contact us directly?</legend>
		
			<p>Melissa Allor:  <a href="mailto:allorme@mail.gvsu.edu">allorme@mail.gvsu.edu</a> </p>
			<p>Austin Shamoun:  <a href="mailto:shamouna@mail.gvsu.edu">shamouna@mail.gvsu.edu</a> </p>
			<p>Andrew DeVries:  <a href="mailto:devriear@mail.gvsu.edu">devriear@mail.gvsu.edu</a> </p>
			<p>Sanil Apte:  <a href="mailto:aptes@mail.gvsu.edu">aptes@mail.gvsu.edu</a> </p>
			
		</fieldset>
			
		</form>
	
	</div> <!-- End Container SA -->
	
	<!--use the footer area to add webpage footer content - ma-->
	<footer>
		&copy; Copyright 2017. All Rights Reserved.
	</footer>
    </body>
</html>