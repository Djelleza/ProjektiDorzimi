<?php
    session_start();
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
    
    <header class="header" style="background:transparent;">
    <a href="" class="logo"><img src="logo2.png" alt="" height="100" width="100"></a>
        <nav class="navbar">
            <a href="homepage.php" >Home</a>
            <a href="movies.php">movies</a>
            <a href="comingsoon.php">coming soon</a>
            <a href="aboutus.php">about us</a>
        </nav>
    </header>
    
    <div  class="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <h1 >Login</h1>
        <div class="input-box">
            <input type="text" name="user" id="name" placeholder="Username" required>
        </div>
        <div class="input-box">
            <input type="password" name="psw" id="password" placeholder="Password" required>
        </div>
        <button class="btn" type="submit" name="loginBtn" value="register" onclick="validateForm()"  >Login</button>
    
        <div class="register-link">
           <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
        </form>
<?php include_once 'database/loginController.php';?>
    
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