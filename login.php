<?php
 $x = include 'inc/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orikino|Log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="buytickets-body">
    <?php $x; ?>
    
   
    <div  class="wrapper">
<form action="">
    <h1 >Login</h1>
    <div class="input-box">
        <input type="text"  id="name" placeholder="Username" required>
    </div>
    <div class="input-box">
        <input type="password" id="password" placeholder="Password" required>
    </div>
    <div class="remember-forgot">
        <label >
            <input type="checkbox">Remember me
        </label>
        <a href="">Forgot password?</a>
    </div>
    <button class="btn" type="submit" onclick="validateForm()">Login</button>
    <div class="register-link">
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
</form>
    </div>
    <script>
        function validateForm(){
        var name=document.getElementById('name').value;
     
        var password=document.getElementById('password').value;

        
        var nameRegex=/^[a-zA-Z0-9_-]{3,16}$/;
        if(!nameRegex.test(name)){
         alert('Please enter a valid username!');
         return false;
        }
        
        var passwordRegex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
        if(!passwordRegex.test(password)){
            alert('Please enter a valid password!');
            return false;
        }
    }

    </script>
</body>
</html>