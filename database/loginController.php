<?php
include_once 'userRepository.php';
include_once 'user.php';

if (isset($_POST['loginBtn'])) {
    if (empty($_POST['user']) || empty($_POST['psw'])) {
        echo "Fill all fields!";
    } else {
        $username = $_POST['user'];
        $password = $_POST['psw'];

        $userRepository = new UserRepository();

        $user = $userRepository->getUserByUsername($username);
        
        if ($userRepository->isUsernameAndPasswordValid($username, $password)) {
            session_start();
      
            $_SESSION['user'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("Location: buytickets.php");
            exit();
        } else {
            echo "Invalid username or password. <br> Please sign up if you don't have an account.";
        }
    }
}
?>