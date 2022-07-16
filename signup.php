<!DOCTYPE html>
<html>
<head>
    <title>HSPS E-learning</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/signup.css">
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
            <li><a class="home" href="./login.php">LOGIN</a></li>
        </ul>
    </nav>
    <div class="login-form">
        <form action="#" class="login">
            <h2 class="form-header">
                SIGN UP
            </h2>
            <label for="firstname">First Name</label>
            <input type="text" name="fname" id="fname">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname">
            <label for="email">Email</label>
            <input type="email" name="email" id="mail">
            <label for="Password">Password</label>
            <input type="password" name="password" id="key">
            <br>
            <label for="grade">Current Grade</label>
            <input type="number" name="grade" id="grade">
            <label for="field-of-study">Field of Study</label>
            <select name="field" id="field">
                <option value="Scince" selected>Science</option>
                <option value="Commerce">Commerce</option>
            </select>
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
            <label for="terms">Agree to the terms and conditions</label>
            <input type="checkbox" name="agree" id="check">
            <button class="signup-btn">SIGNUP</button>
        </form>
        <p class="info">Already have an account? <a href="./login.php">LOGIN.</a></p>
    </div>
    <?php include("footer.php") ?>
</body>
</html>