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
	

	
	<!--use the main area to add the main content of the webpage - ma-->
	<div id="container">
	   <article class="smallbar desktop">
	        <!--added header 4 - ma-->
	      <h4>Looking for more information? Click below!</h4>
	       <ul>
	           <li><a href="buy.html">Buy It Now</a></li>
	           <li><a href="soon.html">Coming Soon</a></li>
	       </ul>
	   </article>
	   <article>
            <section>	       
	       <h1>Movies: Reviewed</h1>
	      <?php

        
	$l=mysqli_connect("34.224.83.184","student25","phppass25","student25");
        $title = $_POST["title"]; // required
        $director = $_POST["director"]; // required
	$writer = $_POST["writer"]; // required
        $genre = $_POST["genre"]; // required
        $review = mysqli_real_escape_string($l, $_POST["movierev"]);
        $reviewer = $_POST["reviewer"]; // required
	
	
	if($title  === "" || $director === "" || $writer === "" || $genre === "" || $review === "" || $reviewer === ""){
		echo "<h4>You're review wasn't added, please check your information.</h4>";
	}
	else {
		echo "<h3> Thank you $reviewer your review has been added!</h3>";
		$query = "INSERT INTO Movie(Title,Director,Writer,Genre,Review,Rname) VALUES ('$title', '$director', '$writer', '$genre', '$review', '$reviewer');";
		mysqli_query($l,$query);

	}
	
	

       

?>
	       
	   
	      
	       
	   </section>    
	   </article>
	   
	   <aside class="contact">
	           <a href="contact.html" class="button">Contact Us!</a>
	   </aside>
	   
	    <aside class="contact">
                   <a href="updateMovies.php" class="button">Submit Review!</a>
           </aside>

	   
	</div> <!--End container-->
	
	<!--use the footer area to add webpage footer content - ma-->
	<footer>
		&copy; Copyright 2017. All Rights Reserved.
	</footer>
    </body>
</html>
