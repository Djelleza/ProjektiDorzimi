<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orikino|Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="buytickets-body">
    <header class="header" style="background:transparent;">
        <a href="" class="logo"><img src="logo2.png" alt="" height="100" width="100"></a>
    
        <nav class="navbar">
            <a href="homepage.php">Home</a>
            <a href="movies.php">movies</a>
            <a href="comingsoon.php">coming soon</a>
            <a href="aboutus.php">about us</a>
            
        </nav>
        </header>
   
    <div  class="wrapper">
<form action="">
    <h1 >Sign up</h1>
    <div class="input-box">
        <input type="text" placeholder="Username"  id="name" required>
    </div>
    <div class="input-box">
        <input type="email" placeholder="Email" id="email" required>
    </div>
    <div class="input-box">
        <input type="password" placeholder="Password" id="password"  required>
    </div>
    <div class="remember-forgot">
        <label >
            <input type="checkbox" required>I agree to the terms & conditions
        </label>
       
    </div>
    <button class="btn" type="submit"  onclick="validateForm()">Sign up</button>
    <div class="register-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</form>

    </div>

    <script>
        function validateForm(){
            var name=document.getElementById('name').value;
            var email=document.getElementById('email').value;
            var password=document.getElementById('password').value;
    
            
            var nameRegex=/^[a-zA-Z0-9_-]{3,16}$/;
            if(!nameRegex.test(name)){
             alert('Please enter a valid username!');
             return false;
            }
            var emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailRegex.test(email)){
             alert('Please enter a valid email!');
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