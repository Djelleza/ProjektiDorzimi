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
                <label for="">Pick a movie</label>
                <select name="" id="movie">
                    <option value="5">Joker</option>
                    <option value="3">Star Wars</option>
                    <option value="6">Godzilla</option>
                    <option value="5">What Happens Later</option>
                    <option value="7">Wish</option>
                    <option value="5">Trolls</option>
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