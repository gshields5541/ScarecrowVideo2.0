<?php
/**
 * Created by PhpStorm.
 * User: GeraldShields
 * Date: 3/9/18
 * Time: 3:41 PM
 */
include "DB.php";
if (isset($_POST["imdb_ID"])) {
    $movie_query = 'INSERT INTO scarecrowVidDB.`RENT/BUY` (IMDb_ID, Type, Title, Year, Country, Languages, quantity, price, Genre) VALUES (tt0372784, movie, "Batman Begins", 2005, USA, English, 20, 3.99," Action, Adventure, Thriller " )';
    $run_query = mysqli_query($con, $movie_query);

    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $cat_ID = $row['category_ID'];
            $imdbID = $row['IMDb_ID'];
            $Title = $row['title'];
            $Year = $row['year'];
            $Price = $row['price'];

        }
    }
}