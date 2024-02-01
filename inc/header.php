<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="media.css">
<?php
session_start();

if (isset($_SESSION['user'])) {
    echo   '<header class="header">
            <a href="" class="logo"><img src="logo2.png" alt="" height="100" width="100"></a>
                <nav class="navbar">
                    <a href="homepage.php">Home</a>
                    <a href="movies.php">movies</a>
                    <a href="comingsoon.php">coming soon</a>
                    <a href="aboutus.php">about us</a> 
                    
                '   ; 

    if ($_SESSION['role'] === 'admin') {
        
        echo '<a href="dashboard.php">Dashboard</a>';
        if (basename($_SERVER['PHP_SELF']) == 'movies.php' ||basename($_SERVER['PHP_SELF']) == 'dashboard.php' || basename($_SERVER['PHP_SELF']) == 'comingsoon.php') {
            echo '<a href="insertM.php" style="font-size: 1.5rem;border: 2px solid white;border-radius: 50%;display: inline-block;width: 30px;height: 30px;line-height: 25px;text-align: center;text-decoration: none;color: white;">+</a>';
        }
    }
    echo '<a href="logout.php">Logout</a>
    </nav>
        </header>';
} else {
    
    echo   '<header class="header">
            <a href="" class="logo"><img src="logo2.png" alt="" height="100" width="100"></a>
                <nav class="navbar">
                    <a href="homepage.php">Home</a>
                    <a href="movies.php">movies</a>
                    <a href="comingsoon.php">coming soon</a>
                    <a href="aboutus.php">about us</a> 
                    
                </nav>
        </header>';
}
?>