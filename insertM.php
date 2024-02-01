<?php
include_once 'database/movieRepository.php';
include_once 'database/movie.php';

if (isset($_POST['insertBtn'])) {
    try {
        $movieRepository = new MovieRepository();

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $file_name = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $folder = 'filmat/' . $file_name;

            if (move_uploaded_file($tempname, $folder)) {
                $movie = new Movie(null, $_POST['name'], $_POST['summary'], $file_name);
                $movieRepository->insertMovie($movie);
                header("Location: dashboard.php");
                exit();
            } else {
                echo 'Error: Failed to copy uploaded file.<br>';
            }
        } else {
            echo 'Error: No image uploaded.';
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
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
        <form action="" method="post" enctype="multipart/form-data">
            <h1 >Insert Movie</h1>
            <div class="input-box">
                <input type="text" name="id" value="..." readonly>
            </div>
            <div class="input-box">
                <input type="text" name="name"  required>
            </div>
            <div class="input-box">
                <input type="text" name="summary"  required>
            </div>
            <div class="input-box-image">
                <input type="file" name="image"  required>
            </div>
            <button class="btn"  type="submit" name="insertBtn" value="save" >Insert</button>
            <div class="register-link">
                <p>Go back to dashboard -><a href="dashboard.php">Dashboard</a></p>
            </div>
        </form>
    </div>
</body>
</html>


