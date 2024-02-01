<?php
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['user']) || empty($_POST['email']) || empty($_POST['psw'])){
        echo "Fill all fields!";
    }else{
        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['psw'];

        $userRepository = new UserRepository();

        $user = $userRepository->getUserByUsername($username);
        if ($userRepository->isUsernameTaken($username)) {
            echo "Username is already taken. Please choose a different username.";
        } elseif ($userRepository->isEmailTaken($email)) {
            echo "Email is already registered. Please use a different email address.";
        } else {
            
            $id = $username.rand(100,999);
            $users = new User($id, $username, $email, $password, 'user');
            $userRepository->insertUser($users);
            
            session_start();
      
            $_SESSION['user'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("Location: buytickets.php");
            exit();
            
        }
    }
}



?>
