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
		<a href="index.html"><img src="images/groupclasslogo.png" alt="MAAS Reviews"></a>
		
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
	    <figure>
	        <!--image added by ma-->
	        <img src="images/ma/books.jpg" alt="Photo of Books">
	    </figure>
	   <article class="smallbar desktop">
	        <!--added header 4 - ma-->
	      <h4>Looking for more information? Click below!</h4>
	       <ul>
	           <li><a href="buy.html">Buy It Now</a></li>
	           <li><a href="soon.html">Coming Soon</a></li>
	       </ul>
	   </article>
	   <!--Content by Melissa Allor-->
	   
	   <article>
	    <section>
	           <h1 align=\"center\">The Reading Corner</h1>
	           
	<form method="post" action="submitBooks.php" >
					Title:
					<input type="text" name="title" size=60>
					Author:
					<input type="text" name="author" size=60>
					Genre:
					<input type="text" name="genre" size=60>
					
					 <textarea type="text" rows="8" cols="100" name="bookrev">Enter your review here...</textarea>
					Reviewer Name:
					<input type="text" name="reviewer" size=60>
					<input type="submit" name="submit" value="Submit">

				</form> 
				
	   </section>
	   
	   
	   </article>
	   
	    <aside class="contact">
	           <a href="contact.php" class="button">Contact Us!</a>
	   </aside>

	   

	  
	   
	</div> <!-- End Container SA -->
	
	<!--use the footer area to add webpage footer content - ma-->
	<footer>
		&copy; Copyright 2017. All Rights Reserved.
	</footer>
    </body>
</html>
