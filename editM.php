<?php
    session_start();
    $movieId = $_GET['id'];
    include_once 'database/movieRepository.php';

    $movieRepository = new MovieRepository();

    $movie  = $movieRepository->getMovieById($movieId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="buytickets-body">
    <div  class="wrapper">
        <form action="" method="post">
            <h1 >Edit Movie</h1>
            <div class="input-box">
                <input type="text" name="id"  value="<?=$movie['id']?>" readonly>
            </div>
            <div class="input-box">
                <input type="text" name="name"  value="<?=$movie['name']?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="summary"  value="<?=$movie['summary']?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="image"  value="<?=$movie['image']?>" required>
            </div>
            <button class="btn"  type="submit" name="editBtn" value="save" >Save Edit</button>
            <div class="register-link">
                <p>Go back to dashboard -><a href="dashboard.php">Dashboard</a></p>
            </div>
        </form>
    </div>
</body>
</html>


<?php 

    if(isset($_POST['editBtn'])){
        $id = $movie['id'];
        $name = $_POST['name'];
        $summary = $_POST['summary'];
        $image = $_POST['image'];

        $movieRepository->updateMovie($id,$name,$summary,$image);

        header("location:dashboard.php");
    }

?>