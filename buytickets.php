<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
// echo "<script> alert('Welcome, " . $_SESSION['user'] . "!'); </script>";
include_once 'database/movieRepository.php';

$movieRepository = new MovieRepository();
$movieNames = $movieRepository->getAllMovieNames();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orikino|Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="buytickets-body">
    <header class="header" style="background:transparent;">
        <a href="" class="logo"><img src="logo2.png" alt="" height="100" width="100"></a>

        <nav class="navbar">
            <a href="homepage.php">Home</a>
            <a href="movies.php">movies</a>
            <a href="comingsoon.php">coming soon</a>
            <a href="aboutus.php">about us</a>

        </nav>
    </header>
    
    <div class="wrapper-BT">
        <div class="mesi">
        <div class="movie-container">
        <label for="movie">Pick a movie</label>
        <select name="movie" id="movie">
            <?php
            foreach ($movieNames as $movieName) {
                echo "<option value=5>$movieName</option>";
            }
            ?>
        </select>
        </div>
        <div class="schedule-container">
            <label for="schedule">Pick a schedule</label>
            <select name="schedule" id="schedule">
                <option value="11:00">11:00</option>
                <option value="13:00">13:00</option>
                <option value="15:30">15:30</option>
                <option value="17:00">17:00</option>
                <option value="19:30">19:30</option>
                <option value="21:00">21:00</option>
                <option value="22:00">22:00</option>
             </select>
        </div>

            <ul class="showcase">
                <li>
                    <div class="seat"></div>
                    <small>N/A</small>
                </li>
                <li>
                    <div class="seat S"></div>
                    <small>Selected</small>
                </li>
                <li>
                    <div class="seat R"></div>
                    <small>Reserved</small>
                </li>
            </ul>

            <div class="kino">
                <div class="screen"></div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
            </div>
            <p class="text-bt">
                Seats selected: <span id="count">0</span> For the price of: <span id="total">0</span>€
            </p>
            <div class="butoni-ticket">
                <a href="#" class="cta">
                    <button>Buy Now</button>
                </a>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>