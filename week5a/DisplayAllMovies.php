<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies </title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>

<header>
    <nav>

        <ul>
            <li><a href="DisplayAllMovies.php"> Display All Movies </a> </li>
            <li><a href="DisplayMoviesMarvelStudio.php"> Display Movies Created by Marvel Studios </a>  </li>
            <li><a href="DisplayMoviesAfter2010.php"> Display All Movies Created after 2010 </a> </li>
            <li><a href="DisplayAllXmenFilms.php"> Display all X-Men Films </a> </li>

        </ul>

    </nav>

</header>


<?php
include ("connection.php");

echo "<br>";


$Movies_SQL = "SELECT marvelMovieID, title
               FROM marvelmovies

";

$Movies_SQL_Query = mysqli_query($db, $Movies_SQL);


echo "<table border = '1'>";

echo "<tr>";

echo "<th> # </th>";
echo "<th> marvelMovieID </th>";
echo "<th> Title </th>";

echo "</tr>";

$indx = 1;
while($row = mysqli_fetch_array($Movies_SQL_Query, MYSQLI_ASSOC)) {

    $marvelMovieID = $row['marvelMovieID'];
    $title = $row['title'];

    echo "<tr>";
    echo "<td> $indx  </td>";
    echo "<td> $marvelMovieID  </td>";
    echo "<td> $title </td>";


    echo "</tr>";

    $indx++;
}

echo "</table>";
echo'
<footer class="footer">
    <p> Designed by Wale Patrick(c) </p>
</footer>
    ';