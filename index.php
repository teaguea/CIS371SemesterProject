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

	   <article class="smallbar desktop">
	       <!--added header 4 - ma-->
	      <h4>Looking for more information? Click below!</h4>
	       <ul>
	           <li><a href="buy.html">Buy It Now</a></li>
	           <li><a href="soon.html">Coming Soon</a></li>
	       </ul>
	   </article>
	   
	   <!--Info AS-->
	   
	   <article>
	       <h2>Welcome to our website!</h2>
	       <p class="rightindent">
	           This website was developed with the intentions of reviewing different products from different categories. The categories we have chosen were books, TV shows, movies, and video games. We gave in depth reviews and summaries of each product for each category as well as our own perspective on the product. We incorporated whether or not we would recommend to a friend or peer with links to view and potentially purchase the products from external sites. We worked hard to bring this very enjoyable website to you and our peers, so we hope you enjoy it as much as we do!
	       </p>
	       
	   </article>
	   
	   
	   
	    <!-- Figure for image gallary SA -->
	    
	    <!-- Animated image gallery - AS -->
	    
	  <div class="slideshow desktop">
	  
	     <img class="mySlides" src="images/ma/bookthief.jpg" alt="The Bookthief">
	     
	    
        <img class="mySlides" src="images/ma/firstfrost.jpg" alt="First Frost">
        
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
	
	<!--use the footer area to add webpage footer content - ma-->
	<footer>
		&copy; Copyright 2017. All Rights Reserved.
	</footer>
    </body>
</html>