<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="media.css">
<?php
session_start();

// Check if the user is logged in
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