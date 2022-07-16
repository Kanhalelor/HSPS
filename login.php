<!DOCTYPE html>
<html>
<head>
    <title>HSPS E-learning</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="main-nav">
        <div class="logo-container">
            <a class="logo-link" href="./index.php" style="text-decoration: none;">
                <!-- <img src="https://www.proedakademie.com/rw_common/images/Pro-Ed%20Logo-72%20DPI.png" alt="logo" id="logo"> -->
            </a>
        </div>
        <h1 class="welcome-msg">HSPS E-learning</h1>
        <ul class="menu">
            <li><a class="home" href="./signup.php">SIGN UP</a></li>
        </ul>
    </nav>
    <div class="login-form">
        <form action="#" class="login">
            <h2 class="form-header">
                LOGIN
            </h2>
            <label for="Email">Email</label>
            <input type="email" name="username" id="mail">
            <label for="Password">Password</label>
            <input type="password" name="password" id="key">
            <button class="login-btn">LOGIN</button>
        </form>
        <p class="info">Do not have an account? <a href="./signup.php">SIGN UP.</a></p>
    </div>
    <?php include("footer.php") ?>
</body>
</html>