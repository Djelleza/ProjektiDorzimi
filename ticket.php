<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Retrieve values from the form
$selectedMovie = $_POST['selectedMovie'];
$selectedSchedule = $_POST['selectedSchedule'];
$selectedSeats = explode(',', $_POST['selectedSeats']);
$userName = $_POST['userName'];
$totalAmount = $_POST['totalAmount'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orikino|Ticket</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <style>
       
        .kino .seat.R {
            background-color: red;
        }
        .text-bt {
            margin: 20px 0;
            background-color: #5c1216;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            animation: fadeInUp 0.8s ease-out;
        }

        .text-bt span {
            color: red;
        }

        .wrapper-BT {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: auto;
            text-align: center;
            animation: scaleIn 0.8s ease-out;
        }

        .wrapper-BT h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .wrapper-BT p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .wrapper-BT button {
            padding: 10px 28px;
            background-color: #5c1216;
            border: 3px solid white;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
            color: white;
        }

        .wrapper-BT button:hover {
            background-color: white;
            color: #5c1216;
        }

Keyframe animations 

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scaleIn {
    from {
        transform: scale(0.8);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

    </style>
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
            <?php echo "<h1 style='color:#39e75f;'>Booking Confirmed!</h1>";?>
            <p class="text-bt">
                <?php 
                echo "User: $userName<br>";
                echo "Movie: $selectedMovie<br>";
                echo "Schedule: $selectedSchedule<br>";
                echo "Seats: " . implode(', ', $selectedSeats);
                echo "<br>Total: $totalAmount"."€";?>
            </p>

            <div class="kino">
                <div class="screen"></div>
                <?php
                for ($row = 'A'; $row <= 'E'; $row++) {
                    echo "<div class=\"row\">";
                    for ($seatNumber = 1; $seatNumber <= 7; $seatNumber++) {
                        $seatId = $seatNumber . $row;
                        $isReserved = in_array($seatId, $selectedSeats);
                        $seatClass = $isReserved ? 'R' : '';
                        echo "<div id=\"$seatId\" class=\"seat $seatClass\"></div>";
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
