<?php
    session_start();
    $userId = $_GET['id'];
    include_once 'database/userRepository.php';

    $userRepository = new UserRepository();

    $user  = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orikino|Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="buytickets-body">
    <div  class="wrapper">
        <form action="" method="post">
            <h1 >Edit</h1>
            <div class="input-box">
                <input type="text" name="id"  value="<?=$user['id']?>" readonly>
            </div>
            <div class="input-box">
                <input type="text" name="username"  value="<?=$user['username']?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="email"  value="<?=$user['email']?>" required>
            </div>
            <div class="input-box">
                <input type="text" name="password"  value="<?=$user['password']?>" required>
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
    $id = $user['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    $userRepository->updateUser($id,$username,$email,$password);

    header("location:dashboard.php");
}

?>