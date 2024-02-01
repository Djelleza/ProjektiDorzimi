<?php
$x = include 'inc/header.php';

include_once 'database/movieRepository.php';

$movieRepository = new MovieRepository();
$movies = $movieRepository->getAllMovies();
?>
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
    <?php $x; ?>
    


    <div class="programi">
        <h1 class="title-1">Movies At Orikino</h1>
         
            <div class="slide" >  
                <img id="slideshow"  width="1250" height="500"/>
            </div>

        <h1 class="title-2">Now Playing</h1>

        

        <div class="container">
            <?php foreach ($movies as $movie): ?>
                <div class="filmi">
                    <img src="filmat/<?= $movie['image'] ?>" class="filmi-foto" alt="<?= $movie['name'] ?>">
                    <h2><?= $movie['name'] ?></h2>
                    <div class="middle2">
                        <p class="pershkrimi"><?= $movie['summary'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
    </div>



    <?php include 'inc/footer.php'; ?> 
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