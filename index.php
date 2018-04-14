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

	   <article class="smallbar desktop">
	       <!--added header 4 - ma-->
	      <h4>Looking for more information? Click below!</h4>
	       <ul>
	           <li><a href="buy.php">Buy It Now</a></li>
	           <li><a href="soon.php">Coming Soon</a></li>
	       </ul>
	   </article>
	   
	   <!--Info AS-->
	   
	   <article>
	   <?php 
	   		$l=mysqli_connect("34.224.83.184","student25","phppass25","student25");
	   		$queryBook = "SELECT Rname FROM Book;";
			$queryMovie = "SELECT Rname FROM Movie;";
			$queryVideoGame = "SELECT Rname FROM VideoGame;";
			$queryTVShow = "SELECT Rname FROM TVShow;";
			
			$resultsBook = mysqli_query($l, $queryBook);
			$resultsMovie = mysqli_query($l, $queryMovie);
			$resultsVideoGame = mysqli_query($l, $queryVideoGame);
			$resultsTVShow = mysqli_query($l, $queryTVShow);
			
			$reviewerNames = array();
			while ($row = mysqli_fetch_array($resultsBook)) {
				if (!in_array($row["Rname"], $reviewerNames)) {
					array_push($reviewerNames, $row["Rname"]);
				}
			}
			while ($row = mysqli_fetch_array($resultsMovie)) {
				if (!in_array($row["Rname"], $reviewerNames)) {
					array_push($reviewerNames, $row["Rname"]);
				}
			}
			while ($row = mysqli_fetch_array($resultsVideoGame)) {
				if (!in_array($row["Rname"], $reviewerNames)) {
					array_push($reviewerNames, $row["Rname"]);
				}
			}
			while ($row = mysqli_fetch_array($resultsTVShow)) {
				if (!in_array($row["Rname"], $reviewerNames)) {
					array_push($reviewerNames, $row["Rname"]);
				}
			}
			
			$course_id = "_8_1";
			$clientURL="http://bb.dataii.com:8080";
			
			require_once('classes/Rest.class.php');
			require_once('classes/Token.class.php');
			
			$rest = new Rest($clientURL);
			$token = new Token();
			
			$token = $rest->authorize();
			$access_token = $token->access_token;
			
			$columns = $rest->readGradebookColumns($access_token, $course_id);
			$c=$columns->results;
			
			//print_r($c);
			//die();
			foreach($c as $row)
			{
				if ($row->name == "Total")
				{
					$finalGradeName=$row->name;
					$finalGradeID=$row->id;
					$finalPossible=$row->score->possible;
					break;
				}
			}
			
			
			$grades = $rest->readGradebookGrades($access_token, $course_id, $finalGradeID);
			
			$g=$grades->results;
	   ?>
	       <h2>Welcome to our website!</h2>
	       <p class="rightindent">
	           This website was developed with the intentions of reviewing different products from different categories. The categories we have chosen were books, TV shows, movies, and video games. We gave in depth reviews and summaries of each product for each category as well as our own perspective on the product. We incorporated whether or not we would recommend to a friend or peer with links to view and potentially purchase the products from external sites. We worked hard to bring this very enjoyable website to you and our peers, so we hope you enjoy it as much as we do!
	       </p>
	       
	   </article>
	   
	   
	   
	    <!-- Figure for image gallary SA -->
	    
	    <!-- Animated image gallery - AS -->
	    
	  <div class="slideshow desktop">
	  
	     <img class="mySlides" src="images/ma/bookthief.jpg" alt="The Bookthief">
	     
	    
        
        <img class="mySlides" src="images/ma/13thtale.jpg" alt ="13th Tale">
        <img class="mySlides" src="images/as/jax.jpg" alt="Son's Of Anarchy">
        <img class="mySlides" src="images/as/mr.jpg"  alt="MR. ROBOT">
        <img class="mySlides" src="images/as/vik.png"  alt="Vikings">
        <img class="mySlides" src="images/ad/thor.jpg" alt="Thor: Ragnarok">
        <img class="mySlides" src="images/ad/dunkirk.jpg" alt="Dunkirk">
        <img class="mySlides" src="images/ad/spiderman.jpg" alt="Spiderman: Homecoming">
        <img class="mySlides" src="images/sa/KSP_banner.png"  alt="Kerbal Space Program">
        <img class="mySlides" src="images/sa/RL_banner.jpg"  alt="Rocket League">
        <img class="mySlides" src="images/sa/sky_banner.jpg"  alt="Skyrim">
        
        
	 </div>   
	    
	    <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2000); // Change image every 2 seconds
                }
        </script>

	   
	</div> <!-- End Container SA -->
	
	<div id="container2">
		<article class="famous people">
		<center>
			<h2>Did you know? This app is used by the famous blackboard students...</h2>
			<p>
			<?php 
			foreach($g as $row)
			{
				//echo $row->userId . " has " .$row->score." ouf of ".$finalPossible." points. ";
				
				if (empty($_SESSION[$row->userId]))
				{
					$user = $rest->readUser($access_token, $row->userId);
					$_SESSION[$row->userId] = $user->name->given." ".$user->name->family;
				}
				if (in_array($_SESSION[$row->userId], $reviewerNames)) {
					echo $_SESSION[$row->userId]."<br>";
				}
				
			}
			?>
			</p>
		</center>
		</article>
	</div>
	
	<!--use the footer area to add webpage footer content - ma-->
	<footer>
		&copy; Copyright 2017. All Rights Reserved.
	</footer>
    </body>
</html>
