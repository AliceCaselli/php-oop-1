<?php

require_once './Models/Movie.php';

$split = new Movie("Split", "M. Night Shyamalan", "Universal Pictures", "Thriller");
$theMenu = new Movie("The Menu", "Mark Mylod", "Hyperobject Industries", "Thriller");
$deadpool = new Movie("Deadpool", "Tim Miller", "Marvel Entertainment", "Azione");

$movies = [

    $split,
    $theMenu,
    $deadpool

];
