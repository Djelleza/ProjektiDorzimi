<?php
    // session_start();
    include 'inc/header.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

    
    <div class="container">
        <h2>Users Table</h2>
        <table border="4">
            <tr> 
                    <th >ID</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>EDITED BY</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tr>
                
                <?php
                include_once 'database/userRepository.php';
                
                $userRepository = new UserRepository();

                $users = $userRepository->getAllUsers();

                foreach($users as $user) {
                    echo '
                        <tr>
                            <td>' . $user['id'] . '</td>
                            <td>' . $user['username'] . '</td>
                            <td>' . $user['email'] . '</td>
                            <td>' . $user['password'] . '</td>
                            <td>' . $user['editedBy'] . '</td>
                            <td><a href="editU.php?id=' . $user['id'] . '">Edit</a></td>
                            <td><a href="deleteU.php?id=' . $user['id'] . '">Delete</a></td>
                        </tr>
                    ';
                     }


                ?>
        </table>

        <h2>Movies Table</h2>
        <table border="4">
            <tr> 
                    <th >ID</th>
                    <th>NAME</th>
                    <th>SUMMARY</th>
                    <th>IMAGE</th>
                    <th>EDITED BY</th>
                    <th>Edit</th>
                    <th>Delete</th>
            </tr>
                
                <?php
                include_once 'database/movieRepository.php';
                
                $movieRepository = new MovieRepository();

                $movies = $movieRepository->getAllMovies();

                foreach($movies as $movie) {
                    echo '
                        <tr>
                            <td>' . $movie['id'] . '</td>
                            <td>' . $movie['name'] . '</td>
                            <td>' . $movie['summary'] . '</td>
                            <td>' . $movie['image'] . '</td>
                            <td>' . $movie['editedBy'] . '</td>
                            <td><a href="editM.php?id=' . $movie['id'] . '">Edit</a></td>
                            <td><a href="deleteM.php?id=' . $movie['id'] . '">Delete</a></td>
                        </tr>
                    ';
                     }
                ?>
        </table>
    </div>
</body>
</html>

