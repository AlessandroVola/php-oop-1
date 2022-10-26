<?php

    require_once __DIR__ . '/models/movie.php';

    $movie = new Movie('No Time to Die', 'Action');
    $movie->year = 2021;
    $movie->duration = 164;
    $movie->addActor('Daniel Craig');
    $movie->addActor('Rami Malek');

    print_r($movie);


    $movie2 = new Movie('La ragazza nella nebbia', 'Thriller');
    $movie2->year = 2017;
    $movie2->duration = 127;
    $movie2->addActor('Toni Servillo');
    $movie2->addActor('Jean Reno');

    

    print_r($movie2);

?>