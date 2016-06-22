<?php

// include "database.php";
// include "db_pdo.php";
include "Models/Database.php";
include "Models/Movie.php";

//instantiate an object for Movie

$movie = new Movie;
$movies = $movie->SelectAll();
$singlemovie = $movie->find();


// $movies = getMovieList();
// $singlemovie = getSingleMovie();


//ternary if operator to get page information

$page = isset($_GET['page']) ? $_GET['page'] : "home";

// switch to the page based on 'page' info in url, if not, 'home' will be loaded.
// If a 'page' found, goes to default case.

switch ($page) {
 	case 'home':
 		include "home.php";
 		break;
 	case 'movie':
 		include "movie.php";
 		break;
 	case 'movieForm':
 		include "movieForm.php";
 		break;
 	case 'add':
 		addMovie();
 		break;
 	case 'edit':
 		editMovie();
 		break;
	case 'delete':
		deleteMovie();
		break;
 	default:
 		echo "Error 404! Page not found.";
 		break;
 } 




?>
