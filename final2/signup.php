<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $con = new mysqli('localhost', 'root', '', 'suptopia_users');

    // Check for a successful connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT * FROM `signup` WHERE email = '$email'";
    $result = $con->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "Email already exists. Please use a different email.";
    } else {
        // Email does not exist, proceed with registration
        $sql = "INSERT INTO `signup` (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

        if ($con->query($sql) === TRUE) {
           header("Location: mainout.php"); // Redirect to main.php
            exit();
        } else {
            echo "Error: " . $con->error;
        }
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Suptopia</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
</head>
<body>
    <nav>
        <div class="navTop">
            <div class="navItem">
                <a href="mainin.php" style="color: white; text-decoration: none;"><h1>Suptopia.</h1></a>
            </div>
        </div>
       
    </nav>
    
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <button type="submit" id="submitBtn">Enter</button>
                
                <p class="additional-info">Already have an account? <a href="login.php">Sign In</a></p>
            </form>
        </div>
    </div>
    
    <footer>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                <img src="./img/facebook.png" alt="" class="fIcon">
                    <a href="https://twitter.com/suptopia0"><img src="./img/twitter.png" alt="" class="fIcon"></a>
                    <a href="https://www.instagram.com/suptopia__/"><img src="./img/instagram.png" alt="https://www.instagram.com/suptopia__/" class="fIcon"></a>
                   
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">Suptopia company. All rights reserved. 2023.</span>
            </div>
        </div>
    </footer>
</body>
</html>
