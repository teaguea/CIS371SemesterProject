<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>MAAS Reviews</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="images/favicon.ico">
        <script src="https://cis371a.hopto.org:9040/demo/Chart.bundle.js"></script>
        <script src="https://cis371a.hopto.org:9040/demo/utils.js"></script>
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
    			<li><a href="analytics.php">Analytics</a></li>
    			<li><a href="about.php">About Us</a></li>
    		</ul>
    	</nav>
	    </header>
	

	<canvas id="doughnut-chart" width="200" height="150"></canvas>
        <script>
        window.myDoughnut = new Chart(document.getElementById('doughnut-chart'), {
                type: 'doughnut',
                data: {
                        labels: ["404 Errors", "Other HTTP Errors"],
                        datasets: [
                                {
                                        label: "Number of times user received error",
                                        backgroundColor: [window.chartColors.red, window.chartColors.blue],
                                        data: [
<?PHP
                                                echo $errors404.",".$otherErrors;
?>
                                        ]
                                }
                        ]
                },
                options: {
                        legend: { display: true },
                        title: {
                                display: true,
                                text: "Number of times user received error"
                        }
                }
        });
        </script>
	
	
	
	<!--use the footer area to add webpage footer content - ma-->
	<footer>
		&copy; Copyright 2017. All Rights Reserved.
	</footer>
    </body>
</html>