<?php

    $movieId = $_GET['id'];
    include_once 'database/movieRepository.php';

    $movieRepository = new MovieRepository();

    $movieRepository->deleteMovie($movieId);

    header("location:dashboard.php");
    
?>