<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orikino|Movies</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="movie-body">
    <header class="header">
        <a href="" class="logo"><img src="logo2.png" alt="" height="100" width="100"></a>
        <nav class="navbar">
            <a href="homepage.php">Home</a>
            <a href="movies.php" style="text-decoration:underline;" >movies</a>
            <a href="comingsoon.php">coming soon</a>
            <a href="aboutus.php">about us</a> 
        </nav>
    </header>


    <div class="programi">
        <h1 class="title-1">Movies At Orikino</h1>
         
            <div class="slide" >  
                <img id="slideshow"  width="1250" height="500"/>
            </div>

        <h1 class="title-2">Now Playing</h1>

        <div class="container">

            <div class="filmi">
                <img src="filmat/filmi_1.jpg" class="filmi-foto" alt="" >
                <h2 >JOKER</h2>
                <div class="middle2">
                
                    <p class="pershkrimi">
                        Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he's part of the world around him. Isolated, bullied and disregarded by society

                    </p>
                    <a href="filmat_details/joker.php" class="infoja">More info</a>
                </div>
                
            </div>
            <div class="filmi">
                <img src="filmat/filmi_2.jpg" class="filmi-foto" alt="" >
                <h2 >STAR WARS</h2>
                <div class="middle2">
                    <p class="pershkrimi">
                        The original trilogy depicts the heroic development of Luke Skywalker as a Jedi and his fight against Palpatine's Galactic Empire alongside his sister, Leia. The prequels tell the tragic backstory of their father, Anakin, who is corrupted by Palpatine and becomes Darth Vader.
                    </p>
                    
                
                    
                    <a href="filmat_details/starwars.php" class="infoja">More info</a>
                </div>
            </div>
            <div class="filmi">
                <img src="filmat/filmi_3.jpg" class="filmi-foto" alt="" >
                <h2>GODZILLA</h2>
                <div class="middle2">
                    <p class="pershkrimi">
                        Underwater hydrogen bomb testing awakens a fire-breathing monster from its centuries-long sleep, and it soon starts to terrorise Japan.
                    </p>
                    
                
                    
                    <a href="filmat_details/godzilla.php" class="infoja">More info</a>
                </div>
            </div>
           
            <div class="filmi">
                <img src="filmat/filmi_6.png" class="filmi-foto" alt="" >
                <h2>WHAT HAPPENS LATER</h2>
                <div class="middle">
                    <p class="pershkrimi"  style="color: black;">
                        Snowed-in at a regional airport overnight, ex-lovers Willa and Bill realize they're still attracted to each other -- but also still equally annoyed with each other. As they unpack the riddle of their mutual past and compare their lives to the dreams they once shared.
                    </p>
    
                    <a href="filmat_details/whl.php" class="infoja">More info</a>
                </div>
            </div>
            <div class="filmi">
                <img src="filmat/filmi_7.png" class="filmi-foto" alt="" >
                <h2>WISH</h2>
                <div class="middle">
                    <p class="pershkrimi">
                        Young Asha makes a wish so powerful that it's answered by a cosmic force, a little ball of boundless energy called Star. With Star's help, Asha must save her kingdom from King Magnifico and prove that when the will of one courageous human connects with the magic of the stars, wondrous things can happen.
                    </p>
                    <a href="filmat_details/wish.php" class="infoja">More info</a>
                </div>
            </div>
            <div class="filmi">
                <img src="filmat/filmi_8.png" class="filmi-foto" alt="" >
                <h2>TROLLS</h2>
                <div class="middle">
                    <p class="pershkrimi">
                        After the Bergens invade Troll Village, Poppy , the happiest Troll ever born, and the overly-cautious, curmudgeonly Branch set off on a journey to rescue her friends. Their mission is full of adventure and mishaps, as this mismatched duo try to tolerate each other long enough to get the job done.
                    </p>
    
                    <a href="filmat_details/trolls.php" class="infoja">More info</a>
                </div>
             </div>
        </div>
    </div>

<footer>
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Company</h4>
                <p style="line-height: 1.5;">
                    Discover cinematic excellence at Orikino. Unforgettable stories, premium experiences, and the magic of the silver screen await you. Thank you for choosing us for your movie adventures.
                </p>
            </div>

            <div class="footer-col" >
                <h4>Navigation</h4>
                <ul>
                    <li><a href="homepage.php">Home Page</a></li>
                    <li><a href="movies.php">Movies</a></li>
                    <li><a href="comingsoon.php">Coming Soon</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Follow us</h4>
                <div class="social-link">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    let i = 0;
    let imgArray = ['sliderFoto/slider2.png','sliderFoto/slider3.png','sliderFoto/slider4.png','sliderFoto/slider5.png','sliderFoto/slider6.png'];

    function changeImg(){
        document.getElementById('slideshow').src = imgArray[i];

        if(i< imgArray.length -1){
            i++;
        }
        else{
            i=0;
        }
        setTimeout("changeImg()", 2600);
    }
    document.addEventListener(onload, changeImg());
</script>




</body>
</html>