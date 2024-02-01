<?php
    session_start();
    $x=include 'inc/header.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orikino|Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="home-page">
    <?php $x; ?>
    <main class="maini">
        <h1 class="h1">ORIKINO </h1>
        <p class="p1">Lights, Camera, Date Night! Our cinema is the perfect backdrop for your next cinematic adventure. Unleash the magic - book your tickets now!</p>
        
            <?php
    if (isset($_SESSION['user']) && $_SESSION['user']) {
        // If the user is logged in, link directly to buytickets.php
        echo '<div class="butoni-ticket">  
        <a href="buytickets.php" class="cta">
            <button>Buy Tickets</button>
        </a>
    </div>';
    } else {
        // If the user is not logged in, link to login.php
        echo '<div class="butoni-ticket">  
        <a href="login.php" class="cta">
            <button>Buy Tickets</button>
        </a>
    </div>';
    }
    ?>
        
    </main>
    <?php include 'inc/footer.php'; ?>
</body>
</html>