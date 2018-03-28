<?php

        echo "Book Review Updated!";

        $title = $_POST["title"]; // required
        $author = $_POST["author"]; // required
	$date = $_POST["rdate"];
	$genre = $_POST["genre"]; // require
        $review = $_POST["bookrev"]; // required
        $reviewer = $_POST["reviewer"]; // required


        $query = "INSERT INTO Book(Name,Author,Genre,Review,Rname,ReleaseDate) VALUES ('$title.'","'.$author.'","'.$genre.'","'.$review.'","'$reviewer'","str_to_date($date,'%d %M %Y')')';


        $l=mysqli_connect("34.224.83.184","student25","phppass25","student25");
        mysqli_query($l,$query);

?>

