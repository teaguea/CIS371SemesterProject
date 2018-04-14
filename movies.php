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
	

	
	<!--use the main area to add the main content of the webpage - ma-->
	<div id="container">
	   <article class="smallbar desktop">
	        <!--added header 4 - ma-->
	      <h4>Looking for more information? Click below!</h4>
	       <ul>
	           <li><a href="buy.php">Buy It Now</a></li>
	           <li><a href="soon.php">Coming Soon</a></li>
	       </ul>
	   </article>
	   <article>
	   <section>	       
	       <h1>Movies: Reviewed</h1>
	      <?php
			echo "<form>";
			
			// Create connection
			$conn = new mysqli("34.224.83.184","student25","phppass25","student25");
			// Check connection
			if ($conn->connect_error) {
    				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM Movie";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
    				// output data of each row
    				while($row = $result->fetch_assoc()) {
        				echo "<h4>Title: $row[Title] Director: $row[Director] Writer: $row[Writer]  Genre: $row[Genre] <br> $row[Review] <br> Reviewer: $row[Rname]</h4> <br><br>";
					
    				}
			} else {
    				echo "0 results";
			}
			$conn->close();
			echo "</form>";
		?> 
	       
	   
	   
	      
	       
	   </section>    
	   </article>
	   
	   <aside class="contact">
	           <a href="contact.php" class="button">Contact Us!</a>
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
