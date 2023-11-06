<?php

$avengers = new Movie("The Avengers", "action", 142, new Media("avengers.jpg", "The Avengers"));
$grinch = new Movie("The Grinch", "comedy", 105, new Media("grinch.jpg", "The Grinch"));
$it = new Movie("It", "horror", 135, new Media("it.jpg", "It"));
$soldato_ryan = new Movie("Salvate il soldato Ryan", "war", 169, new Media("salvateilsoldatoryan.jpg", "Salvate il soldato Ryan"));

$movies = [$avengers, $grinch, $it, $soldato_ryan];
